<?php

require '../src/Base.php';

class Crud extends Base {

    public function insert($nome) {
        $sql = "INSERT INTO `categoria` (`id`, `nome`) VALUES (NULL, '$nome')";
        $insert = new Base();
        $insert->preparar($sql);
        parent::desconectar();
    }

    public function update($id, $nome) {
        $sql = "UPDATE `categoria` SET `nome` = '$nome' WHERE `categoria`.`id` = $id;";
        $update = new Base();
        $update->preparar($sql);
        parent::desconectar();
    }

    public function delete($id) {
        $sql = "DELETE FROM `categoria` WHERE `categoria`.`id` = $id;";
        $delete = new Base();
        $delete->preparar($sql);
        parent::desconectar();
    }
}