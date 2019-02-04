<?php
namespace Models;

use \Core\Model;

class Feed extends Model {

    public function getSlide() {
        $array = array();

        $sql = "SELECT * FROM slider ORDER BY id DESC LIMIT 1";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }

    public function getNews() {
        $array = array();

        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }

    public function getFeaturettes() {
        $array = array();

        $sql = "SELECT * FROM featurettes ORDER BY id DESC LIMIT 3";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }

    public function getDetailsNews($id) {
        $array = array();

        $sql = "SELECT * FROM news WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

}