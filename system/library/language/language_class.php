<?php

/* 
 * Raccoon Open Source Content Managment System
 * Version 1.0
 * link https://github.com/sefasungur/raccoon
 * Copyright 2015 Sefa Sungur <info@sefasungur.com>.
 * @file language_class.php
 * @time: 14.Nis.2015 - 17:19:36
 * @author Sefa Sungur <info@sefasungur.com>
 * @licence https://www.gnu.org/licenses/gpl-2.0.html
 */

class raccoon_language{
    public function __construct() {
        if(isset($_SESSION["raccoon_lang"]))
        {
            $raccoon_lang = $_SESSION["raccoon_lang"];
        }
        else
        {
            $raccoon_lang = RC_LANG;
        }
        return $raccoon_lang;
    }
    
    // Language Select Function
    public function lang_select($lang_code)
    {
        $_SESSION["raccoon_lang"] = $lang_code;
    }
    
    // Default Language Function
    public function default_lang()
    {
        $default_lang = RC_LANG;
        return $default_lang;
    }
    
    // Current Language Function
    public function current_lang()
    {
        if(isset($_SESSION["raccoon_lang"]))
        {
            $current_lang = $_SESSION["raccoon_lang"];
        }
        else
        {
            $current_lang = $this->default_lang();
        }
        return $current_lang;
    }
    
    // Language Select Link
    public function get_lang_select($lang,$lang_text)
    {
        $https = site_info("is_https");
        if($https == 1)
        {
            $link_before = "https://";
        }
        else
        {
            $link_before = "http://";
        }
        
        $get_link = $link_before.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        echo "<a href='".$link_before.site_info("site_domain")."/system/include/lang_select.php?lang=$lang&url=$get_link'>$lang_text</a>";
    }
    
}


?>