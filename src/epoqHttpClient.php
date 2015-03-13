<?php
/**
 * Stub for the epoqHTTP client. Not yet implemented
 */
namespace FullFatThings\phpEpoqApi;

class EpoqHttpClient implements EpoqClientInterface
{
    protected $api_end_point;
    protected $token;
    protected $secret;
    public $logger;

    function __construct($api_end_point, $token, $secret, \Psr\Log\LoggerInterface $logger = null) 
    {
        $this->api_end_point = $api_end_point;
        $this->token = $token;
        $this->secret = $secret;
        $this->logger = $logger;
    }
}
