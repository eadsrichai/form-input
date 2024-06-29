<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <title>การคำนวณ</title>
</head>
<body>
    <div class="container">
        <form  action="Ex3-3.php" method="GET">
            <div class="row mt-3 p-1">
                <div class="col-1">
                    <label>Number1<label>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" name="number1" value="0"/>
                </div>
            </div>
            <div class="row p-1">
                <div class="col-1">
                    <label>Number2<label>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" name="number2" value="0"/>
                </div>
            </div>
            <div class="row p-1">
                <div class="col-1">
                   
                </div>
                <div class="col-4">
                    <input type="submit" class="btn btn-primary" name="submit" value="บวก"/>
                    <input type="submit" class="btn btn-success" name="submit" value="ลบ"/>
                    <input type="submit" class="btn btn-warning" name="submit" value="คูณ"/>
                    <input type="submit" class="btn btn-secondary" name="submit" value="หาร"/>
                </div>
            </div>
        </form>

<?php
    if(isset($_GET['submit'])){
        $n1 = $_GET['number1'];
        $n2 = $_GET['number2'];
        $result = 0.00;
        if($_GET['submit'] == 'บวก'){       $result = $n1 + $n2;
        }else if($_GET['submit'] == 'ลบ'){  $result = $n1 - $n2;
        }else if($_GET['submit'] == 'คูณ'){  $result = $n1 * $n2;
        }else if($_GET['submit'] == 'หาร'){ $result = $n1 / $n2;
        }
       ?>
        <div class="row p-1">
                <div class="col-1">
                    <label>Result<label>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" 
                    name="resule" value="<?php echo $result; ?>"/>
                </div>
        </div>
<?php
    }
?>
</div>
</body>
</html>