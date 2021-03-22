<?php
$data=['abc','def','ghi','jkl','mno','opq','rst','uvw','xyz'];
// print_r($data);
$filename="prd_down.txt";
$dir = dirname(__FILE__)."\\".$filename;
echo $dir;
// if(file_exists($dir)){
//     file($dir);
//     $wfile=fopen($dir,"a");
//     $count = count($data);
//     for($i = 0;$i<9;$i++){
//         file_put_contents($dir,$data[$i]."\r\n",FILE_APPEND);
//     }
//     fclose($wfile);
// }else{
//     touch($dir);
// }

echo @fopen($dir,"a");






?>