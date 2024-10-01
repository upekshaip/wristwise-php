<?php

function getUsers($conn)
{

    $sql = 'SELECT * FROM `users`';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}
?>