<?php

namespace \fullfatthings\phpEpoqApi\epoq;

class EpoqLoggingClient implements EpoqClientInterface
{
    function __construct(\Psr\Log\LoggerInterface $logger) {
      $this->logger = $logger;
    }

    public function postSewins($csvfile) {
        $this->logger->info('epoq_api logging sewin post', ['csv_file' => $csvfile]);
        return true;
    }
}
