<?php
namespace Models;

use \Core\Model;

class Dishes extends Model {

    public function getAllMenu() {
        $array = array();

        $sql = "SELECT * FROM menu";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }

    public function getAllMenuGiant() {
        $array = array();

        $sql = "SELECT * FROM menu_giant";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }

    public function getAllMenuGourmet() {
        $array = array();

        $sql = "SELECT * FROM menu_gourmet";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }

}