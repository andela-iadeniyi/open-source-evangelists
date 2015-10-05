<?php

/**
*
*/

namespace Ibonly\GithubStatusEvangelist\Test;

use PHPUnit_Framework_TestCase;
use Ibonly\GithubStatusEvangelist\EvangelistStatus;
use Exception;

class EvangelistExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test exception if empty string or nothing is passed as argument
     *
     * @return NULL
     */
    public function sampleInput() {
        return [[''], []];
    }

    /**
     * @dataProvider sampleInput
     *
     * @expectedException Exception
     */
    public function testNullInputException($username) {
        $evangelists = new EvangelistStatus($username);
    }
}