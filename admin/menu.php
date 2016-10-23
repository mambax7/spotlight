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

// defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

//$path = dirname(dirname(dirname(__DIR__)));
//include_once $path . '/mainfile.php';

/** @var XoopsModuleHandler $moduleHandler */
$moduleHandler = xoops_getHandler('module');
$module        = $moduleHandler->getByDirname(basename(dirname(__DIR__)));
$pathIcon32    =& $module->getInfo('icons32');
xoops_loadLanguage('admin', $module->dirname());
xoops_loadLanguage('modinfo', $module->dirname());

$pathModuleAdmin =& $module->getInfo('dirmoduleadmin');
$pathLanguage    = dirname(dirname(dirname(__DIR__))) . $pathModuleAdmin;
if (!file_exists($fileinc = $pathLanguage . '/language/' . $GLOBALS['xoopsConfig']['language'] . '/' . 'main.php')) {
    $fileinc = $pathLanguage . '/language/english/main.php';
}
include_once $fileinc;

$adminmenu              = array();
$i                      = 0;
$adminmenu[$i]['title'] = _AM_MODULEADMIN_HOME;
$adminmenu[$i]['link']  = 'admin/index.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/home.png';
//++$i;
//$adminmenu[$i]['title'] = _MI_SPOT_ADMENU1;
//$adminmenu[$i]['link'] = "admin/main.php";
//$adminmenu[$i]["icon"]  = $pathIcon32 . '/home.png';
++$i;
$adminmenu[$i]['title'] = _MI_SPOT_ADMENU2;
$adminmenu[$i]['link']  = 'admin/main.php?op=news';
$adminmenu[$i]['icon']  = $pathIcon32 . '/content.png';
++$i;
$adminmenu[$i]['title'] = _MI_SPOT_ADMENU4;
$adminmenu[$i]['link']  = 'admin/mini.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/highlight.png';
++$i;
$adminmenu[$i]['title'] = _MI_SPOT_ADMENU5;
$adminmenu[$i]['link']  = 'admin/xml.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/album.png';
++$i;
$adminmenu[$i]['title'] = _MI_SPOT_ADMENU3;
$adminmenu[$i]['link']  = 'admin/main.php?op=wfsections';
$adminmenu[$i]['icon']  = $pathIcon32 . '/view_detailed.png';
++$i;
$adminmenu[$i]['title'] = _AM_SPOT_NAME_UPLOAD;
$adminmenu[$i]['link']  = 'admin/upload.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/photo.png';
++$i;
$adminmenu[$i]['title'] = _AM_MODULEADMIN_ABOUT;
$adminmenu[$i]['link']  = 'admin/about.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/about.png';
