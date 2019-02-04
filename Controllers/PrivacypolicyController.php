<?php
namespace Controllers;

use \Core\Controller;

class PrivacypolicyController extends Controller {
    
    public function index() {
        $array = array();

        $this->loadTemplate('privacypolicy', $array);
    }

}