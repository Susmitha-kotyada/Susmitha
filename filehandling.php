<?php
/*
#create file
$file=fopen('abc.txt','w');
fwrite($file,"susmitha kotyada\n");
fclose($file);

#read file
$file=fopen('abc.txt','r');
echo fread($file,filesize('abc.txt'));
fclose($file);

#append file
$file=fopen('abc.txt','a');
fwrite($file,"hello everyone");
fclose($file);
*/
#create file and write student details
$filename='abc.txt';
$data="ID:1,NAME:ANU,COURSE:CSE\n";
$data.="ID:2,NAME:ARYA,COURSE:CSE\n";
$file=fopen($filename,"w");
fwrite($file,$data);
fclose($file);
echo "students records written successfully\n";

#read and display file contents
$f=fopen('abc.txt','r');
while(!feof($f)){
    echo fgets($f) .'<br>';
}
fclose($f);

#append new records
$newdata="ID:3,NAME:AMMA,COURSE:ECE\n";
$f=fopen('abc.txt','a');
fwrite($f,$newdata);
fclose($f);
?>