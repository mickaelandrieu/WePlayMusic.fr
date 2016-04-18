<?php

namespace App\tests\functional;

use App\tests\TestCase;

class CheckMusicManagementTest extends TestCase
{
    public function testWeShouldBeAbleToAddMusicToAnAlbum()
    {
        $this->markTestSkipped('We need to do test & fixtures and minimal DOM check');
    }
    
    public function testWeShouldBeAbleToUpdateAMusic()
    {
        // access to edit form
        // submit a post call
        // check in album view/listen that the music has been updated
        $this->markTestSkipped('We need to do test & fixtures and minimal DOM check');
    }
    
    public function testWeShouldBeAbleToDeleteAMusic()
    {
        // call the url that delete an album
        // it's a functional test, we don't need to open a modal box here
        $this->markTestSkipped('We need to do test & fixtures and minimal DOM check');
    }
}