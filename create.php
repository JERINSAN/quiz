<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        body{
            
        }

        .img{
            position: relative;
            max-height: 190px;
            max-width: 120px;
            border-radius: 5px;
            min-height: 75px;
            min-width: 75px;
            top:5px ;
        }
        .di{
            position: relative;
            top: 40px;
            max-width:600px;

        }
        .dh2{
            position: relative;
            max-height: 250px;
            border: 0;
        }
      
        .hea{
            font-size: 2.5vw;
        }
        .hea1{
            font-size: 2.1vw;
        }
        .hea2{
            font-size: 1.4vw;
        }
        .reg{
           
            max-width:700px;
        }
        .colo{
            background-color: #20b2aa;
        }
        .bu{
            border: none;
            width: 100%;
            height: 40px;
            border-radius: 10px;
            font-weight: bold;
        
        }
        .bu:hover{
            background-color: #24beb7;
        }
        .bu:focus{
            box-shadow: 1px 1px 5px 5px #76ccee;
        }

        .di11{
            position: absolute;
            top: 40%;
            left: 30%;
            max-width:600px;

        }
        .b{
            width: 170px;
            position: relative;
            top:40px;
        }
        .ex{
            display: grid;
            justify-content: center;
        }
        .bu1{
           
            width: 70%;
            border: none;
            height: 70%;
            border-radius: 10px;
            font-weight: bold;
            
        }
        .spa{
            font-size: 25px;
        }
    </style>
</head>
<body>
<!-- Header Start -->
<div class="container-fluid colo ">
        <div class="container-fluid dh2">
        <div class="card colo dh2 ">
            <div class="row no-gutters  ">
                <div class="col-2">
                  <div class="img bg-light py-2"><img src="aac1.png" alt="logo" class="card-img img"></div> 
                </div>
                <div class="col-9">
                  <div class="card-body "> <center><h4 class="text-light my-4 hea" >ARUL ANANDAR COLLEGE (Autonomous)<br>Karumathur - 625 514 </h4></center></div>
                </div>
                <div class="col-1">
                  
                   
                </div>
  
            </div>
        </div>
    </div>
         
    </div>


    <div class="container-fluid  shadow-sm bg-light">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">    
        <h3 class="my-3 hea1"> C<small>AREER GUIDANCE AND  PLACEMENT CELL </small></h3>
        </div>
        <div class="col-2">
        <button class="bu1 m-2 hea2 " onclick="window.open('https://coe.aactni.edu.in','_self')" ><b>Exit</b></button>
        </div>w
    </div>
    </div>
<!-- Header End -->

<!-- Form Start -->

<form action="crun.php" method="post">
<div class="container shadow rounded my-4 pb-2">

    <center><h1 class="text-secondary"> Quiz Questions Editing</h1></center>
        
    <?php
        $num=$_POST['nq'];
        $sma=$_POST['sma'];
        $ay=$_POST['ay'];
        $ti=$_POST['ti'];
        $qname=$ti.$ay;
        $count=0;
        
        include 'conn.php';
        $con=con();
        $sql="UPDATE `status` SET `nq`='$num',`sm`='$sma',`qname`='$qname' WHERE id='jj'";
        $con->query($sql);
        while($count<$num)
        {
            $count=$count+1;
            echo '<div class="row">
            <div class="col-12 my-3">
               '.$count.'. <input type="text" class="form-control" name="q'.$count.'" value="">
            </div>
            <div class="col-6">
                a. <input type="text" class="form-control" name="a'.$count.'" value="">
            </div>
            <div class="col-6">
                b. <input type="text" class="form-control" name="b'.$count.'" value="">
            </div>
            <div class="col-6">
                c. <input type="text" class="form-control" name="c'.$count.'" value="">
            </div>
            <div class="col-6">
                d. <input type="text" class="form-control" name="d'.$count.'" value="">
            </div>
            <div class="col-6">
                Answer:<select name="ans'.$count.'" class="form-control mb-2" >
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                </select>
    
            </div>
    
        </div>';
        }

    ?>
    <input type="text" name="qname" value="<?php echo "$qname" ?>" hidden>
    
        <button class="form-control my-4 colo text-light"> Save</button>

</div>
</form>
<!-- Form End -->

</body>
</html>