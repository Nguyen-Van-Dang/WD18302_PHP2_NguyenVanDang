<?php

namespace App\Controllers;

class HomeController{

    function HomeController()
    {
        $this->homePage();
    }

    function homePage()
    {
        echo "Alo";
    }

    function detail($id) {
        echo $id;
    }

}