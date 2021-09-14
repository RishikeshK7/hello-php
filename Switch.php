
<!DOCTYPE html>
<html>
<body>
<?php
    $favcolor = "red";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!>";
    }
echo "<br>";
    //write a program to input dayno and print corresponding day.

    $dayNo = 1;

    switch ($dayNo) {
        case 1:
             echo "Mon";
             break;
        case 2:
             echo "Tue";
             break;
        case 3:
             echo "wed";
             break;
        case 4:
             echo "Thes";
             break;
        case 5:
             echo "Fri ";
             break;
        case 6:
             echo "Sat";
             break;
        case 7:
             echo "Son";
             break;
        default:
            echo "Invalid Dayno";
    }

    //WAP to check wheter number is even or odd
    echo "<br>";
    $num=4;
    switch ($num%2) {
        case 0: 
            echo "<br>Even";
            break;
        case  1:
            echo"<br>Odd<br>";
            break;
        default:
            echo "Invalid number";
    }

    echo "<br>";
   //Write a program ot find of letter is Vowel or Consonant.

   $x="a";
   $letter=strtoupper($x);

   switch ( $letter) {
       case "A":
        echo "<h1>The Letter( $x ) is Vowel</h1>";
        break;
       case "E":
        echo "<h1>The Letter( $x ) is Vowel</h1>";
        break;
       case "I":
        echo "<h1>The Letter( $x ) is Vowel</h1>";
        break;
       case "O":
        echo "<h1>The Letter( $x ) is Vowel</h1>";
        break;
       case "U":
        echo "<h1>The Letter( $x ) is Vowel</h1>";
        break;
        default:
            echo "<h1>The Letter( $x ) is Consonent</h1>";
   }
?>
 
</body>
</html>
