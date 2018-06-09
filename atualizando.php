<?php
/**
 * Created by PhpStorm.
 * User: wenner
 * Date: 08/06/18
 * Time: 23:35
 */

$conn = new PDO('mysql:host=localhost;dbname=pdo_php',
    'wenner', 'admin123');



$stmt = $conn->prepare('UPDATE tb_usuarios 
                      SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID');


$login = 'Maneco';
$senha = 'maneco123';
$id = 2;

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':SENHA', $senha);
$stmt->bindParam(':ID', $id);

$stmt->execute();

print 'Dados atualizado com sucesso';
