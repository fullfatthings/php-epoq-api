<?php

namespace \fullfatthings\phpEpoqApi\epoq;

class EpoqService
{
    protected $client;
    function __construct(EpoqClientInterface $client) {
        $this->client = $client;
    }

    public function signUp($user_rows) {
        // Check the rows are correct and convert to CSV.
        $line_number = 0;
        $csv_file = '';
        foreach ($user_rows as $user_row) {
            $line_number++;
            list($success, $message) = epoqUserValidator::validateUser($user_row);
            if (!$success) {
                throw new InvalidArgumentException('Error with user input on line ' . $line_number . ' ' . $message);
            }
            $csv_file .= implode(',', $user_row) . PHP_EOL;
        }

        // Post the values using the client.
        return $this->client->postSewins($csv_file);
    }
}
