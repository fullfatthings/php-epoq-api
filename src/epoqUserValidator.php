<?php
namespace FullFatThings\phpEpoqApi;

class epoqUserValidator {
    static $numColumns = 26;

    static public function validateUser($user_array) {

        if (sizeof($user_array) != self::numColumns) {
            return [false, 'Incorrect number of items in array'];
        }

        // TODO: check column lengths
        // TODO: check that types are correct 
        return [true, 'All OK'];
    }


}
