<?php

class NewsController {
    public function index () {
        $uudised = App::get('database')->selectAll('uudised');
    
        return view('index', 
            [
                'uudised' => $uudised
            ]
        );
    }
    
    public function post () {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $uudised = App::get('database')->insert(
            'uudised',
            [
                'title' => $title,
                'content' => $content
            ],
            '/'
        );
        
        
    }

    public function deleteConfirm () {
        $id = $_GET['id'];
    
        return view('delete', 
        [
            'id' => $id
        ]
    );
        
    }

    public function delete () {
        $id = $_POST['id'];
    
        App::get('database')->delete(
            'uudised',
            "id = '$id'",
            '/'
        );
        
    }

    public function edit () {
        $id = $_GET['id'];

        $post = App::get('database')->selectById('uudised', $id);

        return view('edit', ['post' => $post]);
        
    }
}