<?php
namespace FullFatThings\phpEpoqApi;

class EpoqUserValidator
{
    static $NUMCOLUMNS = 26;

    static public function validateUser($user_array)
    {

        if (sizeof($user_array) != self::$NUMCOLUMNS) {
            return [false, 'Incorrect number of items in array'];
        }

        // TODO: check column lengths
        // TODO: check that types are correct 
        return [true, 'All OK'];
    }


}
