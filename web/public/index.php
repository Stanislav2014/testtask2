<?php

        /** 
         * Сохраняем путь в переменную @path    
         */

$path = getcwd()."/datafiles/*";

        /** 
         * Создаем объект @DirectoryIterator который наполнится информацие о файлах    
         */

$dir = new DirectoryIterator(dirname($path));

        /** 
         * Производим агрегацию массива данных @dir     
         */


foreach ($dir as $fileinfo) {
    if (preg_match('/[a-zA-z0-9].ixt/',$fileinfo->getFilename()))
    {

        /** 
         * Заполняем массив @filenames именами файлов    
         */

    $filenames[] = $fileinfo->getFilename();
    }
}

        /** 
         * сортировка массива @filenames 
         *     
         */

natsort($filenames);

        /** 
         * вывод на экран результата 
         *     
         */

foreach ($filenames as $name) 
{
    echo $name."<br />\n";
}
