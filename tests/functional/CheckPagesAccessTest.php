<?php

namespace App\tests\functional;

use App\tests\TestCase;

class CheckPagesAccessTest extends TestCase
{
    const WEBSITE_URL = "https://box-ubuntu-mickaelandrieu.c9users.io/WePlayMusic.fr/";
    
    public function testHomePageIsAvailable()
    {
        $this->assertResponseOk(self::WEBSITE_URL);
    }
    
    public function testHelpPageIsAvailable()
    {
        $this->markTestSkipped('Test need to be done');
    }
    
    public function testAdminWithNoAlbumsPageIsAvailable()
    {
        $this->markTestSkipped('Test need to be done');
    }
    
    public function testAddAlbumPageIsAvailable()
    {
        $this->markTestSkipped('Test need to be done');
    }
    
    /**
     * The following tests need some fixtures
     * Some knowns albums to be populated in database and file store
     * We need to know album id
     */
    // tips: we need to create an album and get the id, to check for the real url
    public function testEditAlbumPageIsAvailable()
    {
        $this->markTestSkipped('Test & fixtures need to be done');
    }
    
    public function testAdminWithAlbumsPageIsAvailable()
    {
        $this->markTestSkipped('Test & fixtures need to be done');
    }
    
    public function testUploadMusiquePageIsAvailable()
    {
        $this->markTestSkipped('Test & fixtures need to be done');
    }
}