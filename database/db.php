<?php

session_start();
require('database.php');


function executeQuery($sql, $data = [])
{
    global $db;
    $stmt = $db->prepare($sql);

    if (empty($data)) {
        $result = $stmt->execute();
    } else {
        $result = $stmt->execute($data);
    }

    if (!$result) {
        die("Failed to query database: " . $stmt->error);
    }
    return $stmt;
}

function selectAll($table, $conditions = [], $order_by = [])
{
    global $db;
    $sql = "SELECT * FROM $table";
    if (!empty($conditions)) {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=:$key";
            } else {
                $sql = $sql . " AND $key=:$key";
            }
            $i++;
        }
    }

    if (!empty($order_by)) {
        $sql .= " ORDER BY " . $order_by[0] . " $order_by[1]";
    }

    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->fetchAll();
    return $records;
}

function selectOne($table, $conditions)
{
    global $db;
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key=:$key";
        } else {
            $sql = $sql . " AND $key=:$key";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->fetch();
    return $records;
}

function create($table, $data)
{
    global $db;
    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=:$key";
        } else {
            $sql = $sql . ", $key=:$key";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $db->lastInsertId();
    return $id;
}

function update($table, $id, $data)
{
    global $db;
    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=:$key";
        } else {
            $sql = $sql . ", $key=:$key";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=:id";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->rowCount();
}

function delete($table, $condition)
{
    global $db;
    $sql = "DELETE FROM $table WHERE";
    $stmt = null;
    if (is_array($condition)) {
        foreach ($condition as $key => $value) {
            $sql .= " $key=:$key";
        }
        $stmt = executeQuery($sql, $condition);
    } else {
        $sql .= " id=:id";
        $stmt = executeQuery($sql, ['id' => $condition]);
    }

    return $stmt->rowCount();
}

function getPosts()
{
    global $conn;

    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id";
    $stmt = executeQuery($sql);
    $records = $stmt->fetchAll();
    return $records;
}
?>

