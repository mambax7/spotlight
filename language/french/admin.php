<?php
/**
* $Id: admin.php, v 2.0 12 March 2004 catzwolf Exp $
* Module: Spotlight
* Version: v2.0
* Release Date: 12 March 2004
* Author: Catzwolf
* Orginal Author: Herko (me at herkocoomans dot net) and    
*                                    Dawilby (willemsen1 at chello dot nl)
* modified by m0nty to use XFSection instead of WFSection
* Licence: GNU
*/

define('_AM_KUHT_NAME_CONF','Configuration du téléchargement d\'images');
define('_AM_KUHT_NAME_NEWS','Configuration du bloc articles');
//define('_AM_KUHT_NAME_XFSS','Configuration du Bloc XF-Section'); gard&eacute; au cas ou ....
define('_AM_KUHT_NAME_WFSS','Configuration du bloc WF-Section');
define('_AM_KUHT_NAME_UPLOAD','T&eacute;l&eacute;chargements d\'images');

define('_AM_KUHT_NAME_NEWSBLOCK','Bloc articles');
//define('_AM_KUHT_NAME_XFSSBLOCK','Config du Bloc XF-Section');
define('_AM_KUHT_NAME_WFSSBLOCK','Bloc WF-Section');
define('_AM_KUHT_NAME_CONFIG','Paramètres généraux');

define('_AM_KUHT_NAME_INTROTEXT','Saisies de Textes d\'Introduction');
define('_AM_ADMINCONFIGMENU','Optionnellement, vous pouvez saisir quelques explications pour les diff&eacute;rentes interface de la Mise &agrave; la Une.');

define('_AM_WRITE_INTRO1','Ceci est le texte pr&eacute;format&eacute; situ&eacute; au d&eacute;but du bloc.');
define('_AM_WRITE_INTRO2','Si vous avez d\'autres Actualit&eacute;s, Ceci en est le texte d\'introduction.');
define('_AM_WRITE_INTRO3','Ceci est le pied de Page, sit&eacute; avant la barre des statistiques, si cette derni&egrave;re est affich&eacute;e');

define('_AM_SUBMIT','Valider');
define('_AM_RESET','Effacer');

define('_AM_TITLE','Titre');
define('_AM_STORYID','ID');
define('_AM_CATEGORYT','Catégorie');
define('_AM_STATUS','Etats');
define('_AM_CHANGED','Modifi&eacute;');
define('_AM_WEIGHT', 'Poids');

define('_AM_TOPIC','Catégorie');
define('_AM_POSTER','Auteur');
define('_AM_PUBLISHED','Publi&eacute;e');
define('_AM_ACTION','Action');
define('_AM_EDIT','Editer');
define('_AM_DELETE','Effacer');
define('_AM_LAST10NEWARTS','Les 10 derniers articles');
//define('_AM_LAST10XFSARTS','Les 10 derniers Articles XF-Section');
define('_AM_LAST10WFSARTS','Les 10 derniers articles WF-Section');
define('_AM_MESSAGE','Base de donn&eacute;es mise &agrave; jour avec succ&egrave;s');
define('_AM_NOTFOUND','Aucun article trouv&eacute;!');
define('_AM_INTROTEXT','Config du Texte d\'Intro');

define('_AM_SELECT_NEWS','Configuration des articles');
define('_AM_SELECT_SPOTLIGHT_NEWS','Sélection de l\'article à mettre à la Une :');
define('_AM_SELECT_AUTO_NEWS','Mettre à la Une les articles r&eacute;cents ?');
define('_AM_SELECT_SPOTLIGHT','S&eacute;lection d\'un Article &agrave; la Une');
define('_AM_SELECT_NEWS_AUTO_IMG','Visualiser l\'image de la cat&eacute;gorie de l\'article ?');
define('_AM_SELECT_IMG','S&eacute;lectionner l\'image pour cet article :');
define('_AM_SELECT_UPLOADCHANLOGO','T&eacute;l&eacute;chargement de l\Image &agrave; la Une:');
define('_AM_IMAGE_ALIGN','(Alignement de l\'image)');
define('_AM_FILEEXISTS','Le fichier existe sur le Serveur, veuillez en choisir un autre !');

//define('_AM_SELECT_XFS','Configuration XF-Section');
//define('_AM_SELECT_SPOTLIGHT_XFS','Selection de l\'Article XF-Section &agrave; la Une :');
//define('_AM_SELECT_AUTO_XFS','Mettre à la Une les articles r&eacute;cents XF-Section ?');
//define('_AM_SELECT_IMG_XFS','Selection de l\'image  :');
//define('_AM_SELECT_XFS_AUTO_IMG','Visualiser l\'image de la cat&eacute;gorie de l\'aArticle XF-Section ?');

define('_AM_SELECT_WFS',' Configuration WF-Section');
define('_AM_SELECT_SPOTLIGHT_WFS','Sélection de l\'article WF-Section :');
define('_AM_SELECT_AUTO_WFS','Mettre &agrave; la Une les articles r&eacute;cents de WF-Section?');
define('_AM_SELECT_IMG_WFS','Selection de l\'image = WF-Section :');
define('_AM_SELECT_WFS_AUTO_IMG','Visualiser l\'image de la cat&eacute;gorie de l\'article WF-Section ?');

define("_AM_UPLOAD", "Param&eacute;trages de T&eacute;l&eacute;chargement :");
define("_AM_SERVERSTATUS", "Etats du Serveur");
define("_AM_SAFEMODE", "Mode s&eacute;curit&eacute;");
define("_AM_UPLOADS", "T&eacute;l&eacute;chargements sur le serveur :");
define("_AM_OFF", "OFF");
define("_AM_ON", "ON");
define("_AM_SAFEMODEPROBLEMS", " (ceci peut causer des probl&egrave;mes) ");
define("_AM_UPLOADPATH", "Chemin de T&eacute;l&eacute;chargement ::");
define("_AM_ANDTHEMAX", " et la taille max des T&eacute;l&eacute;chargements = ");
define("_AM_DELETEFILE", "ATTENTION<br/>Effacement de ce Fichier ?");
define("_AM_ERRORDELETEFILE", "Erreur &agrave; la Supression de l\'Image !");
define("_AM_UPLOADLINKIMAGE", "Fichier &agrave; T&eacute;l&eacute;charger");
define("_AM_UPLOADIMAGE", "T&eacute;l&eacute;chargement ");
define("_AM_BUTTON", "Image de la Une :");
define("_AM_CHANIMAGEEXIST", "Le fichier existe sur le Serveur, veuillez en choisir un Autre !");
define("_AM_CHANNOIMAGEEXIST", "Aucune Image s&eacute;lectionn&eacute;e");
define("_AM_FILEDELETED", "Image Suprim&eacute;e !");
define("_AM_DELETEIMAGE", "Suprimer Image");
define("_AM_ERRORMESSAGE", "Erreur de mise &agrave; jour de la base de donn&eacute;e.");
define("_AM_NOTERESIZE", "L'image a &eacute;t&eacute; redimensionn&eacute;e");
define("_AM_DIRSELECT", "Choisir le r&eacute;pertoire de t&eacute;l&eacute;chargement:");
define("_AM_NEWSIMAGES", "Repertoire de nouvelles images");
define("_AM_WFSECTIONIMAGES", "Repertoire image d'article WF-Section");
define("_AM_UPLOADCHANLOGO", "Le logo de cette page");
define("_AM_FILEUPLOADED", "Fichier t&eacute;l&eacute;charg&eacute;");

define("_AM_SPOT_LEFT", "Gauche");
define("_AM_SPOT_CENTER", "Centre");
define("_AM_SPOT_RIGHT", "Droite");
define("_AM_SPOT_IMAGEALIGN", "Alignement de l'image :");
?>
