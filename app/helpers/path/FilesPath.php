<?php

namespace Aplication\helpers\path;

class FilesPath
{
    public static function css(): string
    {
        return "src/css/style.css";
    }
 
    public static function view() : string
    {
       return __DIR__."/../../views/";
    }

    public static function templateHeader() : void
    {
       include __DIR__."/../../views/templates/header.php";
    }

    public static function templateFooter() : void
    {
       include __DIR__."/../../views/templates/footer.php";
    }
}
