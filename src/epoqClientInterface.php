<?php
/**
 * Epoq Client Interface
 *
 * Defines an interface for the epoq client. So that alternate classes
 * can be used for logging and debugging.
 *
 * @package    php-epoq-api
 * @author     Jeremy French <Jeremy@fullfatthings.com>
 */
namespace FullFatThings\phpEpoqApi;

/**
 * This is the name of the interface.
 */
interface EpoqClientInterface
{
    /**
     * postSweins should take a string of csv data and post it to the
     * epoq-api.
     * @param string $csv_data csv string of the sewin data.
     * @returns boolean indicating success of the call.
     * @throws Exception if call to the api fails.
     */
    public function postSewins($csv_data);
}
