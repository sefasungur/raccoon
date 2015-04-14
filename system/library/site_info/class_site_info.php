<?php

/* 
 * Raccoon Open Source Content Managment System
 * Version 1.0
 * link https://github.com/sefasungur/raccoon
 * Copyright 2015 Sefa Sungur <info@sefasungur.com>.
 * @file class_site_info.php
 * @time: 14.Nis.2015 - 16:17:59
 * @author Sefa Sungur <info@sefasungur.com>
 * @licence https://www.gnu.org/licenses/gpl-2.0.html
 */
class site_info
{
    function __construct($lang_code=NULL) {
        if($lang_code == NULL) $lang_code = "tr";
        $this->raccoon_mysqli = new MysqliDb(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $this->raccoon_mysqli->where("lang_code","$lang_code");
        $this->site_info = $this->raccoon_mysqli->get("site_info");
        if ($this->raccoon_mysqli->count < 1)
        {           
            $this->raccoon_mysqli->where("lang_code",RC_LANG);
            $this->site_info = $this->raccoon_mysqli->get("site_info");
        }
    }
    // Site Title Function
    function site_title($value=NULL)
    {
        if($value!="" or $value!=NULL)
        {
            $site_title = $value;
        }
        else
        {
            foreach ($this->site_info as $result) { 
                $site_title=$result["title"];
            }
        }
        return $site_title;
    }
    
    // Site Description Funcition
    function site_description($value=NULL)
    {
        if($value!="" or $value!=NULL)
        {
            $site_description = $value;
        }
        else
        {
            foreach ($this->site_info as $result) { 
                $site_description=$result["description"];
            }
        }
        return $site_description;
    }
    
    // Site Keywords Function
    function site_keywords($value=NULL)
    {
        if($value!="" or $value!=NULL)
        {
            $site_keywords = $value;
        }
        else
        {
            foreach ($this->site_info as $result) { 
                $site_keywords=$result["keywords"];
            }
        }
        return $site_keywords;
    }
    
    // Site Copyright Function
    function site_copyright($value=NULL)
    {
        if($value!="" or $value!=NULL)
        {
            $site_copyright = $value;
        }
        else
        {
            foreach ($this->site_info as $result) { 
                $site_copyright=$result["copyright"];
            }
        }
        return $site_copyright;
    }
    
    // Site Theme Function
    function site_theme($value=NULL)
    {
        if($value!="" or $value!=NULL)
        {
            $site_theme = $value;
        }
        else
        {
            foreach ($this->site_info as $result) { 
                $site_theme=$result["theme"];
            }
        }
        return $site_theme;
    }
    
    // Site Favicon Function
    function site_favicon($value=NULL)
    {
        if($value!="" or $value!=NULL)
        {
            $site_favicon = $value;
        }
        else
        {
            foreach ($this->site_info as $result) { 
                $site_favicon=$result["favicon"];
            }
        }
        return $site_favicon;
    }
    
    // Google Validatioın Function
    function google_validation_code($value=NULL)
    {
        if($value!="" or $value!=NULL)
        {
            $google_validation_code = $value;
        }
        else
        {
            foreach ($this->site_info as $result) { 
                $google_validation_code=$result["google_validation_code"];
            }
        }
        return $google_validation_code;
    }
    
    // Google Analytic Function
    function google_analytic_code($value=NULL)
    {
        if($value!="" or $value!=NULL)
        {
            $google_analytic_code = $value;
        }
        else
        {
            foreach ($this->site_info as $result) { 
                $google_analytic_code=$result["google_analytic_code"];
            }
        }
        return $google_analytic_code;
    }
}