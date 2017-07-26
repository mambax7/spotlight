<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright    XOOPS Project (https://xoops.org)
 * @license      GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package
 * @since
 * @author       XOOPS Development Team
 */

use Xmf\Language;
use Xmf\Module\Admin;

require_once __DIR__ . '/../../../include/cp_header.php';
require_once $GLOBALS['xoops']->path('www/class/xoopsformloader.php');

//require_once __DIR__ . '/../class/utility.php';
//require_once __DIR__ . '/../include/common.php';

$moduleDirName = basename(dirname(__DIR__));

require_once XOOPS_ROOT_PATH . '/kernel/module.php';
require_once XOOPS_ROOT_PATH . '/modules/spotlight/include/functions.php';
include XOOPS_ROOT_PATH . '/class/xoopstree.php';
include XOOPS_ROOT_PATH . '/class/xoopslists.php';

global $xoopsModule;

//if functions.php file exist
//require_once __DIR__ . '/../include/functions.php';

// Load language files
xoops_loadLanguage('admin', $moduleDirName);
xoops_loadLanguage('modinfo', $moduleDirName);
xoops_loadLanguage('main', $moduleDirName);

$pathIcon16 = Admin::iconUrl('', 16);
$pathIcon32 = Admin::iconUrl('', 32);

$myts = MyTextSanitizer::getInstance();

// Image defines from here
$editimg   = '<img src=' . $pathIcon16 . '/edit.png ALT ALT=' . _AM_SPOT_EDIT . '>';
$deleteimg = '<img src=' . $pathIcon16 . '/delete.png  ALT=' . _AM_SPOT_DELETE . '>';

$adminObject = \Xmf\Module\Admin::getInstance();
