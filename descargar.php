<?php
if(!empty($_POST['archivo'])){
    $fileName = basename($_POST['archivo']);
    var_dump($fileName)
    $filePath = 'img/'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        // Read the file
        readfile($filePath);
        exit;
    }else{
        echo 'The file does not exist.';
    }
}