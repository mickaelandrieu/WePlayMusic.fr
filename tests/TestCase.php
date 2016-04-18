<?php

namespace App\tests;

/**
 * Class that extends PHPUnit and adds some usefull new assertions
 * 
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    public function assertResponseOk($url)
    {
        $headers = get_headers($url);
        $statusCode = (int) substr($headers[0], 9, 3);

        $this->assertEquals($statusCode, 200, sprintf('Expected url %s to be accessible, %s status code returned', $url, $statusCode));
    }

}