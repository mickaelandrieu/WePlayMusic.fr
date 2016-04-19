<?php

namespace App\tests\Outils;

use App\modeles\Outils\Outils_Chaines;

class Outils_ChainesTest extends \PHPUnit_Framework_TestCase
{
    public function testRandomString(){
        $outilsChaine = new Outils_Chaines();
        $result = $outilsChaine::randomString(10,"lowercase");
    
        $this->assertEquals(preg_match("#[a-z0-9]{10}#",$result), 1);
        
    }
}