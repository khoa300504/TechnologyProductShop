<?php

function add_user($username, $email, $password)
{
    global $db;
    $query = 'SELECT user_id FROM useraccount WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    if ($statement->rowCount() > 0) {
        return "Username already exists";
    } else {
    $query2 = 'INSERT INTO useraccount
                 (username, email, password)
              VALUES
                 (:username, :email, :password)';
    $statement = $db->prepare($query2);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $userId = $db->lastInsertId();
    $query3 = 'INSERT INTO cart (user_id, status) VALUES (:user_id,1)';
    $statement = $db->prepare($query3);
    $statement->bindValue(':user_id', $userId);
    $statement->execute();
        return $userId;
    }
    $statement->closeCursor();
}

function login($username, $password)
{
    global $db;
    $query = 'SELECT * FROM useraccount WHERE username = :username AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
    if ($statement->rowCount() > 0) {
        $account = $statement->fetch(PDO::FETCH_ASSOC);
        return $account;
    }
    $statement->closeCursor();
}
?>