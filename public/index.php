<?php

require_once '../config/config.php';
use App\modeles\Album\Album;
use App\modeles\Album\Album_Bd;
use App\modeles\Album\Album_List;
use App\modeles\Album\Album_Ui;
use App\modeles\Musique\Musique_Ui;

try {
    $getRequest = $_GET;
    $action = isset($getRequest['a']) ? $getRequest['a'] : '';

  /* initialisation des variables */
  $titre = '';
    $c = '';
    $header = file_get_contents('../ui/fragments/header.frg.html');
    $footer = file_get_contents('../ui/fragments/footer.frg.html');
    $squelette = '../ui/pages/galerie.html.php';

    switch ($action) {
    /* écoute d'un album */
  case 'ecouter' :
      $titre = "Ecoute de l'album";
       if (isset($getRequest['id'])) {
           $id_album = $getRequest['id'];
           /* créer une playlist à partir des infos de la BD */
           $ListOfMusics = Album_Bd::getPlayList($id_album);
           if (count($ListOfMusics) == 0) {
               $c = 'Album vide, Ajoutez des pistes';
           } else {
               $i = 0;
               foreach ($ListOfMusics as $Music) {
                   $ui = Musique_Ui::factory($Music);
                   if ($i < 1) {
                       $c = '<section id="album_view" class="span6">'.$ui->makePlayer();
                       $c .= '<ol>';

                       $c .= '<li class="playing">'.$ui->makeHtml().'</li>';
                       $i = 1;
                   } else {
                       $c .= '<li>'.$ui->makeHtml().'</li>';
                   }
               }
               $c .= '</ol></section>';
           }
           /* informations relatives à l'album */

           $Album = Album_Bd::lire($id_album);
           $Album_Ui = new Album_Ui($Album);
           $c .= $Album_Ui->displayAlbumInfos();
       }
    break;
    case 'aide' :
        $titre = 'Comment ça fonctionne ?';
        $c = file_get_contents('../ui/fragments/aide.frg.html');
        $c .= <<<EOT
        <script type="text/javascript">
            $('.nav li:eq(2)').attr('class','active');
        </script>
EOT;
    break;

  default :
    /* Partie 1: les 20 derniers Albums */
    $titre = 'Les derniers Albums enregistrés';
    $SelectionOfAlbums = Album_Bd::getListAlbums(20);
    $SelectionOfAlbums = new Album_List($SelectionOfAlbums);
    $c = $SelectionOfAlbums->viewHtml();

    /* Partie 2: tous les albums */
    $AllAlbums = Album_Bd::getAllAlbums();
    $AllAlbums = new Album_List($AllAlbums);
    $c .= $AllAlbums->viewTable();
  }
} catch (Exception $e) {
    $c = $e->getMessage();
    $c .= "<pre>{$e->getTraceAsString()}</pre>";
}

ob_start();
  require_once $squelette;
  $html = ob_get_contents();
ob_end_clean();
echo $html;
