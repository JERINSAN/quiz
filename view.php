<?php
if(!isset($_POST['ac']))
{
    die("Wrong Entry...");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
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
        .hea3{
            font-size: 1.2vw;
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
    <form action="qedit.php" id="f1" method="post">
        <input type="text" name="ac" value="admin"  hidden >
    </form>
    <form action="set.php" id="f3" method="post">
        <input type="text" name="ac" value="admin"  hidden >
    </form>
<div class="container-fluid colo ">
        <div class="container-fluid dh2">
        <div class="card colo dh2 ">
            <div class="row no-gutters  ">
                <div class="col-2">
                  <div class="img bg-light py-2"><img src="aac1.png" alt="logo" class="card-img img"></div> 
                </div>
                <div class="col-8">
                  <div class="card-body "> <center><h4 class="text-light my-4 hea" >ARUL ANANDAR COLLEGE (Autonomous)<br>Karumathur - 625 514 </h4></center></div>
                </div>
                <div class="col-1">
                  
                <b><input type="button" class="nav-link  text-light mt-5 hea3" value="Quiz Setup" onclick="fun3()">  </b>
                
                </div>
                <div class="col-1">
                  
                <b><input type="button" class="nav-link  text-light mt-5 hea3" value="Edit" onclick="fun2()">  </b>
                
                </div>
  
            </div>
        </div>
    </div>
         
    </div>

    <div class="container-fluid  shadow-sm bg-light">
    <div class="row">
        <div class="col-5"></div>
        <div class="col-5">    
        <h3 class="my-3 hea1"> Q<small>UIZ MARKLIST &nbsp;&nbsp;&nbsp;&nbsp;</small> </h3>
        </div>
        <div class="col-2">
        <button class="bu1 m-2 hea2 " onclick="window.open('https://coe.aactni.edu.in','_self')" ><b>Exit</b></button>
        </div>
    </div>
    </div>
<!-- Header End -->
<div class="row g-0">
    <div class="col-2 border-end bg-light p-2">
       <table class="table ">
        <tr>
            <th class="rounded "><input type="button" class="nav-link  text-dark mt-3 " value="Quiz Setup" onclick="fun3()"></th>
        </tr>
        <tr>
            <th class="rounded"><input type="button" class="nav-link  text-dark mt-3" value="Edit" onclick="fun2()"></th>
        </tr>
        <tr>
            <th class="rounded"><input type="button" class="nav-link  text-dark mt-3" value="View" onclick="fun2()"></th>
        </tr>
        </table>
        

    </div>
    <div class="col-10 table-responsive">
    <table class="table">
<tr>
    <th>
        Sno
    </th>
    <th>
        Roll no
    </th>
    <th>
        Total
    </th>
    <th>
        Answered
    </th>
    <th>
        Unanswered
    </th>
    <th>
        Correct Answers 
    </th>
    <th>
        Wrong Answers
    </th>
    <th>
        Score
    </th>
    
</tr>
<?php
include 'conn.php';
$con=con();
$sql="select * from mark";
$res=$con->query($sql);
$count=0;
while ($data=$res->fetch_assoc())
{
    $count=$count+1;
   
    echo'<tr>
    
    <td>'.$count.'</td>
    <td>'.$data["roll"].'</td>
    <td>'.$data["total"].'</td>
    <td>'.$data["ans"].'</td>
    <td>'.$data["unans"].'</td>
    <td>'.$data["corr"].'</td>
    <td>'.$data["wrong"].'</td>
    <td>'.$data["sc"].'</td>


    <tr>';

}
?>
<script>
    function fun2()
    {
        
        document.getElementById('f1').submit();
    }

    function fun3()
    {
        
        document.getElementById('f3').submit();
    }
</script>

</table>
    </div>
</div> 


</body>
</html>