<?php

namespace App\modeles\Outils;

/**
 * Description of Outils_FilesManager.
 *
 * @author mickael.andrieu
 */
class Outils_Files_Manager
{
    public static function deleteFile($filename, $path)
    {
        unlink($path.$filename);
    }
}
