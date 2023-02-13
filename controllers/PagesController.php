<?php

    class PagesController {

        public function home () {
            return view('index');
        }

        public function contact () {
            $contacts = App::get('database')->selectAll('contacts');

            return view('contact', ['contacts' => $contacts]);
        }

        public function work () {
            $works = App::get('database')->selectAll('work');

            return view('work', ['works' => $works]);
        }

        public function add_task () {
            $data = $_POST['task'];

            App::get('database')->insert(
                'tasks', 
                [
                    'description'   =>  $data,
                    'completed'     =>  '0'
                ],
                '/'
            );
        }

        public function about () {

            $company = "ITEENUSED";
            return view('about', ['company' => $company]);
        }
        
        public function about_culture () {
            return view('about-culture');
        }

    }