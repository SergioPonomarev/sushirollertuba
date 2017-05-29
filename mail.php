<?php
/**
 * Created by PhpStorm.
 * User: russovskiy
 * Date: 29.05.17
 * Time: 20:09
 */

$recepient = "sushiroller.tuba@yandex.ru";
$sitename = "sushiroller.moscow";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");