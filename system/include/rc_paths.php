<?php

/* 
 * Raccoon Open Source Content Managment System
 * Version 1.0
 * link https://github.com/sefasungur/raccoon
 * Copyright 2015 Sefa Sungur <info@sefasungur.com>.
 * @file raccoon_paths.php
 * @time: 14.Nis.2015 - 15:58:07
 * @author Sefa Sungur <info@sefasungur.com>
 * @licence https://www.gnu.org/licenses/gpl-2.0.html
 */

define ("RC_PATH",dirname(dirname(dirname(__FILE__))));
define ("RC_ADMIN_PATH",RC_PATH."/admin");
define ("RC_CONFIG_PATH",RC_PATH."/config");
define ("RC_CONTENT_PATH",RC_PATH."/content");
define ("RC_LOCALE_PATH",RC_PATH."/locale");
define ("RC_PUBLIC_PATH",RC_PATH."/public");
define ("RC_INSTALL_PATH",RC_PATH."/rcins");
define ("RC_SYSTEM_PATH",RC_PATH."/system");
define ("RC_LIBRARY_PATH",RC_SYSTEM_PATH."/library");
