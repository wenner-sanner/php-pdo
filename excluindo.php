<?php
/**
 * Created by PhpStorm.
 * User: wenner
 * Date: 08/06/18
 * Time: 23:48
 */

$conn = new PDO('mysql:host=localhost;dbname=pdo_php',
                'wenner', 'admin123');

$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE idusuario = :ID');

$id = 1;

$stmt->bindParam(':ID', $id);

$stmt->execute();

print 'Dado excluido com sucesso';



