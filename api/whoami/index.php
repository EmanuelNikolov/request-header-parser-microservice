<?php

$result = [
  'ipaddress' => $_SERVER['REMOTE_HOST'] ?? null,
  'language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
  'software' => $_SERVER['HTTP_USER_AGENT'],
];

header("Content-type: application/json");
echo json_encode($result, JSON_UNESCAPED_SLASHES);