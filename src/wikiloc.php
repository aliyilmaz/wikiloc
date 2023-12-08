<?php

function isWikilocTrailValidation($link){
    $trailPageRegex = "/^(https?:\/\/)(.*\.)?\wikiloc\.com\/([^\/]+)\/(.*)/";
    preg_match($trailPageRegex, $link, $match);
    if(isset($match[4])){
        $match = explode('-', strrev($match[4]));
        $Id = strrev($match[0]);
        if($match != null){
            if(is_numeric($Id) && $Id != '' && isset($Id)){ return true; }
        }
    }
    return false;
}

function getWikilocTrailId($link){
    $trailPageRegex = "/^(https?:\/\/)(.*\.)?\wikiloc\.com\/([^\/]+)\/(.*)/";
    preg_match($trailPageRegex, $link, $match);
    if(isset($match[4])){
        $match = explode('-', strrev($match[4]));
        $Id = strrev($match[0]);
        if($match != null){
            if(is_numeric($Id) && $Id != '' && isset($Id)){ return $Id; }
        }
    }
    
    return null;
}

function isWikilocTrailMapValidation($link) {        
    $trailMapRegex = "/^(https?:\/\/)(.*\.)?\wikiloc\.com\/wikiloc\/embedv2\.do\?id=[0-9]+&elevation=(on|off)&images=(on|off)&maptype=(H|S)/";
    preg_match($trailMapRegex, $link, $match);
    $match = explode('=', implode('', $match));
    if(isset($match[1])){

        $match = explode('&', $match[1]);
        $Id = $match[0];
        if($match != null){ 
            if(is_numeric($Id) && $Id != '' && isset($Id)){ return true; }
        }

    }
      
    return false;
}

function getWikilocTrailMapId($link) {        
    $trailMapRegex = "/^(https?:\/\/)(.*\.)?\wikiloc\.com\/wikiloc\/embedv2\.do\?id=[0-9]+&elevation=(on|off)&images=(on|off)&maptype=(H|S)/";
    preg_match($trailMapRegex, $link, $match);
    $match = explode('=', implode('', $match));
    if(isset($match[1])){

        $match = explode('&', $match[1]);
        $Id = $match[0];
        if($match != null){ 
            if(is_numeric($Id) && $Id != '' && isset($Id)){ return $Id; }
        }
        
    }
      
    return null;
}