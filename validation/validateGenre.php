<?php

function validateGenre($genre)
{
    $errors = array();

    if (empty($genre['name'])) {
        array_push($errors, 'Name is required');
    }

    // $existingGenre = selectOne('genres', ['name' => $genre['name']]);
    // if ($existingGenre) {

    //         array_push($errors, 'Genre already exists');
    // }

    $existingGenre = selectOne('genres', ['name' => $post['name']]);
    if($existingGenre){
        if(isset($post['update-genre']) && $existingGenre['id'] != $post['id'])
        {
            array_push($errors, 'Looks like a duplicate post! A genre with this title already exists.');
        }

        if(isset($post['add-genre'])){
            array_push($errors, 'Looks like a duplicate post! A genre with this title already exists.');
        }
       
    }

    return $errors;
}


