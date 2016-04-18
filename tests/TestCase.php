<?php

namespace App\tests;

/**
 * Class that extends PHPUnit and adds some useful new assertions
 * 
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    public function assertResponseOk($url)
    {
        $headers = get_headers($url);
        $statusCode = (int) substr($headers[0], 9, 3);
        
        // in case of redirections
        if (in_array($statusCode, [301, 302])) {
            $statusCode = (int) substr($headers[14], 9, 3); // should be tested => inception !
        }

        $this->assertEquals($statusCode, 200, sprintf('Expected url %s to be accessible, %s status code returned', $url, $statusCode));
    }

}