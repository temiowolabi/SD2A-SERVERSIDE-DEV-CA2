<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Body is required');
    }

    if (empty($post['genre_id'])) {
        array_push($errors, 'Genre is required');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Looks like a duplicate post! A post with this title already exists.');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Looks like a duplicate post! A post with this title already exists.');
        }
    }

    return $errors;
}

?>