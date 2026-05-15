<?php

namespace app\core\configs;

class Config
{
    static public  function WEB()
    {
        return $_ENV["WEB"];
    }
    static public  function PROJECTNAME()
    {
        return $_ENV["PROJECTNAME"];
    }
    static public  function URLROOT()
    {
        return $_ENV["URL"];
    }
    static public  function PUBLICROOT()
    {
        return dirname((__DIR__), 3) . "/public/";
    }
    static public  function APPROOT()
    {
        return dirname(__DIR__, 2) . "/";
    }
}
