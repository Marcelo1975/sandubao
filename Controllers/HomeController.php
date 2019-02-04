<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;
use \Models\Feed;

class HomeController extends Controller {

    public function index() {
        $f = new Feed();
        $array = array();
        
        $array['slides'] = $f->getSlide();
        $array['news'] = $f->getNews();
        $array['featurettes'] = $f->getFeaturettes();

        $this->loadTemplate('home', $array);
    }

    public function details($id) {
    	$f = new Feed();
    	$data = array();

    	$data['detailsNews'] = $f->getDetailsNews($id);

    	$this->loadTemplate('details', $data);
    }

}