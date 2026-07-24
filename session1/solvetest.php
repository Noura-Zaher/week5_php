<?php

// C:\xampp\php\php.exe solvetest.php
 //Merge two array

 function mergArray($arr1,$arr2){
    foreach($arr2 as $arr){
        $arr1[]=$arr;
    }
    return $arr1;
 }

 $first=[1,2,3,3,4,5,4,4];
 $second=[5,6,9,3];
 print_r(mergArray($first,$second)) ;

//find duplicate number

function Findduplicate($arr){
    $duplicate=[];
    $seen=[];
    foreach($arr as $number){
        if(in_array($number,$seen)){
            $duplicate[]=$number;
        }else{
            $seen[]=$number;
        }
    }
    return $duplicate;
}
  
print_r(Findduplicate($first));

//sort in array (puple sort)

function sortArray($arr){
for($i=0 ; $i<count($arr)-1 ; $i++){
    for($j=0; $j<count($arr)-$i-1; $j++){
        if($arr[$j]>$arr[$j+1]){
            $Temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $Temp;
                    }

    }
}
return $arr;
}

print_r(sortArray($second));

//reverse string

function ReverseString($str){
    $rev="";
for($i=strlen($str)-1; $i>=0; $i--){
    $rev.=$str[$i];

}
return $rev;
}
   
$name='noura';
print_r(value: ReverseString($name));


//count words in a string .......... my name is eslam ibrahim


function countWord($str){
    $wordCount = 0;
    $inword=false;
    for($i=0; $i< strlen($str);$i++){
        if($str[$i]==' '||$str[$i]=='\n'){
            if($inword){
                $wordCount++;
                $inword=false;
            }
        }else{
                if(!$inword){
                    $inword=true;
                }
            }
    }
    if($inword){
        $wordCount++;
    }
    return $wordCount;
}
$string='noura zaher mohamed';
print_r(countWord($string));

//by build in function 

function CountWor($str){
    $words=explode(' ',$str);
    $words=array_filter($words);
    return count($words);
}
echo CountWor($string); 