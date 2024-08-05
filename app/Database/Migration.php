<?php 

namespace App\Database;

class Migration 
{
    public static function run($conn)
    {
        // INSERT INTO users(login, password) VALUES ('user_chat', 'estdNzccpneAlddhzco');
        $conn->query(
            "
                CREATE TABLE IF NOT EXISTS users(
                    id INT NOT NULL AUTO_INCREMENT,
                    login VARCHAR(255) NOT NULL,
                    password VARCHAR(500) NOT NULL,
                    PRIMARY KEY (id)
                );
            "
        );

    }
}