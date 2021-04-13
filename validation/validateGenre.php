<?php

function validateGenre($genre)
{
    $errors = array();

    if (empty($genre['name'])) {
        array_push($errors, 'Name is required');
    }

    $existingGenre = selectOne('genres', ['name' => $genre['name']]);
    if ($existingGenre) {

        if (isset($post['update-genre']) && $existingGenre['id'] != $post['id']) {
            array_push($errors, 'Genre already exists');
        }

        if (isset($post['add-genre'])) {
            array_push($errors, 'Genre already exists');
        }
    }

    return $errors;
}
?>