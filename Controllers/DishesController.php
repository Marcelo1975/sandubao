<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;
use \Models\Dishes;

class DishesController extends Controller {

    public function index() {
        $array = array();

        $carda = new Dishes();
        $array['traditionais'] = $carda->getAllMenu();
        $array['lineGiant'] = $carda->getAllMenuGiant();
        $array['lineGourmet'] = $carda->getAllMenuGourmet();

        $this->loadTemplate('dishes', $array);
    }
}