<?php
namespace Controllers;

use Models\AboutModel;
use Views\AboutView;
//include('models/AboutModel.php');
//include('views/AboutView.php');
class AboutController {
    public function invoke() {
        $model = new AboutModel();
        $view = new AboutView($model);
        $view->render();
    }
}
