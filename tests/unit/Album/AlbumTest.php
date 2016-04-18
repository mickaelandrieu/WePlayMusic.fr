<?php

namespace App\tests\units\Album;

use App\modeles\Album\Album;

class AlbumTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanciationOk()
    {
        $this->assertInstanceOf('App\modeles\Album\Album', Album::initialize([
            'id' => 1,
            'titre' => 'Album title',
            'auteur' => 'Alan Theo',
            'fichier' => '/tmp/fake/album_img.png'
            ])
        );
    }
}