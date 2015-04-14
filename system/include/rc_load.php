<?php

/* 
 * Raccoon Open Source Content Managment System
 * Version 1.0
 * link https://github.com/sefasungur/raccoon
 * Copyright 2015 Sefa Sungur <info@sefasungur.com>.
 * @file rc_load.php
 * @time: 14.Nis.2015 - 16:01:42
 * @author Sefa Sungur <info@sefasungur.com>
 * @licence https://www.gnu.org/licenses/gpl-2.0.html
 */

session_start();

require_once __DIR__ . "/rc_paths.php";
require_once RC_CONFIG_PATH . "/config.php";

require_once RC_LIBRARY_PATH . "/mysqli/MysqliDb.php";
$raccoon_mysqli = new MysqliDb(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once RC_LIBRARY_PATH . "/language/language_class.php";
$raccoon_language = new raccoon_language();

require_once RC_LIBRARY_PATH . "/site_info/function_site_info.php";

require_once RC_LIBRARY_PATH . "/theme/class_theme.php";
$raccoon_theme = new raccoon_theme;
$raccoon_theme -> get_theme();