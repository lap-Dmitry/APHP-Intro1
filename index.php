<?php
declare(strict_types=1);

use Human\Student;
use Technics\Tv;
use Transport\Car;

function classes($className)
{
    $path = '.'. DIRECTORY_SEPARATOR . 'objectClasses'. DIRECTORY_SEPARATOR . $className. '.php';

    require_once $path;
}

spl_autoload_register("classes");

$studentOne = new Student('Павел', 'Иванов', 'ИТ', '2', 'Веб-разработчик', '8-800-555-35-35');
$studentTwo = new Student('Олег', 'Петров', 'ИТ', '2', 'Веб-разработчик', '8-900-555-55-65');
$carOne = new Car('Reno', 'Logan', 'Чёрный', '1.6', '1 000 000 р');
$carTwo = new Car('BMW', 'X5', 'Белый', 'L6', '7 000 000 р');
$tvOne = new Tv('Smart TV MX', 'LG', 'LED', '32', '1 г', '19 990 р');
$tvTwo = new Tv('32V35KE', 'Toshiba', 'LED', '43', '1 г', '25 990 р');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Classes and autoload</title>
</head>
<body>
<h1>Классы и автозагрузка</h1>
<section>
    <h2>Список студенов</h2>
    <table>
        <tbody>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Факультет</th>
            <th>Курс</th>
            <th>Специальность</th>
            <th>Номер телефона</th>
        </tr>
        <?php
        echo $studentOne->infoObject();
        $studentTwo->changeCourse('3');
        echo $studentTwo->infoObject();
        ?>
        </tbody>
    </table>
</section>

<section>
    <h2>Список машин</h2>
    <table>
        <tbody>
        <tr>
            <th>Бренд</th>
            <th>Серия</th>
            <th>Цвет</th>
            <th>Двигатель</th>
            <th>Цена</th>
        </tr>
        <?php
        echo $carOne->infoObject();
        $carTwo->changePrice('10 000 000 р');
        echo $carTwo->infoObject();
        ?>
        </tbody>
    </table>
</section>

<section>
    <h2>Список телевизоров</h2>
    <table>
        <tbody>
        <tr>
            <th>Название</th>
            <th>Бренд</th>
            <th>Дисплей</th>
            <th>Диагональ</th>
            <th>Гарантия</th>
            <th>Цена</th>
        </tr>
        <?php
        $tvOne->changeDiagonal("55");
        echo $tvOne->infoObject();
        echo $tvTwo->infoObject();
        ?>
        </tbody>
    </table>
</section>
</body>
</html>