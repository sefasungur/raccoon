<?php

/* 
 * Raccoon Open Source Content Managment System
 * Version 1.0
 * link https://github.com/sefasungur/raccoon
 * Copyright 2015 Sefa Sungur <info@sefasungur.com>.
 * @file index.php
 * @time: 14.Nis.2015 - 17:37:06
 * @author Sefa Sungur <info@sefasungur.com>
 * @licence https://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<html>
    <head>
    <title><?= site_info("site_title");?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
<?php $raccoon_language-> get_lang_select("en","English"); ?>

<br/>
<?php $raccoon_language-> get_lang_select("tr","Türkçe"); ?>
    
</div>
</body>
</html>
