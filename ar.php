<?php

$data = [];
$prefix = '/www/imagesgut.itb-dev.ru/upload/';

$baseNumber = 3004;  // начальное число для имени файла

$iterationCounter = 0;  // Счетчик для следующего изменения baseNumber

$tfCounter = 1;  // Счетчик для части TF'S

for ($i = 1; $i <= 1000; $i++) {
    $baseName = '101-' . sprintf('%05d', $baseNumber) . ' TF\'S';
    
    $data[] = $prefix . $baseName . $tfCounter . '.jpg'; 

    $iterationCounter++;

    $tfCounter++;
    
    if ($iterationCounter % mt_rand(3, 6) == 0) {
        $baseNumber++;
        $tfCounter = 1;
    }
    
}

// Если вы хотите сохранить этот массив в файл, используйте следующий код:
$fileContent = "<?php\n\n\$data = " . var_export($data, true) . ";\n\n?>";
file_put_contents('data_array.php', $fileContent);

?>