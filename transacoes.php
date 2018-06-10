<?php
/**
 * Created by PhpStorm.
 * User: wenner
 * Date: 09/06/18
 * Time: 00:00
 */

$conn = new PDO('mysql:host=localhost;dbname=pdo_php',
    'wenner', 'admin123');

$conn->beginTransaction();

$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE idusuario = ?');

$id = 2;

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();

print 'Sucesso';