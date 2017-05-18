<?php

namespace Core\Database;

interface IDatabase{
    public function connect($host, $username, $password, $dbname);
    public function query($sql);
    public function close();
}
