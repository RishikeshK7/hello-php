<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <h1 style="font-size:50px;color:yellow;    text-align: center;">for loop</h1>
    <?php
        //Write a program to print 1 2 3 4 5 6  .......................100 
        echo "<h3>Q1 Write a program to print 1 2 3 4 5 6  .......................100.</h3>";
       
        for ($i = 1; $i <= 100; $i++) {
            echo $i."\t";
        }
        echo "<br>";

        //Q2 Write a program to print 100 99 98 97 96 95 ...................1 using for loop.
        echo "<h3>Q2 Write a program to print 100 99 98 97 96 95 ...................1 using for loop .</h3>";
       
        for ($i = 100; $i >= 1; $i--) {
            echo $i."\t";
            
        }
        echo "<br>";

        //Q3 Write a program to print Even ( 2 4 6 8 10 12 14 ............................100. using for loop
        echo "<h3>Q3 Write a program to print Even ( 2 4 6 8 10 12 14 ............................100  using for loop.</h3>";

        for ($i=2; $i <= 100;) {
            echo $i."\t";
            $i = $i + 2;
        }
        echo "<br>";

        //Q4 Write a program to print odd (1 3 5 7 9 11 13 .................99 using for loop.
        echo "<h3>Q4 Write a program to print odd (1 3 5 7 9 11 13 .................99  using for loop.</h3>";

        for ( $i=1; $i <= 100;) {
            echo $i."\t";
            $i = $i + 2;
        }
        echo "<br>";


        //Q5 Write a program to pring table using for loop.
        echo "<h3>Q5 Write a program to pring table using for loop.</h3>";
        $n=2;
       
        $t=0;
        for ( $i=1; $i <= 10; $i++) {
            $t = $n * $i;
            echo $t ."\t";
           
        }
        echo "<br>";

        //Q6 Write a program to find fectorial of number using for loop.

        echo "<h3>Q6 Write a program to find fectorial of number using for loop. </h3>";
        $n = 4;
        $s = $n;
        
        for($f = 1; $n > 0; $n--) {
            $f = $f * $n;
          
        }
        echo "Fectorial of $s is ".$f. "<br>";

        //Q7 Write a program to reverse of four digit no. using for loop.
        echo "<h3> Q7 Write a program to reverse of four digit no. using for loop.</h3>";

        $n = 6789;
        $rev = 0;
        $m = 0;
        $x = $n;
        for (; $n > 1;) {
            $m = $n % 10;
            $rev = ($rev * 10) + $m;;
            $n = $n / 10;
        }
        echo " Your number is $x and reverse is ". $rev. "<br>";

        //Q8 Write a program to check whether it is paliadrome no or not number using for loop.
        echo "<h3> Q8 Write a program to check whether it is paliadrome no or not number using,
         for loop.paliadrome number(121,131, 11,343...)</h3>";
        
        $n = 131;
        $rev = 0;
        $m = 0;
        $x = $n;
        for (; $n > 1; ) {
            $m = $n % 10;
            $rev = ($rev * 10) + $m;;
            $n = $n / 10;
        }
        if( $rev === $x) {
            echo "The Number($x) is Paliadrome number<br>";
        }
        else {
            echo "The Number($x) is not Paliadrome number<br>";
        }

        //Q9 Write a program to check whether it is armstrong no or not number using for loop.
        echo "<h3>Q9 Write a program to check whether it is armstrong no or not number using for loop. armstrong number(153, 370, 371 and 407 )</h3>";

        $n = 153;
        $armt = 0;
        $mod = 0;
        $x = $n;

        for (;$n > 1;) {
            $mod = $n % 10;
            $armt = $armt + ($mod * $mod  * $mod);
            $n = $n / 10;
        }
        if( $armt === $x) {
            echo "The Number($x) is armstrong number<br>";
        }
        else {
            echo "The Number($x) is not armstrong number<br>";
        }

    
    ?>
</body>
</html>
