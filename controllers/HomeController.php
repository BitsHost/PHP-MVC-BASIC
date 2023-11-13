<?php
namespace Controllers;

use Models\HomeModel;
use Views\HomeView;


class HomeController {
    public function invoke() {
        $model = new HomeModel();
        $view = new HomeView($model);
        $view->render();
    }
}

