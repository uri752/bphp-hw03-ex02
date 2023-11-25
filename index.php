<?php

if (!function_exists('mb_ucfirst')) {
    function mb_ucfirst($str) {
        $firstSymbol = mb_strtoupper(mb_substr($str,0,1));
        return $firstSymbol . mb_substr($str, 1);    
    }    
}

echo "Введите Имя:";
$firstName = trim(fgets(STDIN));
$firstName = mb_ucfirst($firstName);

echo "Введите Фамилию:";
$lastName = trim(fgets(STDIN));
$lastName = mb_ucfirst($lastName);

echo "Введите Отчество:";
$secondName = trim(fgets(STDIN));
$secondName = mb_ucfirst($secondName);

$fullname = $lastName . " " . $firstName . " " . $secondName;
echo "Полное имя: '" . $fullname . "'\n";

$surnameAndInitials = $lastName . " " . mb_substr($firstName,0,1) .". " . mb_substr($secondName,0,1) . ".";
echo "Фамилия и инициалы: '" . $surnameAndInitials . "'\n";

$fio = mb_substr($lastName,0,1) . mb_substr($firstName,0,1) . mb_substr($secondName,0,1);
echo "Аббревиатура: '". $fio ."'";