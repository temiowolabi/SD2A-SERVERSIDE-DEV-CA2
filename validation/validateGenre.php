<?php

function validateGenre($genre)
{
    $errors = array();

    if (empty($genre['name'])) {
        array_push($errors, 'Name is required');
    }

    $existingGenre = selectOne('genres', ['name' => $genre['name']]);
    if ($existingGenre) {

            array_push($errors, 'Genre already exists');
    }

    return $errors;
}


