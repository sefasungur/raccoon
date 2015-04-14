<?php

/* 
 * Raccoon Open Source Content Managment System
 * Version 1.0
 * link https://github.com/sefasungur/raccoon
 * Copyright 2015 Sefa Sungur <info@sefasungur.com>.
 * @file function_site_info.php
 * @time: 14.Nis.2015 - 16:45:01
 * @author Sefa Sungur <info@sefasungur.com>
 * @licence https://www.gnu.org/licenses/gpl-2.0.html
 */

function site_info($row,$value=NULL)
{
    require_once RC_LIBRARY_PATH . "/language/language_class.php";
    $raccoon_language = new raccoon_language();
    require_once RC_LIBRARY_PATH . "/site_info/class_site_info.php";
    $rc_site_info = new site_info($raccoon_language->current_lang());
    return $rc_site_info->$row($value);
}