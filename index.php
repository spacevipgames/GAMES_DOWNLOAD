<?php
// Mapeamento Inteligente
$jogos = [
    'mafia2' => 'https://archive.org/download/sony_playstation3_m_part1/Mafia%20II%20-%20Director%27s%20Cut%20%28USA%29%20%28En%2CFr%2CDe%2CEs%2CIt%29.iso',
];

$id = $_GET['id'] ?? '';
if (!isset($jogos[$id])) die("ID não encontrado");

$url = $jogos[$id];
$cookies = "SUA_STRING_AQUI"; // Cole seus cookies aqui

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_COOKIE, $cookies);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (PlayStation 3)');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); // Envia direto para o PS3
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);

curl_exec($ch);
curl_close($ch);
?>
