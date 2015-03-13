<?php
/**
 * Epoq User Validator
 *
 * Validates user details for the epoq api.
 *
 * @package    php-epoq-api
 * @author     Jeremy French <Jeremy@fullfatthings.com>
 */

namespace FullFatThings\phpEpoqApi;

/**
 * Epoq User Validator
 *
 * Class provides validation for items to be passed to the epoq sewin api.
 */
class EpoqUserValidator
{
    static $NUMCOLUMNS = 26;

    /**
     * ValidateUser
     *
     * Will check the passed in user array for structural issues.
     *
     * @param array $user_array an array of details representing one user.
     *
     * @return array with the first element being boolean representing
     *   valid or invalid, and the second element providing a description
     *   for either state.
     */
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
