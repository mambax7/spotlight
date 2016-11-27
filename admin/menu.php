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

use Xmf\Module\Admin;
use Xmf\Module\Helper;

$pathIcon32 = Admin::menuIconPath('');
$moduleDirName = basename(dirname(__DIR__));


$adminmenu[] = array(
    'title' => _AM_MODULEADMIN_HOME,
    'link'  => 'admin/index.php',
    'icon'  => $pathIcon32 . '/home.png'
);

$adminmenu[] = array(
    'title' => _MI_SPOT_ADMENU2,
    'link'  => 'admin/main.php?op=news',
    'icon'  => $pathIcon32 . '/content.png'
);

$adminmenu[] = array(
    'title' => _MI_SPOT_ADMENU4,
    'link'  => 'admin/mini.php',
    'icon'  => $pathIcon32 . '/highlight.png'
);
$adminmenu[] = array(
    'title' => _MI_SPOT_ADMENU5,
    'link'  => 'admin/xml.php',
    'icon'  => $pathIcon32 . '/album.png'
);
$adminmenu[] = array(
    'title' => _MI_SPOT_ADMENU3,
    'link'  => 'admin/main.php?op=wfsections',
    'icon'  => $pathIcon32 . '/view_detailed.png'
);
$adminmenu[] = array(
    'title' => _AM_SPOT_NAME_UPLOAD,
    'link'  => 'admin/upload.php',
    'icon'  => $pathIcon32 . '/photo.png'
);
$adminmenu[] = array(
    'title' => _AM_MODULEADMIN_ABOUT,
    'link'  => 'admin/about.php',
    'icon'  => $pathIcon32 . '/about.png'
);



