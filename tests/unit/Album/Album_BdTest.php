<?php
namespace App\tests\units\Album;

use App\modeles\Album\Album_Bd;
use App\modeles\Outils\Outils_Bd;

class Album_BdTest extends \PHPUnit_Framework_TestCase
{
    public function testGetAllAlbums()
    {
        var_dump(Album_Bd::getAllAlbums());
    }
    
    public function setUp() {
        $db = Outils_Bd::getInstance()->getConnexion();
        
        /* preparer le requete */
        $sth = $db->prepare('insert into tp_upload set id=1,titre="titre", auteur="auteur", fichier="chemin/fichier", dateIns="10/10/2016"');
        
        $result = $sth->execute();
    }
    
    public function tearDown() {
         $db = Outils_Bd::getInstance()->getConnexion();
         $sth = $db->prepare('DELETE from tp_upload');
         
         $sth->execute();
    }
}