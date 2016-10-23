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

define('_AM_KUHT_NAME_CONF','Paramètres généraux');
define('_AM_KUHT_NAME_NEWS','Configuration du bloc des actualit&eacute;s');
//define('_AM_KUHT_NAME_XFSS','Configuration du bloc XF-Section'); gard&eacute; au cas ou ....
define('_AM_KUHT_NAME_WFSS','Configuration du bloc WF-Section');
define('_AM_KUHT_NAME_UPLOAD','T&eacute;l&eacute;chargement d\'images');

define('_AM_KUHT_NAME_NEWSBLOCK','Bloc des actualit&eacute;s');
//define('_AM_KUHT_NAME_XFSSBLOCK','Bloc XF-Section');
define('_AM_KUHT_NAME_WFSSBLOCK','Config du bloc WF-Section');
define('_AM_KUHT_NAME_CONFIG','Config des mises &agrave; la Une');

define('_AM_KUHT_NAME_INTROTEXT','Saisies de textes d\'introduction');
define('_AM_ADMINCONFIGMENU','Optionnellement, vous pouvez saisir quelques explications pour les diff&eacute;rentes interface de la mise &agrave; la Une.');

define('_AM_WRITE_INTRO1','Ceci est le texte pr&eacute;format&eacute; situ&eacute; au d&eacute;but du bloc.');
define('_AM_WRITE_INTRO2','Si vous avez d\'autres actualit&eacute;s, ceci en est le texte d\'introduction.');
define('_AM_WRITE_INTRO3','Ceci est le pied de page, sit&eacute; avant la barre des statistiques, si cette derni&egrave;re est affich&eacute;e');

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
define('_AM_LAST10NEWARTS','Les 10 derni&egrave;res actualit&eacute;s');
//define('_AM_LAST10XFSARTS','Les 10 derniers Articles XF-Section');
define('_AM_LAST10WFSARTS','Les 10 derniers articles WF-Section');
define('_AM_MESSAGE','Base de donn&eacute;es mise &agrave; jour avec succ&egrave;s');
define('_AM_NOTFOUND','Aucun article trouv&eacute;!');
define('_AM_INTROTEXT','Config du texte d\'intro');

define('_AM_SELECT_NEWS','Configuration des actualit&eacute;s');
define('_AM_SELECT_SPOTLIGHT_NEWS','S&eacute;lection de l\'actualit&eacute; &agrave; la Une:');
define('_AM_SELECT_AUTO_NEWS','Mise &agrave; la une des actualit&eacute;s r&eacute;centes?');
define('_AM_SELECT_SPOTLIGHT','S&eacute;lection d\'un article &agrave; la Une');
define('_AM_SELECT_NEWS_AUTO_IMG','Visualiser l\'image de la cat&eacute;gorie de l\'actualit&eacute;?');
define('_AM_SELECT_IMG','S&eacute;lectionner une image pour l\'actualit&eacute; &agrave; la Une :');
define('_AM_SELECT_UPLOADCHANLOGO','T&eacute;l&eacute;chargement de l\image &agrave; la Une:');
define('_AM_IMAGE_ALIGN','(Alignement de l\'image)');
define('_AM_FILEEXISTS','Le Fichier existe sur le serveur, veuillez en choisir un autre !');

//define('_AM_SELECT_XFS','Configuration XF-Section');
//define('_AM_SELECT_SPOTLIGHT_XFS','Selection de l\'Article XF-Section &agrave; la Une :');
//define('_AM_SELECT_AUTO_XFS','Mise &agrave; la Une des r&eacute;cents Article de XF-Section ?');
//define('_AM_SELECT_IMG_XFS','Selection de l\'Image de la Une XF-Section :');
//define('_AM_SELECT_XFS_AUTO_IMG','Visualiser l\'Image de la Cat&eacute;gorie de l\'Article XF-Section ?');

define('_AM_SELECT_WFS',' Configuration WF-Section');
define('_AM_SELECT_SPOTLIGHT_WFS','Selection de l\'article WF-Section &agrave; la Une :');
define('_AM_SELECT_AUTO_WFS','Mise &agrave; la Une des r&eacute;cents articles de WF-Section?');
define('_AM_SELECT_IMG_WFS','Selection de l\'image de la Une WF-Section :');
define('_AM_SELECT_WFS_AUTO_IMG','Visualiser l\'image de la cat&eacute;gorie de l\'article WF-Section ?');

define("_AM_UPLOAD", "Param&eacute;trages de t&eacute;l&eacute;chargement :");
define("_AM_SERVERSTATUS", "Etats du serveur");
define("_AM_SAFEMODE", "Mode s&eacute;curit&eacute;");
define("_AM_UPLOADS", "T&eacute;l&eacute;chargements sur le serveur :");
define("_AM_OFF", "OFF");
define("_AM_ON", "ON");
define("_AM_SAFEMODEPROBLEMS", " (ceci peut causer des probl&egrave;mes) ");
define("_AM_UPLOADPATH", "Chemin de t&eacute;l&eacute;chargement ::");
define("_AM_ANDTHEMAX", " et la taille max des t&eacute;l&eacute;chargements = ");
define("_AM_DELETEFILE", "ATTENTION<br/>Effacement de ce fichier ?");
define("_AM_ERRORDELETEFILE", "Erreur &agrave; la supression de l\'image !");
define("_AM_UPLOADLINKIMAGE", "Fichier &agrave; t&eacute;l&eacute;charger");
define("_AM_UPLOADIMAGE", "T&eacute;l&eacute;chargement ");
define("_AM_BUTTON", "Image de la Une :");
define("_AM_CHANIMAGEEXIST", "Le fichier existe sur le serveur, veuillez en choisir un autre !");
define("_AM_CHANNOIMAGEEXIST", "Aucune image s&eacute;lectionn&eacute;e");
define("_AM_FILEDELETED", "Image suprim&eacute;e !");
define("_AM_DELETEIMAGE", "Suprimer image");
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
define("_AM_SPOT_IMAGEALIGN", "Aligner image Spotlight:");
?>
