<?php 

$string = "Testes de integração com PHP";

echo mb_strlen($string) . '<br>';
echo mb_strtoupper($string) . '<br>';
echo mb_strtolower($string) . '<br>';
echo mb_convert_case($string, MB_CASE_TITLE);