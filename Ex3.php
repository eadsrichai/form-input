<?php
    echo pi();
    echo "<br>";
    echo(min(0, 150, 30, 20, -8, -200));
    echo "<br>";
    echo(max(0, 150, 30, 20, -8, -200));
    echo "<br>";

    echo(abs(-6.7));
    echo "<br>";
    echo(sqrt(64));
    echo "<br>";
    echo(round(0.60));
    echo "<br>";
    echo(round(0.49));
    echo "<br>";
    echo(rand());
    echo "<br>";
    echo(rand(10, 100));

    echo "<br>";
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;
    echo "<br>";

    const MYCAR = "Volvo";
    echo MYCAR;

    echo "<br>";

    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
      ]);
      echo cars[0];

      echo "<br>";

     define("GREETING1", "Welcome to W3Schools.com!");

      echo "<br>";

      function myTest() {
        echo GREETING1;
      }
      
      myTest();


?>