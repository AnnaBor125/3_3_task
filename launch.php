<?php
// Задание 1: Определение четности чисел. Создайте массив из 5 чисел. Используя цикл foreach и условные
// операторы ( if-else ), проверьте, является ли каждое число четным или нечетным, и выведите соответствующее
//сообщение.

$numbers = [1, 2, 5, 10, 15];
foreach($numbers as $number) {
     if ($number /= 2) {
     echo "Число четное";
    } else {}
    echo "Число нечетное";
}
// Задание 2: Подсчет положительных и отрицательных чисел. Создайте массив из 7 чисел, содержащий как
//положительные, так и отрицательные значения. С помощью цикла foreach и ветвления ( if-else ) подсчитайте,
// сколько в массиве положительных и отрицательных чисел.

$arr = [1, 2, -3, 4, -5, 6, 7];
foreach($arr as $number) {
    if ( $number > 0) {
        count($number);
} else {
    echo " ";
}
}
 echo $number. " ";
    
// Задание 3: Таблица умножения. Используя цикл for , выведите таблицу умножения для числа 5 от 1 до 10.
// Каждый результат должен выводиться на новой строке в формате: "5 * 1 = 5" .

for ($i = 1; $i <= 10; $i++) {  
    echo "5 * $i = " . (5 * $i) . "<br>";
    }

// Задание 4: Условное отображение оценок студентов. Создайте массив с именами 3 студентов и их оценками за
// экзамен (например: ["Иван" => 85, "Мария" => 74, "Алексей" => 90] ). Используя цикл foreach и ветвления
// ( if-else ), напишите логику, которая определяет, сдал ли каждый студент экзамен: 
    // Если оценка 50 и выше — вывести: "<Имя студента> сдал экзамен!" .
    // Если оценка ниже 50 — вывести: "<Имя студента> не сдал экзамен!" .
   $grades = ["Иван" => 85, "Мария" => 74, "Алексей" => 90];
foreach ($students as $name => $score) {
    if ($score >= 50) {
        echo "$name сдал экзамен!"
    } else ($score < 50) {
        echo "$name не сдал экзамен!"
     }
    }
// Задание 5: Поиск минимального и максимального значений. Создайте массив из 8 случайных чисел. Используя цикл
// foreach , найдите и выведите минимальное и максимальное значения в массиве.

$arr1 = [7, 87, 19, 5, 80, 4, 2, 97];
min ($arr1) = $min;
max ($arr1) =  $max;

foreach ($arr1 as $value) {
    if ($value > $min) {
        $min = $value;
} echo "$min";
}

foreach ($arr1 as $value) {
    if ($value < $max) {
        $max = $value;
} echo "$max";
}
?>.php
