<?php
    $path = '/dir0/dir1/myfile.php';
    $file = 'file1.txt';
/*
    // Return filename
    echo basename($path);

    //return filename witout ext
    echo basename($path, '.php');
   
    //return the dir name from the path
    echo dirname($path);

    //Check if file exists
    echo file_exists($file);

    // Get abs path
    echo realpath($file);

    // Checks to see if file
    echo is_file($file);
    
    // Check if writable
    echo is_writable($file);

    // Check if readble
    echo is_readable($file);
    
    // get file size
    echo filesize($file);
    
    // Create a directory
    mkdir('testing');
    
    // Remofe dir if empty
    rmdir('testing');
    
    // Copy file
    echo copy('file1.txt', 'file2.txt');
    
    // Rename file
    rename('file2.txt', 'myfile.txt');
    
    // Delite file
    unlink('myfile.txt');
    
    // Write from file to string
    echo file_get_contents($file);
    
    // Write string to file
    echo file_put_contents($file, 'Goodby World');
    

    $current = file_get_contents($file);

    $current .= ' Goodbye World';

    file_put_contents($file, $current);
    

    //Open File For Reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);
    */

    // Open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle, $txt);
    $txt = "Steve\n";
    fwrite($handle, $txt);
    fclose($handle);













