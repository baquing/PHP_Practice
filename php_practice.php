<!--Hello world!

<h1>hello world</h1>

<style> 
    h1{
        color: blue;
    }

</style>

<script>
    alert("Hello World!")
</script> -->

<?php 
   // echo "Hello World!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- <h1> This is my first PHP page</h1>-->
    <?php
        //echo "Hello World!";
        
        //Variable 
        // $a = 5;
        // var_dump($a);

        // $a = "Malupiton";
        // var_dump($a);
        // var_dump(true);
        // var_dump(3.14);
        // var_dump([1, 2, 3]);
        // var_dump(null);

        //variable scope

        // $a = 5;
        // //echo $a;       
        
        // function test()
        // {
        //      static $a = 6;
        //      echo $a;
        //      echo "<br>";
        //      $a++;
        // }

        // // test();
        // // test();
        // test();
        // test();
        // //echo $a;

        // echo & Print

        // echo("Hello <br>"), ("malupiton <br>") ;
        // echo"Bossing <br>";
        // print "Hello Boss!"

    // data types

        // $a = ("malupiton");//string
        // $b = 1; // int
        // $c = 3.14; // float
        // $d = True; // bool
        // $e = [1, 2, 3]; // array
        // $f = new stdClass(); //object
        // $g = null; //null
        // $h = fopen("php_practice.php", "r");

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);;
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        // PHP_string

        // $a = "green";
        // $name = "<h1 style= 'color:$a'> Joel Malupiton";

        // $name = "joel malupiton";
        // echo strlen($name), "<br>";
        // echo str_word_count($name), "<br>";
        // echo strpos($name, "malupiton"), "<br>";
        // echo strtoupper($name), "<br>";
        // echo strtolower($name), "<br>";
        // echo str_replace("malupiton", "bossing", $name), "<br>";
        // echo strrev($name), "<br>";
        // echo trim($name), "<br>";
        // echo print_r( explode("l", $name), "<br>");


    //Concatinate

        // $x = "Hello";
        // $y = "World!";
        // echo $x ."  ". $y."<br>";
        // echo "$x $y <br>";
        // echo '$x $y <br>';  

    //Slicing
        // $x = "Hello";
        // echo substr($x, 1, 4), "<br>";
        // echo substr($x, 1), "<br>";
        // echo substr($x, -1, 2), "<br>";

        // Escape Characters
        // $a = "sample";
        // $x = "John"\"joel"\"Malupiton";
        // echo $x;

     //Numbers
        // $a = -1;//int
        // $b = 1.0;//float
        // $c = "5";//String

        // echo PHP_INT_MIN, "<br>";
        // echo PHP_INT_MAX, "<br>";
        // echo PHP_INT_SIZE, "<br>";
        // echo is_int($c);

        // echo PHP_FLOAT_MIN, ",<br>";
        // echo PHP_FLOAT_MAX, ",<br>";
        // echo PHP_FLOAT_DIG, ",<br>";
        // echo PHP_FLOAT_EPSILON, ",<br>";
        // ECHO is_float($b), "<br>";
        // echo is_numeric($c), "<br>";
 
    //PHP Casting - String

        // $a = ("malupiton");//string
        // $b = 1; // int
        // $c = 3.14; // float
        // $d = True; // bool
        // $e = [1, 2, 3]; // array
        // $f = new stdClass(); //object
        // $g = null; //null
        // $h = fopen("php_practice.php", "r");

        //  $a = (string)$a;
        //  $b = (string)$b;
        //  $d = (string)$c;
        //  $e = (string)$d;
        //  $e = $e;
        //  $f = $f;
        //  $g = (string)$g;
        //  $h = (string)$h;

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

     //Casting - integer

        // $a = ("malupiton");//string
        // $b = 1; // int
        // $c = 3.14; // float
        // $d = True; // bool
        // $e = [1, 2, 3]; // array
        // $f = new stdClass(); //object
        // $g = null; //null
        // $h = fopen("php_practice.php", "r");

        // $a = (int)$a;
        // $b = (int)$b;
        // $c = (int)$c;
        // $d = (int)$d;
        // $e = (int)$e;
        // $f = (int)$f;
        // $g = (int)$g;
        // $h = (int)$h;


        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        //Casting - Float

        // $a = ("malupiton");//string
        // $b = 1; // int
        // $c = 3.14; // float
        // $d = True; // bool
        // $e = [1, 2, 3]; // array
        // $f = new stdClass(); //object
        // $g = null; //null
        // $h = fopen("php_practice.php", "r");

        // $a = (float)$a;
        // $b = (float)$b;
        // $c = (float)$c;
        // $d = (float)$d;
        // $e = (float)$e;
        // $f = (float)$f;
        // $g = (float)$g;
        // $h = (float)$h;


        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

    // Casting - Boolean
        // $a = ("malupiton");//string
        // $b = 1; // int
        // $c = 3.14; // float
        // $d = True; // bool
        // $e = [1, 2, 3]; // array
        // $f = new stdClass(); //object
        // $g = null; //null
        // $h = fopen("php_practice.php", "r");

        // $a = (bool)$a;
        // $b = (bool)$b;
        // $c = (bool)$c;
        // $d = (bool)$d;
        // $e = (bool)$e;
        // $f = (bool)$f;
        // $g = (bool)$g;
        // $h = (bool)$h;


        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

    // Casting - Array

        // $a = ("malupiton");//string
        // $b = 1; // int
        // $c = 3.14; // float
        // $d = True; // bool
        // $e = [1, 2, 3]; // array
        // $f = new stdClass(); //object
        // $g = null; //null
        // $h = fopen("php_practice.php", "r");

        // $a = (array)$a;
        // $b = (array)$b;
        // $c = (array)$c;
        // $d = (array)$d;
        // $e = (array)$e;
        // $f = (array)$f;
        // $g = (array)$g;
        // $h = (array)$h;


        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

    // Casting - Null

        // $a = ("malupiton");//string
        // $b = 1; // int
        // $c = 3.14; // float
        // $d = True; // bool
        // $e = [1, 2, 3]; // array
        // $f = new stdClass(); //object
        // $g = null; //null
        // $h = fopen("php_practice.php", "r");

        // $a = (unset)$a;
        // $b = (unset)$b;
        // $c = (unset)$c;
        // $d = (unset)$d;
        // $e = (unset)$e;
        // $f = (unset)$f;
        // $g = (unset)$g;
        // $h = (unset)$h;


        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

    //Php Math 

        // $pi = pi();
        // echo $pi, "<br>";

        // $minNumber = min(300, 80, 4, 98, 3);
        // $maxNumber = min(300, 80, 4, 98, 3);

        // echo $minNumber, "<br>";
        // echo $maxNumber, "<br>";

        // $num = -5;
        // echo abs($num), "<br>";

        // $sqrt = sqrt(9);
        // echo $sqrt, "<br>";

        // $rounded = round(3.49, 1);
        // echo $rounded, "<br>";

        // $rand = round(3.49, 1);
        // echo $rand, "<br>";

        // echo PHP_INT_MAX, "<br>";
        // echo PHP_INT_MIN, "<br>";

        // echo $rand(5, 30), "<br>";


    //Php Constant

        // defne("GREETING", 39);
        // echo GREETING, "<br>";

        // $x = 5; 

        // function test(){
        //     echo GREETING;
        // }

        // test();


    //Php operators
    // //arithmitic

    // //addition + sum
    // echo 6 + 9 + 7, "<br>";

    // //subtract - difference
    // echo 7 - 3 ,"<br>";
    // //+
    // echo 98 - 8 + 2, "<br>";// pemdas

    // //Multiplication * Product
    // //+
    // echo 6 * 9 + 7, "<br>";

    // //division / quotient
    // //+
    // echo 90 / 2 + 95, "<br>";

    // //modulus % reminder
    // echo  5 % 3, "<br>";

    // //exponent **
    // echo 6**2, "<br>";

    // //assigment 
    // $x = 5;
    // $x += 10;
    // echo $x, "<br>";
    
    //comparison
    // //==
    // var_dump(6==7, "<br>");
    // // !=
    // var_dump(100 != 99, "<br>");
    // //!==
    // var_dump(99 !== 100, "<br>");
    // //>
    // //=>
    // var_dump(6>=9, "<br>");
    // //<
    // //=<
    // var_dump(6<=9, "<br>");
    // //<=>
    // echo 0 <=> 1, "<br>";
     
    //increment ++
        // $x = 5;
        // //PRE - increment
        // echo ++$x, "<br>";
        // $y = 5;
        // //POST - increment
        // echo $y++, "<br>";
        // //decrement --
        //  $x = 5;
        // //PRE - decrement
        // echo --$x, "<br>";
        // $y = 5;
        // //POST - decrement
        // echo $y--, "<br>";

    //Logical

    // // and &&
    // var_dump(true and true);// true
    // echo "<br>";
    // var_dump(6 == 6 and 6 > 9); //false
    // echo "<br>";
    
    // // Or || 
    // var_dump(false or false);// false
    // echo "<br>";
    //  var_dump(6 == 6 || 6 > 9); //true
    // echo "<br>";

    // //xor 
    // var_dump(true xor true);// true
    // echo "<br>";
    // var_dump(6 == 6 xor 6 > 9); //true
    // echo "<br>";

    // //!
    // var_dump(!true);
    // echo "<br>";
    // var_dump(!(6 == 6)); //true
    // echo "<br>";

    //string operator
    echo "hello" . "world!", "<br>";
    $x ="hello";
    $x .= "world";
    echo $x;









    ?>
</body>
</html>


