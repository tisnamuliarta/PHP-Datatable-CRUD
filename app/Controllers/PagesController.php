<?php

namespace App\Controller;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $company = "Codenfy";
        return view('about', ['company' => $company]);
    }
    public function contact()
    {
        return view('contact');
    }
}
