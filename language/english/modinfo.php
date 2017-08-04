<?php
/**
 *
 * Module: Spotlight
 * Version: v2.0
 * Release Date: 12 March 2004
 * Author: Catzwolf
 * Orginal Author: Herko (me at herkocoomans dot net) and
 *                 Dawilby (willemsen1 at chello dot nl)
 * Licence: GNU
 */

// The name of this module
define('_MI_SPOT_NAME', ' Spotlight');

// A brief description of this module
define('_MI_SPOT_DESC', ' Puts a news item in a central spotlight block.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_SPOT_BNAME', 'Spotlight - News');
define('_MI_SPOT_BNAME1', 'Spotlight - WF-Sections');

// Names of admin menu items
define('_MI_SPOT_ADMENU1', 'General Configuration');
define('_MI_SPOT_ADMENU2', 'News Block');
define('_MI_SPOT_ADMENU3', 'WF-Section Block');
define('_MI_SPOT_ADMENU4', 'Mini Spotlights');
define('_MI_SPOT_ADMENU5', 'News Ticker');
define('_AM_SPOT_NAME_UPLOAD', 'Upload Image');

define('_MI_SPOT_UPLOADDIR', 'News Image Upload Directory (No trailing slash)');
define('_MI_SPOT_WFUPLOADDIR', 'WF-Section Image Upload Directory (No trailing slash)');
define('_MI_SPOT_LINKIMAGES', 'Spotlight Image Upload Directory (No trailing slash)');
define('_MI_SPOT_MAXFILESIZE', 'Maximum upload size');
define('_MI_SPOT_IMGWIDTH', 'Maximum upload Image width');
define('_MI_SPOT_IMGHEIGHT', 'Maximum upload Image height');
define('_MI_SPOT_UPDATETHUMBS', 'Always update thumbs?');

define('_MI_SPOT_NEWSSHOWTHUMBS', 'Use Thumbnail for News Image?');
define('_MI_SPOT_DIMGWIDTH', 'News Image Display width');
define('_MI_SPOT_DIMGHEIGHT', 'News Image Display height');
define('_MI_SPOT_RETAINIMGSIZE', 'Use News image Actual size?');
define('_MI_SPOT_PERPAGE', 'Maximum number of articles to be displayed?');
define('_MI_SPOT_MORE_LINKS', 'Show other news list?');
define('_MI_SPOT_TITLECHARS', 'Length of spotlight News title');
define('_MI_SPOT_DISP', 'Number of News to Display');
define('_MI_SPOT_TOPICS', 'Show News topic select box?'); // By Romu R&B.
define('_MI_SPOT_TEXTVIEW', 'Show News teaser?');
define('_MI_SPOT_INCSTATS', 'Include News mini-stats line?');
define('_MI_SPOT_HOMETEXTCHARS', 'Length of Spotlight News teaser');
define('_MI_SPOT_HOMETEXTDSC', 'In number of letters. 0 = Full Text. (Only affects Non-Html Stories)');
define('_MI_SPOT_CHOOSETEMPLATE', 'Choose two column News template?');
define('_MI_SPOT_CHOOSETEMPLATEDESC', 'A stacked News template will be used if no is selected');
define('_MI_SPOT_ORDER', 'News Story Display Order');
define('_MI_SPOT_QUALITY', 'News Image Quality');
define('_MI_SPOT_STOPSHOUTING', 'Stop Shouting in Titles');
define('_MI_SPOT_REMIMGMAIN', 'Remove Images from Main Spotlight News Story?');
define('_MI_SPOT_REMIMGTEAS', 'Remove Images from News Teasers?');

define('_MI_SPOT_WFSSHOWTHUMBS', 'Use Thumbnail for WF-Section Image?');
define('_MI_SPOT_WFDIMGWIDTH', 'WF-Section Image Display width');
define('_MI_SPOT_WFDIMGHEIGHT', 'WF-Section Image Display height');
define('_MI_SPOT_WFRETAINIMGSIZE', 'Use WF-Section image Actual size?');
define('_MI_SPOT_WFPERPAGE', 'Maximum number of articles to be displayed?');
define('_MI_SPOT_WFMORE_LINKS', 'Show other WF-Section list?');
define('_MI_SPOT_WFTITLECHARS', 'Length of spotlight WF-Section title');
define('_MI_SPOT_WFDISP', 'Number of WF-Section articles to Display');
define('_MI_SPOT_WFTOPICS', 'Show WF-Section topic select box?'); // By Romu R&B.
define('_MI_SPOT_WFTEXTVIEW', 'Show WF-Section teaser?');
define('_MI_SPOT_WFINCSTATS', 'Include WF-Section mini-stats line?');
define('_MI_SPOT_WFHOMETEXTCHARS', 'Length of Spotlight WF-Section teaser');
define('_MI_SPOT_WFHOMETEXTDSC', 'In number of letters. 0 = Full Text. (Only affects Non-Html Articles)');
define('_MI_SPOT_WFCHOOSETEMPLATE', 'Choose two column WF-Section template?');
define('_MI_SPOT_WFCHOOSETEMPLATEDESC', 'A stacked WF-Section template will be used if no is selected');
define('_MI_SPOT_WFORDER', 'WF-Section Article Display Order');
define('_MI_SPOT_WFQUALITY', 'WF-Section Image Quality');
define('_MI_SPOT_WFREMIMGMAIN', 'Remove Images from Main WF-Section Article?');
define('_MI_SPOT_WFREMIMGTEAS', 'Remove Images from WF-Section Article Teasers?');
//2.3
define('_MI_SPOT_CONFIG_WF', '<strong>WF-Section</strong>');
define('_MI_SPOT_CONFIG_WF_DSC', 'Preferences for WF-Section');

//2.4
//Help
define('_MI_SPOT_DIRNAME', basename(dirname(dirname(__DIR__))));
define('_MI_SPOT_HELP_HEADER', __DIR__.'/help/helpheader.tpl');
define('_MI_SPOT_BACK_2_ADMIN', 'Back to Administration of ');
define('_MI_SPOT_OVERVIEW', 'Overview');

//define('_MI_SPOT_HELP_DIR', __DIR__);

//help multi-page
define('_MI_SPOT_DISCLAIMER', 'Disclaimer');
define('_MI_SPOT_LICENSE', 'License');
define('_MI_SPOT_SUPPORT', 'Support');
