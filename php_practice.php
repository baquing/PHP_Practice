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

        $name = "joel malupiton";
        echo strlen($name), "<br>";
        echo str_word_count($name), "<br>";
        echo strpos($name, "malupiton"), "<br>";
        echo strtoupper($name), "<br>";
        echo strtolower($name), "<br>";
        echo str_replace("malupiton", "bossing", $name), "<br>";
        echo strrev($name), "<br>";
        echo trim($name), "<br>";
        echo print_r( explode("l", $name), "<br>");
        

    ?>
</body>
</html>



