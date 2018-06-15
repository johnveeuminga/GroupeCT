<?php

namespace Theme\Controllers;


class HomeController  extends MainController
{
    public function __construct(){
        parent::__construct();
    }
    
    public function index()
    {
        return view('pages.home',[

        ]);
    }

    public function blocs()
    {
        return view('pages.blocs',[

        ]);
    }

}