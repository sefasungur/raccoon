<?php

/* 
 * Raccoon Open Source Content Managment System
 * Version 1.0
 * link https://github.com/sefasungur/raccoon
 * Copyright 2015 Sefa Sungur <info@sefasungur.com>.
 * @file lang_select.php
 * @time: 16.Nis.2015 - 18:14:23
 * @author Sefa Sungur <info@sefasungur.com>
 * @licence https://www.gnu.org/licenses/gpl-2.0.html
 */

require_once __DIR__ ."/rc_load.php";
$url = @$_GET["url"];
$get_lang = @$_GET["lang"];
$raccoon_language = new raccoon_language;
$raccoon_language -> lang_select($get_lang);
header("Location: ".$url."");