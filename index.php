<?php

//all exercises are written in this file. in order to check the exercise you want uncomment it

//exercise 1
for ($i=1; $i<=10; $i++) {
    if ($i==10) {
        echo "$i";
    }
    else {
        echo "$i-";
    }
}

//exercise 2
// $total = null;

// for ($i=0; $i<=30; $i++){
    
//     $total += $i;
// }

// echo $total;


//exercise 3
// for($i=0; $i<5; $i++){
    
//     for($j=0; $j<=$i; $j++){
//         echo "* ";
//     }

//     echo "<br>";
    
// }

//exercise 4
// for($i=0; $i<5; $i++){
    
//     for($j=0; $j<=$i; $j++){
//         echo "* ";
//     }
    
//     echo "<br>";
        
// }

// for($i=5; $i>0; $i--){
    
//     for($j=$i; $j>0; $j--){
//         echo "* ";
//     }
    
//     echo "<br>";
        
// }

//exercise 5
// <form action="index.php" method = "post">
//     <input type="number" name = "factorial">
//     <input type="submit">
// </form>

// <?php
// $number = $_POST["factorial"];
// $factorial = 1;

// for ($i=1; $i<=$number; $i++){
//     $factorial = $factorial * $i;
// }

// echo "factorial of $number is $factorial";
// ? >

//exercise 6
// for($i=0; $i<100; $i++){
//     if($i<10){
//         echo "0$i, ";
//     }
//     else {
//         echo "$i, ";
//     }

// }

//exercise 7
// $text = "w3resource";
// $count = null;
// $find_char = "r";

// for($i=0; $i<=strlen($text); $i++){
//     if(substr($text, $i, 1) == $find_char){
//         $count++;
//     }

// }

// echo $count;



//exercise 8
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <table border=1px cellpadding=3px cellspacing=0px >

//         <?php
//             for($i=1; $i<=6; $i++){
//                 for($j=1; $j<=5; $j++){
//                     echo "<td>$i * $j = " . $i*$j . "</td>";
//                 }
//                 echo "</tr>";
//             }
//         ? >
        
//     </table>
// </body>
// </html>



//exercise 9
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <table width="270px" border = "2px" cellpadding = "2" cellspacing = "0">
//         <?php
//             for($i=1; $i<=8; $i++){
//                 for($j=1; $j<=8; $j++){
//                     $total = $i + $j;
//                     if($total %2 == 1){
//                         echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
//                     }
//                     else {
//                         echo "<td height=30px width=30px bgcolor=#000000></td>";
//                     }
//                 }
//                 echo "</tr>";
//             }
//         ? >
//     </table>
// </body>
// </html>



//exercise 10
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <table border="1px" cellspacing=0 cellpadding=1>
//         <?php
//             for ($i=1; $i<=10; $i++){
//                 echo "<tr>";
//                 for ($j=1; $j<=10; $j++){
//                     echo "<td>" . $i * $j . "</td>";
//                 }
//                 echo "</tr>";
//             }

//         ? >
//     </table>
// </body>
// </html>



//exercise 11
// for($i=1; $i<=50; $i++){
//     if(($i % 3 == 0)&&($i % 5 == 0)){
//         echo "$i FizzBuzz <br>";
//     }
//     elseif($i % 3 == 0){
//         echo "$i Fizz <br>";
//     }
//     elseif($i % 5 == 0){
//         echo "$i Buzz <br>";
//     }
//     else{
//         echo $i . "<br>";
//     }
// }



//exercise 12
// $n = 5;
// $output = 1;

// for($i=1; $i<=$n; $i++){
//     for ($j=1; $j<=$i; $j++){
//         echo "$output ";
//         $output++;
//     }

//     echo "<br>";
// }



//exercise 13
// for($i=1; $i<=8; $i++){
//     if($i == 1){
//         echo "&nbsp;&nbsp;***<br>";
//     }
//     elseif($i == 4){
//         echo "*****<br>";
//     }
//     else{
//         echo "*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
//     }
// }



//exercise 14
// for($column = 1; $column <=7; $column++){
//     if($column == 1 or $column==4 or $column==7){
//         echo "****";
//     }
//     else{
//         echo "*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*";
//     }

//     echo "<br>";
// }



//exercise 15
// for($row=1; $row<=7; $row++){
//     for($column=1; $column <=5; $column++){
//         if((($row ==1 or $row==7) and ($column>1 and $column<5)) or (($row==2 or $row==6) and ($column==1 or $column==5)) or ($row >2 and $row<6) and $column==1){
//             echo "*";
//         }
//         else {
//             echo "&nbsp;&nbsp;";
//         }
//     }

//     echo "<br>";
// }



//exercise 16
// for($row=1; $row<=7; $row++){
//     for($column=1; $column <=5; $column++){
//         if((($row==1 or $row==7) and $column<5) or (($row!=1 and $row!=7) and ($column==1 or $column==5)) ){
//             echo "*";
//         }
//         else {
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 17
// for($row=1; $row<=7; $row++){
//     for($column=1; $column <=5; $column++){
//         if(($row==1 or $row==7) or (($row!=1 and $row!=4 and $row!=7) and ($column==1)) or($row==4 and $column!=5)){
//             echo "*";
//         }
//         else {
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }

//exercise 18
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){

//         if($row==1 or $row==4 and $column!=5 or $row!=1 and $row!=4 and $column==1){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }

//exercise 19
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
        
//         if(($row==1 || $row==7) && ($column!=1 && $column!=5) || ($row==4 && $column!=2) || (($row!=1 && $row!=4 && $row!=7 && $row!=3) && ($column==1 || $column==5)) || ($row==3 && $column==1)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";     
//         }
//     }
    
//     echo "<br>";
// }

//exercise 20
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if($row==4 || ($row!=4 && $column==1 || $column==5)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }

//exercise 21
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($row==1 || $row==7) || ($row!=1 && $row!=7 && $column==3)){
//             echo "*";
//         }
        
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 22
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($row==1 && $column>2) || ($row==6 && ($column==2 || $column==4)) || ($row==7 && $column==3) || ($row!=7 && $column==4)){
//             echo "*";
//         }
        
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 23
// for($row=1; $row<=8; $row++){
//     for($column=1; $column<=6; $column++){
//         if(($row==4 && ($column==1 || $column==2)) || (($row==3 || $row==5) && ($column==1 || $column==3)) || (($row==2 || $row==6) && ($column==1 || $column==4)) || (($row==1 || $row==7) && ($column==1 || $column==5)) || ($row==8 && ($column==1 || $column==6))){
//             echo"*";
//         }
        
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 24
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if($column==1 || $row==7){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }


//exercise 25
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($column==1 || $column==5) || ($row==3 && ($column==2 || $column==4)) || ($row==4 && $column==3)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 26
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($column==1 || $column==5) || ($row==3 && $column==2) || ($row==4 && $column==3) || ($row==5 && $column==4)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 27
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if((($row==1 || $row==7) && ($column!=1 && $column!=5)) || ($row!=1 && $row!=7) &&(($column==1 || $column==5)) ) {
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }


//exercise 28
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if($column==1 || (($row==1 || $row==4) && ($column!=5)) || (($row==2 || $row==3) && ($column==5))){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }


//exercise 29
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($row==1 && $column>1 && $column<5) || (($row>1 && $row<6) && ($column==1 || $column==5)) || ($row==5 && $column==3) || (($row==6) && ($column==1 || $column==4)) || (($row==7) && ($column==2 || $column==3 ||$column==5))){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }


//exercise 30
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if((($row==1 || $row==4) && $column <5) || (($row==2 || $row==3 || $row ==7) && ($column==1 || $column==5)) || (($row==5) && ($column==1 || $column==3)) || (($row==6) && ($column==1 || $column==4))){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise31
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($row==1 || $row==4 || $row== 7) && ($column==2 || $column==3 ||$column==4) || ($row==1 && $column==5) || ($row==7 && $column==1) || (($row==2 || $row==3) && $column==1) || (($row==5 || $row==6) && $column==5)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 32
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if($row==1 && ($column>=1 || $column<=5) || $row!=1 && $column==3){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 33
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($row!=7 && ($column==1 || $column==5)) || $row==7 && ($column==2 || $column==3 ||$column==4)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 34
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($row<=5 && ($column==1 || $column==5)) || ($row==6 && ($column==2 || $column==4)) || ($row==7 & $column==3)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 35
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($row<=6 && ($column==1 || $column==5)) || (($row==5 || $row==6) && $column==3) || ($row==7 && ($column==2 || $column==4))){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 36
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if((($row<=2|| $row>=6) && ($column==1 || $column==5)) || (($row==3 || $row==5) && ($column==2 || $column==4)) || ($row==4 && $column==3)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 37
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=5; $column++){
//         if(($row<=2 && ($column==1 || $column==5)) || ($row==3 && ($column==2 || $column==4)) || ($row>3 && $column==3)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }



//exercise 38
// for($row=1; $row<=7; $row++){
//     for($column=1; $column<=7; $column++){
//         if(($row==1 || $row==7 && $column>=1) || ($row==2 && $column==6) || ($row==3 && $column==5) || ($row==4 && $column==4) || ($row==5 && $column==3) || ($row==6 && $column==2)){
//             echo "*";
//         }
//         else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
    
//     echo "<br>";
// }

?>






