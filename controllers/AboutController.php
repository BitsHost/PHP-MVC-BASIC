<?php
namespace Controllers;

use Models\AboutModel;
use Views\AboutView;

class AboutController {
    public function invoke() {
        $model = new AboutModel();
        $view = new AboutView($model);
        $view->render();
    }
}
