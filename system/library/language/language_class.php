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

class language{
    public function __construct() {
        $raccoon_languge = $_SESSION["raccoon_lang"];
        return $raccoon_languge;
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
}


?>