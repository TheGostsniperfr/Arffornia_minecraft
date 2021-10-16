<?php

namespace TGS\Arffornia\Model;

class Manager
{
    protected function __dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=arffornia;charset=utf8', 'root', 'root');
        return $db;
    }
}
