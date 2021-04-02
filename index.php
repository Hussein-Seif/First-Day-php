<?php
/*$name ="Hussein";
echo gettype($name);
*/


// if Condition 


 
$age=113;
if ($age>=16) {
    echo "Hello To setion";
}else {
    echo "Go To Your mama";
}
echo"<hr>";
// Grade methoud

echo "<hr>" ;

$grade="10";

    if ( is_numeric($grade) ) {
       if ($grade >0 || $grade <=100) {
        if ($grade>=90 and $grade<=100) {
            $result= "You Grade Is A+";
        } elseif ($grade>=75 and $grade<90) {
            $result= "You Grade Is B+";
            
        } elseif($grade>=60 and $grade<75) {
            $result= "You Grade Is c+";
            
        }elseif ($grade>=50 and $grade<60) {
            $result= "You Grade Is D";
            
        }elseif ($grade<50) {
            $result= "You Grade Is f";
        }
       }
    }elseif(! is_numeric($grade)){
        $result= "Please Enter number only ";
    }
    //echo $result;
    //---------------------------------------//
    # Loops 
    /*
     practice for loops Boom Play
    this loop print all numbers except Multiples of five 
    */

    for ($i=0; $i <20 ; $i++) { 
        if ($i % 5==0 && $i>1) {
            echo "<br> Boom <br>";
            continue;
        }
        echo $i.""; 
    }
//------------------------------------//
echo "<hr>" ;

// while 

$i = 1;
while($i<=20){
    if ($i %5==0 ) {
        echo "Boom" ."<br>" ;;
        
    }else{
    echo $i."";}
    $i ++;
}
echo "<hr>" ;
$frinds= array("kareem", "Mahmoud","koko","al-altar");
for ($i=0; $i <count($frinds) ; $i++) { 
    echo $frinds[$i] ."";
}
echo "<hr>" ;
$i=0;
while($i<count($frinds)){
    echo $frinds[$i] ;
    echo "<br>" ;
    $i++;
}

echo "<hr>" ;


// foreach

foreach ($frinds as $frind) {
    echo $frind;
    echo "<br>" ;
}
echo "<hr>" ;
//assositive array
$myData=array(
    "name"=>"Hussein",
     "address"=>"Egypt",
     "phone"=>+20-120834432,
     "level"=>"beginer",
     "salary"=>1200,
     
);
foreach ($myData as $key => $value) {
    echo "Your $key is $value ";
}

echo "<hr>" ;
//multi dimensional array 

$students = array("hussein"=>array(1,10,1999),"mohamed"=>array(1,12,1988),"Khalide"=>array(2,4,1899));
foreach ($students as $studentName => $birthDay) {
         
    foreach ($birthDay as $value ) {
        // echo $value  ;
    }
}
echo "<hr>" ;
//-----------------------//
//search Array -_-
$movieName= "Avater";
$moviesList = array("jasson","Avater","fast-9","Tom&Geary");
foreach ($moviesList as $movie => $value) {
    if (strtoupper($value) == strtoupper($movieName)) {
        echo "Found";
    }
}
//============================///
// Search for the max and min Numbers
echo "<hr>" ;
$numbers= array(2,3,77,132,-57667,-1);
$max=$numbers[0];
$min=$numbers[0];
// Loop For Minimum Number

foreach ($numbers as $number) {
    // Max condition
    if ($number>$max) {
        $max=$number;
    };
    // Min condition
    if ($min<$number) {
        $min=$number;
    }

}
// Loop For Minimum Number
foreach ($numbers as $number) {
   
    // Min condition
    if ($number<$min) {
        $min=$number;
    }

}
//echo "The max Number is $max And The Minimum Number is $min ";
//================================//

/*
problem : yor Have an array contans Nubers ,strings and Boolen values 
Requiers : 1-if you found Bool Print (yes for true and No for false)
           2- if you found Number add to it 5
*/
$problem=array( true,100 , "hussein ",false);
// solve 
foreach($problem as $found){
    if(gettype($found)=="integer"){
        echo $found+5;
        echo "<br>" ;
    }elseif (gettype($found)=="string") {
        echo$found;
        echo "<br>" ;
    }elseif (gettype($found)=="boolean") {
        if ($found ==true) {
            echo"Yes";
            echo "<br>" ;
        }else
           { echo"No";
            echo "<br>" ; 
            // continue;
        }
    }
}
