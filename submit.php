<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['message'])) {
    $data = $_POST['title'] . ' ' . $_POST['name'] . "\n" .$_POST['email'] . "\n" . $_POST['message'];
    $filename = date('YmdHis').".txt";
    if (!file_exists($filename)) {
        $fh = fopen($filename, 'w') or die("File creation failed");
    }
    $wri = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('Error writing this file');
    }
    else {
        // echo "$wri bytes written to file";
        echo "I have received your request, will get back to you soon";
    }
}
else {
   die('no data sent');
}
    

    
    
?
