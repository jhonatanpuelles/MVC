<?php
declare (strict_types=1);

namespace App\Controllers;

use Lib\Controller;

class User extends Controller {
    
    public function index() {
        return $this->view();
    }

    public function saludo() {
        return $this->view();
    }
}
