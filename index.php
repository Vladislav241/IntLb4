<?php
$array1 = [1, 2, 3, 4, 5, 3, 2, 6];
$array2 = [3, 6, 7, 8, 5, 7, 9];

$uniqueArray1 = array_unique($array1);
$uniqueArray2 = array_unique($array2);

$duplicatesCount = count(array_intersect($array1, $array2));

$mergedArray = array_unique(array_merge($uniqueArray1, $uniqueArray2));

$reversedArray = [];
foreach ($mergedArray as $key => $value) {
    array_unshift($reversedArray, $value); 
}

echo "<h2>Результати:</h2>";
echo "<p><b>Початковий масив 1:</b> [" . implode(", ", $array1) . "]</p>";
echo "<p><b>Початковий масив 2:</b> [" . implode(", ", $array2) . "]</p>";

echo "<p><b>Унікальні елементи масиву 1:</b> [" . implode(", ", $uniqueArray1) . "]</p>";
echo "<p><b>Унікальні елементи масиву 2:</b> [" . implode(", ", $uniqueArray2) . "]</p>";

echo "<p><b>Кількість дублів між масивами:</b> $duplicatesCount</p>";

echo "<p><b>Злиття масивів з видаленням дублів:</b> [" . implode(", ", $mergedArray) . "]</p>";
echo "<p><b>Інвертований масив:</b> [" . implode(", ", $reversedArray) . "]</p>";
?>