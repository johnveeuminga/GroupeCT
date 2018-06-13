<?php

namespace Theme\Controllers;


class HomeController  extends MainController
{

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