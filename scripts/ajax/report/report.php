<?php

$request = json_decode(file_get_contents('php://input'), true);
$filename = '../../../report.txt';

file_put_contents($filename, "Отчёт\r\n");

for ($i = 1; $i < count($request); $i++) {
    $application = $request[$i]['application_id'].', id пользователя: '.$request[$i]['user_id'].', цель: '
        .$request[$i]['entity'].', статус: '.$request[$i]['status'].', сумма: '.$request[$i]['amount'].', дата: '.$request[$i]['data']."\r\n";

    file_put_contents($filename, PHP_EOL . $application, FILE_APPEND);
}