<?php

/* 
 * Raccoon Open Source Content Managment System
 * Version 1.0
 * link https://github.com/sefasungur/raccoon
 * Copyright 2015 Sefa Sungur <info@sefasungur.com>.
 * @file language_function.php
 * @time: 14.Nis.2015 - 18:13:44
 * @author Sefa Sungur <info@sefasungur.com>
 * @licence https://www.gnu.org/licenses/gpl-2.0.html
 */

require_once RC_LIBRARY_PATH . "/language/language_class.php";
$raccoon_language = new raccoon_language();

function lang_select($lang_code)
{

    $raccoon_language->lang_select($lang_code);
}