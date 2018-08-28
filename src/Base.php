<?php declare(strict_types = 1); 

require '../src/Config.php';

class Base extends Config {

    private $ObjectPDO;

    function __construct($ObjectPDO = null) {
        $this->ObjectPDO = $ObjectPDO;
        parent::__construct();
        return $this->conectar();
    }

    function conectar() {
            $ObjectPDO = new Config();
            $ObjectPDO->exec("set names utf8");
            $ObjectPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->ObjectPDO;
    }

    function desconectar() {
        $this->ObjectPDO = null;
    }

    function preparar($sql) {
        $this->sql = $sql;
        $ObjectPDO = new Base();
        $sth = $ObjectPDO->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array());
    }

}
