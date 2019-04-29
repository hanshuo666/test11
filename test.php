<?php 
    
    // function ReverseSentence($str){
    // $str = strtok($str," ");
    //    strrev($str);
    // }
    // echo ReverseSentence("i am hanshuo");
    // 
    // 
//     $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

// $key = array_search('green', $array); // $key = 2;
// $key = array_search('red', $array);   // $key = 1;

// var_dump($key);die;
 $array=[['1','2','8','9'],['2','4','9','12'],['4','7','10','13'],['6','8','11','15']];
 $target = '10' ;

        //传入数据
    function Find($target,$array){
        //循环二维数组变成一维数组搜索一维数组中的那个值
 
             foreach ($array as $key => $value) {
         foreach ($value as $k => $v) {
           $arr[ ] =$v;
         }
      }
 
    
       $a = array_search($target,$arr);
        if($a){
          echo "ture";
        }else{
          echo "false";
        }

    }



  echo (Find($target,$array));