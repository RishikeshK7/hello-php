<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Function program in php</title>
</head>
<body>
    <h1 style="text-algin:center; color:red;">All Function Program in php</h1>
    <?php
        //Q1 Write a program to print a fectorial using function in php.

        echo "<h3>Q1 Write a program to print a fectorial using function in php.</h3>";

        function fect($n) {
            
            $f = 1;
            for ($x=$n; $x>=1; $x--)
            {
                $f = $f * $x;
            }
            echo "Factorial of $n is $f";
            echo "<br>";
        }
        fect(4);    ///////////Calling
        fect(5);    ///////////Calling

        //Q2 Write a program to print a Table using function in php.

        echo "<h3>Q1 Write a program to print a Table using function in php.</h3>";

        function table($n) {
            
           $t = 0;
           
            for ($i=1; $i<=10; $i++)
            {
                 $t = $n * $i;
                 echo $t ." ";
            }
            echo "<br>";
        }
        table(4);    ///////////Calling
        table(5);    ///////////Calling

        //Q4 Write a program to print a Fiberacci series( 0 1 1 2 3 5 8 ......) using function in php..

        echo "<h3>Q4 Write a program to print a Fiberacci series( 0 1 1 2 3 5 8 ......) using function in php.</h3>";

        function fib() {
            
           $a = 0;
           $b = 1;
           $c = 0;
           echo "Fiberacci Series= ";
           echo $a. " ". $b. " ";
            for ($i=1; $i<=10; $i++)
            {
                 $c = $a + $b;
                 echo $c ." ";
                 $a = $b;
                 $b = $c;
            }
            echo "<br>";
        }
        fib();    ///////////Calling

        //Q5 Write a program to print a prime number using function in php..

        echo "<h3>Q5 Write a program to print a prime number using function in php.</h3>";

        function prime($n) {
            $i = 2;
            
         while ($i < $n){
             if (( $n % $i)===0){
                 echo "The number ($n) is not Prime number";
             }
             $i++;
             if( $i == $n){
                echo "The number ($n) is Prime number";
             }
         }
            echo "<br>";
        }
        prime(5);    ///////////Calling


        //Q5 Write a program to print square of number using function in php..

        echo "<h3>Q5 Write a program to print square of numberusing function with return value in php.</h3>";

        function square($n) {
           $s = $n * $n;
           echo "<br>";
           return $s;
        }
        $sq=square(5);    ///////////Calling
        echo "Square of $n is $sq";
        echo "Square of $n is ".(square(4));    ///////////Calling

        //Q6 Write a program to age tell whether the person is eligible for vote or not  using function in php..
        echo "<h3>Q6 Write a program to age tell whether the person is eligible for vote or not using function in php.</h3>";


        function Vote($age) {
            if( $age >= 18){
                 echo "You are age($age) year old. So person is eligible of Vote";
            }
            else{
                echo "You are age($age) year old. So person is Not eligible of Vote";
            }
            echo "<br>";
      
        }
        Vote(33);    ///////////Calling
        Vote(15); 
        


        // Q6 Write a program to print table 1 to 10  using function in php..
         echo "<h3>Q6 Write a program to print table 1 to 10  using function in php.</h3>";

         function TableOne() {
             
             for ($i=1; $i <=10; $i++) { 
                
                for ($j=1; $j <= 10; $j++) { 
                    echo "&nbsp;&nbsp;";
                  $t = $i * $j;
                  echo $t."&nbsp;&nbsp;&nbsp;&nbsp; ";  
                }
                echo "<br>";
             }
             echo " &nbsp;<br>";
             
         }
        TableOne();    ///////////Calling;

        // Q7 Write a program to print patter using function in php..
        echo "<h3>Q7 Write a program to print patter using function in php.</h3>";

        function patter() {
            
            for ($i=1; $i <=8; $i++) { 
               
               for ($j=1; $j <= $i; $j++) { 
                  
                    echo "&nbsp;*";  
                
               }
               echo "<br>";
            }
            echo "<br>";
            
        }
        patter();    ///////////Calling;

          // Q8 Write a program to print patter R using function in php..
          echo "<h3>Q8 Write a program to print patter R using function in php.</h3>";

          function patterR() {
              
              for ($i=1; $i <=8; $i++) { 
                 
                 for ($j=1; $j <= 8; $j++) { 
                    if ($i==1 || $i== 8 || $j == 1 || $j==8)
                      echo "&nbsp;*";  
                    else
                        echo "&nbsp;&nbsp;&nbsp;";
                  
                 }
                 echo "<br>";
              }
            for ($i=1; $i <=8; $i++) { 
                echo "&nbsp;*"; 
                for ($j=1; $j <= $i; $j++) { 
                    if ($i <= $j && $j >= $i)
                        echo "&nbsp;*";  
                    else
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                
                }
             echo "<br>";
          }
              echo "<br>";
              
          }
          patterR();    ///////////Calling;
         
    ?>
</body>
</html>
