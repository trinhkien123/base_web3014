<?php

namespace Admin\BaseWeb3014\Commons;

class Helper
{
    public static function debug($data) {
        echo '<pre>';

        print_r($data);

        die;
    }
}