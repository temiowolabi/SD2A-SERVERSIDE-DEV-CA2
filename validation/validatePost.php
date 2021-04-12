<?php
    
    function validatePost($post)
    {

        $errors = array();

        if(empty($_POST['title'])){
            array_push($errors, 'Post Title Is Required!');
        }
        if(empty($_POST['body'])){
            array_push($errors, 'A Body Is Required!');
        }
        if(empty($_POST['genre_id'])){
            array_push($errors, 'Please Select A Genre!');
        }

        $existingPost = selectOne('posts', ['title' => $post['title']]);
        if($existingPost){
            array_push($errors, 'Looks like a duplicate post! A post with this title already exists.');
        }
        return $errors;
    }

?>