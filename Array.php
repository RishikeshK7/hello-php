<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index array in php</title>
  
</head>
<body>

    <h1 id="head">Array in PHP</h1>
    <?php
        //Q1 Write a program to print Roll of student;

        echo "<h1> Q1 Write a program to print Roll of student</h1>";

        $roll = array(41,65,46,24,16,18,8);
        for ($i = 0; $i < count($roll); $i++){
            echo "Roll index[$i]: ".$roll[$i];
            echo "<br>";
        }

        //Q2 Write a program to print salary of Employee;

        echo "<h1> Q2 Write a program to print salary of Employee </h1>";

        $sal = array(5000,2550,60000,125000,456000);
        for ($i = 0; $i < count($sal); $i++){
            echo "Salary : ".$sal[$i];
            echo "<br>";
        }

        //Q3 Write a program to store even or odd number between 1 100 in php;

        echo "<h1> Q3 Write a program to store even or odd number between 1 100 in php</h1>";
        $even=array();
        $odd=array();
        $j = 0; 
        $k = 0;
        for ( $i = 0; $i < 100; $i++) {
            if( $i % 2 == 0) {
                $even[$j] = $i;
                $j++;
            }
            else {
                $odd[$k] = $i;
                $k++;
            }
        }
        //output of Even number
        echo "<h3>Even Number between 1 to 100</h3>";
        for ($i=0; $i < 50; $i++) { 
            echo $even[$i]. " ";
        }
        echo "<br>";
        //output of Odd number
        echo "<h3>Even Number between 1 to 100</h3>";
        for ($i=0; $i < 50; $i++) { 
            echo $odd[$i]. " ";
        }
        
        echo "<hr>";
        //PHP Multidimensional Arrays
        echo "<h1>PHP Multidimensional Arrays</h1>";
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
          );
            
          echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
          echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
          echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
          echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

         //Q3 Write a program to print salary of Employee and also print name of employee;

         echo "<h1> Q3 Write a program to print salary of Employee and also print name of employee</h1>";

         $salary=array(
             array("Vikash",50000),
             array("Manu",80000),
             array("Ankit",200000),
             array("Ravi",50000),
             array("Samkesh",150000),
             array("Abhikesh",200000),
         );
    ?>
        <table>
              <?php
               echo "<h2> Name   Salary</h2>";
                 for($i = 0; $i < count( $salary ); $i++){
                    for ($j = 0; $j < count($salary); $j++){
                       echo "<tr>". $salary[$i][$j]."&nbsp;&nbsp;&nbsp;&nbsp;<td></td> <td></td></tr>";
                    }
                    echo "<br>";
                }
              ?>
            
        </table>
        <?php
        //  <!-- for($i = 0; $i < count( $salary ); $i++){
        //      for ($j = 0; $j < count($salary); $j++){
        //         echo $salary[$i][$j]." ";
        //      }
        //      echo "<br>";
        //  } -->
        
        //Q Write a program to Sum of two Multidimensional Arrays  ;

        echo "<h1> Q4 Write a program to Sum of two Multidimensional Arrays  </h1>";

        $num1 = array(
            array(75,86,89,100),
            array(56,63,85,100),
            array(16,60,85,100),
        );
        $num2 = array(
            array(75,86,89,100),
            array(56,63,85,100),
            array(16,60,85,100),
        );
        $num3 = array();

        for ($i=0; $i < count($num1); $i++) { 
            for ($j=0; $j < count($num2); $j++) { 
                $num3[$i][$j] = $num1[$i][$j] + $num2[$i][$j];

                echo $num3[$i][$j]." &nbsp;&nbsp;";
            }
            echo "<br>";
        }

        //Q5 Write a program to Minus of two Array  ;

        echo "<h1> Q5 Write a program to Minus of two Multidimensional Arrays</h1>";

        $num1 = array(
            array(75,86,89),
            array(56,63,85),
            array(56,60,85),
        );
        $num2 = array(
            array(25,76,59),
            array(46,33,35),
            array(36,40,25),
        );
        $num3 = array();

        for ($i=0; $i < count($num1); $i++) { 
            for ($j=0; $j < count($num2); $j++) { 
                $num3[$i][$j] = $num1[$i][$j] - $num2[$i][$j];

                echo $num3[$i][$j]." &nbsp;&nbsp;";
            }
            echo "<br>";
        }
        echo "<br>";echo "<br>";
    ?>

    <!-- style heading using javascript -->
    <script>
        document.getElementById("head").style.fontSize="50px";
        document.getElementById("head").style.color="red";
        document.getElementById("head").style.textDecoration="underline";
        document.getElementById("head").style.marginLeft="40%";;

    </script>
</body>
</html>
