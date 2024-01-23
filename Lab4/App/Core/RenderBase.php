<?php

namespace App\Core;

use App\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHome(){
        $this->load->render('layouts/client/home');
    }

    public function renderContact(){
        $this->load->render('layouts/client/contact');
    }
}