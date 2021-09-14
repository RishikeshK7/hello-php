<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional program</title>
</head>
<body>
    <h1>This is if else Conditional statement.</h1>
  
    <?php
        echo "<h3>if else</h3>";
        //Q1 Write a program to check a number is odd or even in php.
         $n=21;
         if($n%2==0){
             echo "The number is Even";
         }
         else{
             echo "The number( $n ) is Odd";
         }
        
         //Q2 Write a program to ckeck a number is negative of Positive.
         echo "<br>";
         echo "<br>";
         $n=-10;
   
         if($n>0){
             echo "The number is positive(+ve)";
         }
         else{
             echo "The number is Negative(-ve)";
         }

         //Q3 Write a program to check the yeer is leap year or not leep year.
         echo "<br>";
         echo "<br>";
         $year=2001;
   
         if($year%4==0){
             echo "The year( $year ) is Leap Year";
         }
         else{
            echo "The year( $year ) is Not Leap Year";
         }

         /*Q4 Write a program to input the basic salary if bs>=5000   hra of 20% of basic salary and
          DA is 75% of basic salary otherwise HRA 15% of basic salary, DA 75% of basic salary.*/
         echo "<br>";
         echo "<br>";

         $bs=1000;     //bs-> basic salary
         if($bs>=5000){
             $hra=($bs*20)/100;
            $da=($bs*90)/100;
         }
         else{
            $hra=($bs*15)/100;
             $da=($bs*75)/100;
         }
         echo "HRA= ".$hra." <br>";
         echo "DA= ".$da." <br>";
    
          //Q7 Write a program to unit of electries of costemer if unit >=5000 than rs 8/unit ortherwise rs 5 /unit
        $unit = 1000;
        $amt=0;
        if($unit>=5000) {
            $amt = $unit * 8;
        }
        else {
            $amt = $unit * 5;
        }
        echo "<br> Unit = ", $unit, "<br>";
        echo "Amount= ", $amt, "<br>";

            
        echo "<br> Else if";
        echo "<br>";
         /*write a program to input a five marks ifind total and devision if avg<= 60 then student is pass or avg<=45 then 
         student is second or avg<=30 then student is third otherwise fail*/

         $m1=33;
         $m2=81;
         $m3=56;
         $m4=68;
         $m5=98;
         $tot=$m1+$m2+$m3+$m4+$m5;
         if($m1>=30 && $m2>=30 && $m3>=30 && $m4>=30 && $m5>=30){
           
            $avg=$tot/5;

            if($avg>=60){
                echo "Student is First Division or Marks is ($tot)";
            }
            else if($avg>=45){
                echo "Student is Second Division or Marks is ($tot)";
            }
            else if($avg>=30){
                echo "Student is third Division or Marks is ($tot)";
            }
            else{
                echo "Student is fail or Marks is ($tot)";
            }
        }
        else {
            echo "Student is fail or Marks is ($tot)";
        }

        
        
    ?>
</body>
</html>
