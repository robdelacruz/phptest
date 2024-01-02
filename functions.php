<?php
function create_tables($db) {
    $db = new SQLite3("db.sqlite");
    $db->exec("CREATE TABLE user (user_id INTEGER PRIMARY KEY NOT NULL, username TEXT NOT NULL, password TEXT NOT NULL)");
}

function register_user($db, $username, $pwd) {
    $h = password_hash($pwd, PASSWORD_DEFAULT);
    $stmt = $db->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $h);
    $stmt->execute();

    $userid = $db->lastInsertRowID();
}

?>
