<?php
namespace Models;

use \Core\Model;

class About extends Model {

    public function getAbout() {
        $array = array();

        $sql = "SELECT * FROM aboutpage ORDER BY id DESC LIMIT 1";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
        	$array = $sql->fetchAll();
        }

        return $array;
    }
}