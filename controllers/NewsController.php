<?php

class NewsController {
    public function index () {
        $uudised = App::get('database')->selectAll('uudised');
    
        return view('uudised', ['uudised' => $uudised]);
    }
}