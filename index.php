<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.7. Практика</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Домашнее задание 11.7.1: Таблицы истинности и сравнения (HW_03)</h1>

    <h2>Задание 1. Таблица истинности PHP</h2>
    <p>Для каждой строки таблицы внутри PHP-кода задаются переменные $a и $b. Далее, в каждую ячейку таблицы через
        php-тег <b><i>&lt;?= ?&gt;</i></b> вставляется вывод значений соответствующей логической операции над этими
        переменными, оборачивая результат через тернарный оператор в строковые значения <b>false / true</b>.</p>
    <table class="tbl_task tbl_task_1">
        <thead>
            <td>A</td>
            <td>B</td>
            <td>!A</td>
            <td>A || B</td>
            <td>A && B</td>
            <td>A xor B</td>
        </thead>
        <tr>
<?php 
    $a = 0;
    $b = 0;
?>
            <td><?= $a ?></td>
            <td><?= $b ?></td>
            <td><?= (!$a) ? 'true':'false' ?></td>
            <td><?= ($a || $b) ? 'true':'false' ?></td>
            <td><?= ($a && $b) ? 'true':'false' ?></td>
            <td><?= ($a xor $b) ? 'true':'false' ?></td>
        </tr>
        <tr>
<?php 
    $a = 0;
    $b = 1;
?>
            <td><?= $a ?></td>
            <td><?= $b ?></td>
            <td><?= (!$a) ? 'true':'false' ?></td>
            <td><?= ($a || $b) ? 'true':'false' ?></td>
            <td><?= ($a && $b) ? 'true':'false' ?></td>
            <td><?= ($a xor $b) ? 'true':'false' ?></td>
        </tr>
        <tr>
<?php 
    $a = 1;
    $b = 0;
?>
            <td><?= $a ?></td>
            <td><?= $b ?></td>
            <td><?= (!$a) ? 'true':'false' ?></td>
            <td><?= ($a || $b) ? 'true':'false' ?></td>
            <td><?= ($a && $b) ? 'true':'false' ?></td>
            <td><?= ($a xor $b) ? 'true':'false' ?></td>
        </tr>
        <tr>
<?php 
    $a = 1;
    $b = 1;
?>
            <td><?= $a ?></td>
            <td><?= $b ?></td>
            <td><?= (!$a) ? 'true':'false' ?></td>
            <td><?= ($a || $b) ? 'true':'false' ?></td>
            <td><?= ($a && $b) ? 'true':'false' ?></td>
            <td><?= ($a xor $b) ? 'true':'false' ?></td>
        </tr>
    </table>
    <p>Чтобы значения <b>true</b> и <b>false</b> визуально лучше отличались друг от друга, дополнительный javascript
        просматривает все td на странице и в зависимости от наличия этих ключевых слов задает свойство цвета текста в
        ячейке через CSS.</p>

    <h2>Задание 2. Таблицы сравнения</h2>
    
    <p>Проводится 2 группы сравнений, нестрогое (с приведением операндов к единому типу) и строгое (полное соответствие типов сравниваемых операндов).</p>
    <p>Для каждой строки таблицы внутри PHP-кода задаются переменные <b>$a</b> и <b>$b1-$b8</b>. Далее, в каждую ячейку таблицы через
        php-тег <b><i>&lt;?= ?&gt;</i></b> вставляется вывод значений соответствующей операции сравнения над этими
        переменными, обернутый для наглядности через тернарный оператор в строковые значения <b>false / true</b>.</p>

    <h3>Таблица 1. Нестрогое сравнение "=="</h3>
<table class="tbl_task tbl_task_2">
 <thead>
        <td>&nbsp;</td>
        <td>true<br><div class="title_comment">(bool)</div></td>
        <td>false<br><div class="title_comment">(bool)</div></td>
        <td>1<br><div class="title_comment">(int)</div></td>
        <td>0<br><div class="title_comment">(int)</div></td>
        <td>-1<br><div class="title_comment">(int)</div></td>
        <td>"1"<br><div class="title_comment">(string)</div></td>
        <td>null<br><div class="title_comment">(null)</div></td>
        <td>"php"<br><div class="title_comment">(string)</div></td>
 </thead>
<?php // новая строка таблицы
    $a = true;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a == $b1) ? 'true':'false' ?></td>
        <td><?= ($a == $b2) ? 'true':'false' ?></td>
        <td><?= ($a == $b3) ? 'true':'false' ?></td>
        <td><?= ($a == $b4) ? 'true':'false' ?></td>
        <td><?= ($a == $b5) ? 'true':'false' ?></td>
        <td><?= ($a == $b6) ? 'true':'false' ?></td>
        <td><?= ($a == $b7) ? 'true':'false' ?></td>
        <td><?= ($a == $b8) ? 'true':'false' ?></td>
    </tr>
<?php // новая строка таблицы
    $a = false;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a == $b1) ? 'true':'false' ?></td>
        <td><?= ($a == $b2) ? 'true':'false' ?></td>
        <td><?= ($a == $b3) ? 'true':'false' ?></td>
        <td><?= ($a == $b4) ? 'true':'false' ?></td>
        <td><?= ($a == $b5) ? 'true':'false' ?></td>
        <td><?= ($a == $b6) ? 'true':'false' ?></td>
        <td><?= ($a == $b7) ? 'true':'false' ?></td>
        <td><?= ($a == $b8) ? 'true':'false' ?></td>
    </tr>
<?php // новая строка таблицы
    $a = 1;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a == $b1) ? 'true':'false' ?></td>
        <td><?= ($a == $b2) ? 'true':'false' ?></td>
        <td><?= ($a == $b3) ? 'true':'false' ?></td>
        <td><?= ($a == $b4) ? 'true':'false' ?></td>
        <td><?= ($a == $b5) ? 'true':'false' ?></td>
        <td><?= ($a == $b6) ? 'true':'false' ?></td>
        <td><?= ($a == $b7) ? 'true':'false' ?></td>
        <td><?= ($a == $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = 0;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a == $b1) ? 'true':'false' ?></td>
        <td><?= ($a == $b2) ? 'true':'false' ?></td>
        <td><?= ($a == $b3) ? 'true':'false' ?></td>
        <td><?= ($a == $b4) ? 'true':'false' ?></td>
        <td><?= ($a == $b5) ? 'true':'false' ?></td>
        <td><?= ($a == $b6) ? 'true':'false' ?></td>
        <td><?= ($a == $b7) ? 'true':'false' ?></td>
        <td><?= ($a == $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = -1;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a == $b1) ? 'true':'false' ?></td>
        <td><?= ($a == $b2) ? 'true':'false' ?></td>
        <td><?= ($a == $b3) ? 'true':'false' ?></td>
        <td><?= ($a == $b4) ? 'true':'false' ?></td>
        <td><?= ($a == $b5) ? 'true':'false' ?></td>
        <td><?= ($a == $b6) ? 'true':'false' ?></td>
        <td><?= ($a == $b7) ? 'true':'false' ?></td>
        <td><?= ($a == $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = "1";
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a == $b1) ? 'true':'false' ?></td>
        <td><?= ($a == $b2) ? 'true':'false' ?></td>
        <td><?= ($a == $b3) ? 'true':'false' ?></td>
        <td><?= ($a == $b4) ? 'true':'false' ?></td>
        <td><?= ($a == $b5) ? 'true':'false' ?></td>
        <td><?= ($a == $b6) ? 'true':'false' ?></td>
        <td><?= ($a == $b7) ? 'true':'false' ?></td>
        <td><?= ($a == $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = null;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a == $b1) ? 'true':'false' ?></td>
        <td><?= ($a == $b2) ? 'true':'false' ?></td>
        <td><?= ($a == $b3) ? 'true':'false' ?></td>
        <td><?= ($a == $b4) ? 'true':'false' ?></td>
        <td><?= ($a == $b5) ? 'true':'false' ?></td>
        <td><?= ($a == $b6) ? 'true':'false' ?></td>
        <td><?= ($a == $b7) ? 'true':'false' ?></td>
        <td><?= ($a == $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = "php";
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a == $b1) ? 'true':'false' ?></td>
        <td><?= ($a == $b2) ? 'true':'false' ?></td>
        <td><?= ($a == $b3) ? 'true':'false' ?></td>
        <td><?= ($a == $b4) ? 'true':'false' ?></td>
        <td><?= ($a == $b5) ? 'true':'false' ?></td>
        <td><?= ($a == $b6) ? 'true':'false' ?></td>
        <td><?= ($a == $b7) ? 'true':'false' ?></td>
        <td><?= ($a == $b8) ? 'true':'false' ?></td>
    </tr>
</table>

<h3>Таблица 2. Cтрогое сравнение "==="</h3>
<table class="tbl_task tbl_task_2">
 <thead>
        <td>&nbsp;</td>
        <td>true<br><div class="title_comment">(bool)</div></td>
        <td>false<br><div class="title_comment">(bool)</div></td>
        <td>1<br><div class="title_comment">(int)</div></td>
        <td>0<br><div class="title_comment">(int)</div></td>
        <td>-1<br><div class="title_comment">(int)</div></td>
        <td>"1"<br><div class="title_comment">(string)</div></td>
        <td>null<br><div class="title_comment">(null)</div></td>
        <td>"php"<br><div class="title_comment">(string)</div></td>
 </thead>
<?php // новая строка таблицы
    $a = true;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a === $b1) ? 'true':'false' ?></td>
        <td><?= ($a === $b2) ? 'true':'false' ?></td>
        <td><?= ($a === $b3) ? 'true':'false' ?></td>
        <td><?= ($a === $b4) ? 'true':'false' ?></td>
        <td><?= ($a === $b5) ? 'true':'false' ?></td>
        <td><?= ($a === $b6) ? 'true':'false' ?></td>
        <td><?= ($a === $b7) ? 'true':'false' ?></td>
        <td><?= ($a === $b8) ? 'true':'false' ?></td>
    </tr>
<?php // новая строка таблицы
    $a = false;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a === $b1) ? 'true':'false' ?></td>
        <td><?= ($a === $b2) ? 'true':'false' ?></td>
        <td><?= ($a === $b3) ? 'true':'false' ?></td>
        <td><?= ($a === $b4) ? 'true':'false' ?></td>
        <td><?= ($a === $b5) ? 'true':'false' ?></td>
        <td><?= ($a === $b6) ? 'true':'false' ?></td>
        <td><?= ($a === $b7) ? 'true':'false' ?></td>
        <td><?= ($a === $b8) ? 'true':'false' ?></td>
    </tr>
<?php // новая строка таблицы
    $a = 1;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a === $b1) ? 'true':'false' ?></td>
        <td><?= ($a === $b2) ? 'true':'false' ?></td>
        <td><?= ($a === $b3) ? 'true':'false' ?></td>
        <td><?= ($a === $b4) ? 'true':'false' ?></td>
        <td><?= ($a === $b5) ? 'true':'false' ?></td>
        <td><?= ($a === $b6) ? 'true':'false' ?></td>
        <td><?= ($a === $b7) ? 'true':'false' ?></td>
        <td><?= ($a === $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = 0;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a === $b1) ? 'true':'false' ?></td>
        <td><?= ($a === $b2) ? 'true':'false' ?></td>
        <td><?= ($a === $b3) ? 'true':'false' ?></td>
        <td><?= ($a === $b4) ? 'true':'false' ?></td>
        <td><?= ($a === $b5) ? 'true':'false' ?></td>
        <td><?= ($a === $b6) ? 'true':'false' ?></td>
        <td><?= ($a === $b7) ? 'true':'false' ?></td>
        <td><?= ($a === $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = -1;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a === $b1) ? 'true':'false' ?></td>
        <td><?= ($a === $b2) ? 'true':'false' ?></td>
        <td><?= ($a === $b3) ? 'true':'false' ?></td>
        <td><?= ($a === $b4) ? 'true':'false' ?></td>
        <td><?= ($a === $b5) ? 'true':'false' ?></td>
        <td><?= ($a === $b6) ? 'true':'false' ?></td>
        <td><?= ($a === $b7) ? 'true':'false' ?></td>
        <td><?= ($a === $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = "1";
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a === $b1) ? 'true':'false' ?></td>
        <td><?= ($a === $b2) ? 'true':'false' ?></td>
        <td><?= ($a === $b3) ? 'true':'false' ?></td>
        <td><?= ($a === $b4) ? 'true':'false' ?></td>
        <td><?= ($a === $b5) ? 'true':'false' ?></td>
        <td><?= ($a === $b6) ? 'true':'false' ?></td>
        <td><?= ($a === $b7) ? 'true':'false' ?></td>
        <td><?= ($a === $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = null;
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a === $b1) ? 'true':'false' ?></td>
        <td><?= ($a === $b2) ? 'true':'false' ?></td>
        <td><?= ($a === $b3) ? 'true':'false' ?></td>
        <td><?= ($a === $b4) ? 'true':'false' ?></td>
        <td><?= ($a === $b5) ? 'true':'false' ?></td>
        <td><?= ($a === $b6) ? 'true':'false' ?></td>
        <td><?= ($a === $b7) ? 'true':'false' ?></td>
        <td><?= ($a === $b8) ? 'true':'false' ?></td>
    </tr>
    <?php // новая строка таблицы
    $a = "php";
    $b1 = true; $b2 = false; $b3 = 1; $b4 = 0;
    $b5 = -1; $b6 = "1"; $b7 = null; $b8 = "php";
?>
     <tr>
        <td><?= var_dump($a) ?></td>
        <td><?= ($a === $b1) ? 'true':'false' ?></td>
        <td><?= ($a === $b2) ? 'true':'false' ?></td>
        <td><?= ($a === $b3) ? 'true':'false' ?></td>
        <td><?= ($a === $b4) ? 'true':'false' ?></td>
        <td><?= ($a === $b5) ? 'true':'false' ?></td>
        <td><?= ($a === $b6) ? 'true':'false' ?></td>
        <td><?= ($a === $b7) ? 'true':'false' ?></td>
        <td><?= ($a === $b8) ? 'true':'false' ?></td>
    </tr>
</table>

<h2>Выводы.</h2>

<p>1. Как мы видим из таблицы 1, нестрогое сравнение (==), позволяет более гибко работать со сравниваемыми данными, не приводя их к единому типу, что удобно, когда мы работаем с данными, полученными через браузер, т.к. из HTML-форм данные на сервер передаются в основном только как строковые значения. Например:</p>
<ul>
    <li>Сравнение чисел 1, -1, строки "1" или "php" с булевым значением "true" даст true</li>
    <li>Сравнение числа 0, значения false и NULL даст true</li>
    <li>Также есть интересные эффекты, например сравнение -1 и true дает true</li>

</ul>
<p>2. Из таблицы 2 мы видим, что строгое сравнение (===) дает true только в случае полного соответствия и типа операндов и их значений. В остальных случаях мы получаем отрицательный результат.</p>

<footer>
    Страница проекта на github: <a href="https://github.com/kydechuk01/pract_11.7_php">https://github.com/kydechuk01/pract_11.7_php</a><br>
    Выполнил: Александр Климок (<a href="https://github.com/kydechuk01/">kydechuk01</a>)<br>
    Курс: PHPPRO_19<br>
    Дата: 29.03.2024
</footer>
</body>
<script>
// раскрашиваем true/false в табличках
const tableCells = document.querySelectorAll('td');
tableCells.forEach(td => {
    if (td.innerText.includes('true')) {
        td.style.color = 'rgb(0,0,200)';
        td.style.backgroundColor = 'rgba(0,200,000,0.2)';
    }
    if (td.innerText.includes('false')) {
        td.style.color = 'rgb(200,0,0)';
        td.style.backgroundColor = 'rgba(200,0,0,0.05)'
    }
});
</script>

</html>