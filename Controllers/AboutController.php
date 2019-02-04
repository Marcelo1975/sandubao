<?php
namespace Controllers;

use \Core\Controller;
use \Models\About;

class AboutController extends Controller {
    
    public function index() {
        $array = array();

        $ab = new About();

        $array['about'] = $ab->getAbout();

        $this->loadTemplate('about', $array);
    }

}