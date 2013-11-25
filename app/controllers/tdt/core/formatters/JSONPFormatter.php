<?php

namespace tdt\core\formatters;

/**
 * JSONP Formatter
 * @copyright (C) 2011,2013 by OKFN Belgium vzw/asbl
 * @license AGPLv3
 * @author Michiel Vancoillie <michiel@okfn.be>
 */
class JSONPFormatter implements IFormatter{

    public static function createResponse($dataObj){

        // Create response
        $response = \Response::make(self::getBody($dataObj), 200);

        // Set headers
        $response->header('Content-Type', 'application/json;charset=UTF-8');

        return $response;
    }

    public static function getBody($dataObj){

        // Check if a callback parameter was set
        $callback = \Input::get('callback');
        if(empty($callback)){
            \App::abort(452, "To request JSONP you need to add a callback parameter (...jsonp?callback=functionname)");
        }

        if($dataObj->is_semantic){

            // Check if a configuration is given
            $conf = array();
            if(!empty($dataObj->semantic->conf)){
                $conf = $dataObj->semantic->conf;
            }

            // Serializer instantiation
            $ser = \ARC2::getRDFJSONSerializer($conf);

            // Use ARC to serialize to JSON (override)
            return $ser->getSerializedTriples($dataObj->data->getTriples());
        }

        // Get the JSON data
        $data = $dataObj->data;
        if (is_object($dataObj->data)) {
            $data = get_object_vars($dataObj->data);
        }

        $data = str_replace("\/", "/", json_encode($data));

        // Build the body
        $body = $callback . '(' . $data .  ');';
        return $body;
    }

    public static function getDocumentation(){
        return "Prints JSON but will wrap the output in the callback function specified.";
    }

}
