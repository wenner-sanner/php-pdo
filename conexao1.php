<?php
/**
 * Created by PhpStorm.
 * User: wenner
 * Date: 08/06/18
 * Time: 22:05
 */

$conn = new PDO('mysql:dbname=pdo_php;host=localhost',
    'wenner', 'admin123');

$stmt = $conn->prepare('SELECT * FROM tb_usuarios ORDER BY deslogin');

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

    foreach ($row as $key => $value) {

        print '<strong>' .$key . ':</strong> ' . $value . '<br>';

    }

    print '<br>';
}

var_dump($results);