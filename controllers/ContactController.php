<?php
namespace Controllers;

use Models\ContactModel;
use Views\ContactView;
//include('models/ContactModel.php');
//include('views/ContactView.php');
class ContactController {
    public function invoke() {
        $model = new ContactModel();
        $view = new ContactView($model);
        $view->render();
    }
}
