<?php

namespace App\Controllers;

class Home extends BaseController
    {
        public function index()
            {
                $data = [
                    "page_title" => "Homepage",
                    "page_heading" => "Welcome To Homepage",
                ];

                echo view("homeview", $data);
            }

            public function about()
            {
                $data = [
                    "page_title" => "Webpage|About",
                    "page_heading" => "About Us",
                ];

                return view("aboutview", $data);
            }
    }