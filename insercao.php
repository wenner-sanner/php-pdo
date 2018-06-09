<?php
/**
 * Created by PhpStorm.
 * User: wenner
 * Date: 08/06/18
 * Time: 22:33
 */
$conn = new PDO('mysql:host=localhost;dbname=pdo_php;',
    'wenner', 'admin123');

$stmt = $conn->prepare('INSERT INTO tb_usuarios(deslogin, dessenha)
                      VALUES(:LOGIN, :SENHA)' );

$login = 'pedro';
$senha = 'pedro123';

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':SENHA', $senha);


$stmt->execute();


