<?php

namespace Src\Core;

use Src\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderStudent(){
        $this->load->render('Student');
    }

    public function renderAddStudent(){
        $this->load->render('AddStudent');
    }

}