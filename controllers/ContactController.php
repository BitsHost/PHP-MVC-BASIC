<?php
namespace Controllers;

use Models\ContactModel;
use Views\ContactView;

class ContactController {
    public function invoke() {
        $model = new ContactModel();
        $view = new ContactView($model);
        $view->render();
    }
}
