<?php
spl_autoload_register( function ($class) {
    // 註冊所有 src 下的檔案
    require __DIR__ . "/src/" . $class . ".php";
} );