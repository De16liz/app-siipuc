<?php

namespace app;

class html{
    static function get_css_path(string $path):string{
        return "public/css/$path.css";
    }

    static function echo_css_path(string $path):void{
        echo "public/css/$path.css";
    }

    static function echo_js_path(string $path):void{
        echo "public/js/$path.js";
    }
}