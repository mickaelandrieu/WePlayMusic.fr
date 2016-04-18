<?php

namespace App\tests\functional;

use App\tests\TestCase;

class CheckAlbumManagementTest extends TestCase
{
    public function testWeShouldSeeAListOfAlbums()
    {
        $this->markTestSkipped('We need to do test & fixtures and minimal DOM check');
    }
    
    public function testWeShouldBeAbleToUpdateAnAlbum()
    {
        // access to edit form
        // submit a post call
        // check in album list that the select album has been updated
        $this->markTestSkipped('We need to do test & fixtures and minimal DOM check');
    }
    
    public function testWeShouldBeAbleToDeleteAnAlbum()
    {
        // call the url that delete an album
        // it's a functional test, we don't need to open a modal box here
        $this->markTestSkipped('We need to do test & fixtures and minimal DOM check');
    }
}