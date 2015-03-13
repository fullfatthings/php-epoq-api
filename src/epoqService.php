<?php
/**
 * Epoq Service
 *
 * Service class for interacting with the epoq api
 *
 * @package    php-epoq-api
 * @author     Jeremy French <Jeremy@fullfatthings.com>
 */
namespace FullFatThings\phpEpoqApi;

/**
 * Service class for interacting with the epoq api
 * Implementations should use this class and pass the 
 * required client to it in the constructor.
 *
 * This class will handle validation and converting the
 * data structures to an epoq api friendly one.
 */
class EpoqService
{
    /**
     * The epoq client class passed to the constructor
     */
    protected $client;
    /**
     * Constructor
     *
     * @param EpoqClientInterface $client the client to use.
     */
    function __construct(EpoqClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * SignUp
     *
     * This will validate and attempt to sign up the users passed to it,
     *
     * @param array $user_rows, an array of user arrays. Each user array 
     *   should be a valid structure according to the epoq api.
     *
     * @return boolean true if the call succeeds.
     * @throws InvalidArgumentException if the $user_rows are not valid.
     * @throws Exception if the call to the client has an error. 
     */
    public function signUp($user_rows)
    {
        // Check the rows are correct and convert to CSV.
        $line_number = 0;
        $csv_file = '';
        foreach ($user_rows as $user_row) {
            $line_number++;
            list($success, $message) = EpoqUserValidator::validateUser($user_row);
            if (!$success) {
                throw new \InvalidArgumentException('Error with user input on line ' . $line_number . ' ' . $message);
            }
            $csv_file .= implode(',', $user_row) . PHP_EOL;
        }
        // Post the values using the client.
        return $this->client->postSewins($csv_file);
    }
}
