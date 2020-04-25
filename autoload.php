<?php
namespace kladoffkashop;
spl_autoload_register(function ($class){
    include str_replace('\\', '/', $class) . '.php';
});
