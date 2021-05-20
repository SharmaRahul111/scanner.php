<?php
/*
scanner.php
This is a function which helps to scan a
directory/folder to its internal depth.
To know how to use this please read the
Readme.md file

Developed by Rahul Sharma
github.com/SharmaRahul111
*/
function scanner($url,$type){
  $dirs = [];
  $mydirs = [];
  $files = [];
  $filesanddirs = [];
  $lists7 = scandir($url);
  $lists = array_diff($lists7,[".",".."]);
  foreach($lists as $list){
    $list2 = $url."/".$list;
    if(is_dir($list2)){
      array_push($dirs,$list2);
      array_push($mydirs,$list2);
    }else{
      array_push($files,$list2);
    }//if else ends
    array_push($filesanddirs,$list2);
  }//foreach ends
  $i = 0;
  while(count($dirs) > 0 && $i<1000){
    $scanurl = array_pop($dirs);
    $newdirs7 = scandir($scanurl);
    $newdirs = array_diff($newdirs7,[".",".."]);
    foreach($newdirs as $newdir){
      $newdir2 = $scanurl."/".$newdir;
      if(is_dir($newdir2)){
        array_push($dirs,$newdir2);
        array_push($mydirs,$newdir2);
      }else{
        array_push($files,$newdir2);
      }//if else ends
      array_push($filesanddirs,$newdir2);
    }//foreach ends
    $i++;
  }//while ends
  //sorting the array from A to Z
  natsort($files);
  natsort($filesanddirs);
  natsort($mydirs);
  if($type == 'dir'){
    return array_values($mydirs);
  }else if($type == 'file'){
    return array_values($files);
  }else{
    return array_values($filesanddirs);
  }

}//function ends
?>