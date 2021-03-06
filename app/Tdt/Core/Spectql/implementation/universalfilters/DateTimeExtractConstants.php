<?php

namespace Tdt\Core\Spectql\implementation\Universalfilters;

use Tdt\Core\Spectql\implementation\universalfilters\CheckInFunction;
use Tdt\Core\Spectql\implementation\universalfilters\Identifier;
use Tdt\Core\Spectql\implementation\universalfilters\NormalFilterNode;
use Tdt\Core\Spectql\implementation\universalfilters\UniversalFilterNode;

class DateTimeExtractConstants
{

    private function __construct()
    {

    }

    public static $EXTRACT_SECOND = "SECOND";
    public static $EXTRACT_MINUTE = "MINUTE";
    public static $EXTRACT_HOUR = "HOUR";
    public static $EXTRACT_DAY = "DAY";
    public static $EXTRACT_WEEK = "WEEK";
    public static $EXTRACT_MONTH = "MONTH";
    public static $EXTRACT_YEAR = "YEAR";
    public static $EXTRACT_MINUTE_SECOND = "MINUTE_SECOND"; //MINUTES:SECONDS
    public static $EXTRACT_HOUR_SECOND = "HOUR_SECOND"; //HOURS:MINUTES:SECONDS
    public static $EXTRACT_HOUR_MINUTE = "HOUR_MINUTE"; //HOURS:MINUTES
    public static $EXTRACT_DAY_SECOND = "DAY_SECOND"; //DAYS HOURS:MINUTES:SECONDS
    public static $EXTRACT_DAY_MINUTE = "DAY_MINUTE"; //DAYS HOURS:MINUTES
    public static $EXTRACT_DAY_HOUR = "DAY_HOUR"; //DAYS HOURS
    public static $EXTRACT_YEAR_MONTH = "YEAR_MONTH"; //YEARS-MONTHS

}

