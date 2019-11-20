<?php header('Access-Control-Allow-Origin: https://yandex.ru/');
header("Access-Control-Allow-Methods: GET, OPTIONS"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>application/views/javascript/script.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>application/views/stylesheet/style.css">
</head>
<body>