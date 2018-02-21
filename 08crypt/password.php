<?php

$password = 'secret';

// historiquement, mais très mauvais
$badHash = md5($password);

// beaucoup mieux
$goodHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 6]);

// mot de passe identique pour plusieurs utilisateurs
$sql = 'SELECT password, count(id) as nb FROM user GROUP BY password ORDER BY nb DESC';

// utilisation d'un sel
$credentials = [
    'password' => 'secret',
    'salt' => '4TsyNGgaAGdpdvSOAV',
];

$averageHash = md5($credentials['password'] . $credentials['salt']);

echo 'bad: ' . $badHash . "\n";
echo 'average: ' . $averageHash . ' : ' . $credentials['salt'] . "\n";
echo 'good: ' . $goodHash . "\n";

echo password_verify('secret', $goodHash) . "\n";