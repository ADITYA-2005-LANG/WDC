<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $user=$_POST["login"];
    $pswd=$_POST["pass"];
    $log_entry=$user . " " . $pswd . PHP_EOL;
    $filename="logfile.txt";
    chmod($filename,0777);
    $file=fopen($filename,'a');
    
    $file_content = file_get_contents($filename);

  
    if (strpos($file_content, $user) === false) {
        $error_message = "Error: {$user} was not found.";
    } 
    elseif (strpos($file_content, $pswd) === false)
    {
        $error_message = "Error: Password is incorrect.";
    }
    
    else {
        $success_message = "Success: The data '{$search_data}' was found in '{$filename}'.";
    }
}
?>