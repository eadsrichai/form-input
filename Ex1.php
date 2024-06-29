<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>
<body>
    <?php
        echo "My name is wuttiwong";
        echo "<br>";
        echo "2+3 <br>";
        echo  2+3;
        echo  "<br> 2 + 3 = ", 2 + 3;
        echo  "<br>ฉันอายุ ", (2567-2516)  ," ปี<br>";
        $number1 = 100;
        $number2 = 20;
    ?>
    <table border='1'>
        <tr>
            <td>Number1</td><td>ดำเนินการ</td><td>Number2</td><td></td><td></td>
        </tr>
        <tr>
            <td><?php echo $number1 ?></td><td>+</td><td>20</td><td>=</td><td><?php echo 10+20 ?></td>
        </tr>
    </table>


</body>
</html>