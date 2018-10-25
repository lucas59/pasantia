<?php

require '../config/config.php';

class conexionDB extends mysqli {

    function __construct() {
        parent::__construct(host, username, password, database);
        $this->set_charset("utf8");
        $this->connect_error ? die("Error conectar") : print("Conectar");
        var_dump("$this->get_charset()");
    }
}
