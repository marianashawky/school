<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <center>
        <h1> school   </h1>
        </center>
    <form method="post">


        Student Name : <br/>
        <input type="text" value="<?php echo isset($_POST["txtname"])?$_POST["txtname"]:'' ?>" placeholder="Enter employee Name" required class="form-control" name="txtname"/>
        <br/>

       Select subject : <br/>

  <select class="form-select" aria-label="Default select example">
  <option selected>select subject</option>
  <option value="1">Math</option>
  <option value="2">English</option>
  <option value="3">Arabic</option>
  <option value="3">French</option>
  <option value="3">Since</option>

</select><br/>

        Count of subject : <br/>
        <input type="number" value="<?php echo isset($_POST["txtcount"])?$_POST["txtcount"]:'' ?>" placeholder="count of subject " required class="form-control" name="txtcount"/>
        <br/>

        Totaldegree : <br/>
        <input type="number" value="<?php echo isset($_POST["txtdegree"])?$_POST["txtdegree"]:'' ?>" placeholder="total degree of subject" required class="form-control" name="txtdegree"/>
        <br/>
      
        <input type="submit" value="Calculate" name="btncalc" class="btn btn-dark" />


        <?php

        if(isset($_POST["btncalc"]))
        {
            //declare variables 
                 $name; $totaldegree; $count; $percent;
                             //inputs
                 $name=$_POST["txtname"];
                 $count=$_POST["txtcount"];
                 $totaldegree=$_POST["txtdegree"];

            //process
                $percent=($count*100)/$totaldegree;
          //output
                echo "<div class='alert alert-danger m-3'> percent Value:$percent%</div>";


        }                


        ?>


    </form>
    </div>

</body>
</html>