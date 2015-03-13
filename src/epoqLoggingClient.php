<?php
/**
 * Epoq Logging Client
 *
 * @package    php-epoq-api
 * @author     Jeremy French <Jeremy@fullfatthings.com>
 */
namespace FullFatThings\phpEpoqApi;

/**
 * EpoqLoggingClient
 * 
 * This class will work as a client to the epoq service but will only
 * log output without making any API calls.
 *
 * This allows people to test their code will work with this library
 * before having epoq api keys.
 */
class EpoqLoggingClient implements EpoqClientInterface
{
    /**
     * constructr
     *
     * @param \Psr\Log\LoggerInterface $logger, the logger to use
     */
    function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * postSewins
     *
     * This will take the csv and log that it has been called as an info
     * event to the logger passed to the class.
     *
     * @param string $csvfile.
     */
    public function postSewins($csvfile)
    {
        $this->logger->info('epoq_api logging sewin post', ['csv_file' => $csvfile]);
        return true;
    }
}
