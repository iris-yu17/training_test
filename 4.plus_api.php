<?php
$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;

// echo '{"answer":'. ($a+$b). '}';
printf('{"answer":%s}', $a + $b);
