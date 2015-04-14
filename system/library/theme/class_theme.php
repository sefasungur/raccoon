<?php

/* 
 * Raccoon Open Source Content Managment System
 * Version 1.0
 * link https://github.com/sefasungur/raccoon
 * Copyright 2015 Sefa Sungur <info@sefasungur.com>.
 * @file class_theme.php
 * @time: 14.Nis.2015 - 17:38:17
 * @author Sefa Sungur <info@sefasungur.com>
 * @licence https://www.gnu.org/licenses/gpl-2.0.html
 */

class raccoon_theme
{
    public function __construct() {
        require_once RC_LIBRARY_PATH . "/site_info/class_site_info.php";
        $rc_site_info = new site_info();
        $site_theme = $rc_site_info->site_theme();
        $theme_file =  RC_PUBLIC_PATH . "/view/themes/".$site_theme."/index.php";
        return require_once $theme_file;
    }
}