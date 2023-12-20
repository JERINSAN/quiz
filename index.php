

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
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
    <title>Document</title>
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
        <h3 class="my-3 hea1"> C<small>AREER GUIDANCE AND  PLACEMENT CELL</small> </h3>
        </div>
        <div class="col-2">
        <button class="bu1 m-2 hea2 " onclick="window.open('https://coe.aactni.edu.in','_self')" ><b>Exit</b></button>
        </div>
    </div>
    </div>
<!-- Header End -->
<form action="view.php" method="post" id="f1">
    <input type="text" value="admin" name="ac" hidden>
</form>

<form action="main.php" method="post" id="form">
    <div class="container shadow reg rounded  my-4 p-4" id="up">
        <center><h3 class="text-secondary" >Login</h1></center>
        
            <div class="p-5">
                <label for="" class="mt-5 text-secondary"><b>Regiter No </b>[pls refer ID card]</label>
                <input type="text" name="uname" id="uname" class=" form-control" required id="uname" oninput="this.value=this.value.toUpperCase();fun5(this.value,'uname')"  maxlength="8">
           
                <label for="" class="mt-5 text-secondary"><b>Password</b></label>
                <input type="password" class=" form-control " required id="pass" name="pass">

                

             

               <b><input type="button" class="bu colo text-light mt-5" value="Login"  onclick="fun1()"></b>
            </div>
    </div>

</form>
<script>
function fun5(tex,idd)
        {
           
            tex=tex.replaceAll(" ","");
            document.getElementById(idd).value=tex;

        }
function fun1()
{
    var un=document.getElementById("uname").value;
    var ps=document.getElementById("pass").value;
    if(un=="ADMIN"&&ps=="aac123")
    {
        document.getElementById("f1").submit();
    }
    else{
        document.getElementById("form").submit();
    }
}
</script>

</body>
</html>