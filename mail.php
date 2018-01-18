<?php

$recepient = "rush.yu@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$mail = trim($_POST["mail"]);
$vin = trim($_POST["vin"]);
$options = trim($_POST["options"]);
$message = "Имя: $name \nТелефон: $phone \nПочта: $mail \nVin автомобиля: $vin \nПараметры детали: $options";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");