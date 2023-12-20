<?php 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            top: 45%;
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
        .ani{
            transition:2s;
        }
        
    </style>
    <title>Document</title>
</head>
<body>
     <?php   
         include 'conn.php';
         $con=con(); 
         $uname1=$_POST['uname'];
         $sql="select * from ques";
         $sql2="select * from status";
         $res2=$con->query($sql2);
         $data3=$res2->fetch_assoc();
         $qname=$data3['qname'];
         $sql1="select * from mark where roll='$uname1' AND qname='$qname'";
         $res=$con->query($sql);
         $res1=$con->query($sql1);
         $data1=$res1->fetch_assoc();
        
        if(0 != mysqli_num_rows($res1))
        {
            die('<div class="container p-5 shadow rounded my-5"><center><h2 class="text-danger ">Your  Already Atten the Quiz</h2></center>
            </div>');
        }
        // $data=$res->fetch_assoc();
     ?>
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
        <h3 class="my-3 hea1">C<small>AREER GUIDANCE AND  PLACEMENT CELL</small> </h3>
        </div>
        <div class="col-2">
        <button class="bu1 m-2 hea2 " onclick="window.open('https://coe.aactni.edu.in','_self')" ><b>Exit</b></button>
        </div>
    </div>
    </div>
<!-- Header End -->
<?php
if(isset($_POST['pass']))
{
$pass=$_POST['pass'];
$uname=$_POST['uname'];
session_start();
$_SESSION['uname']=$uname;

}
else{
    $pass=0;
}
if($pass!="pto123")
{
    die('<div class="container p-5 shadow rounded my-5"><center><h2 class="text-danger "> Password is Wrong</h2></center>
    </div>');
}
?>
<form action="run.php" method="post" id="form">
<!-- Question 1 Start-->
<input type="text" value="<?php echo"$uname" ?>" name="uname" hidden>
<?php
$count=0;
while($data=$res->fetch_assoc()){
    $count=$count+1;
echo'
<div class="container ani p-4 shadow rounded my-5" id="qd'.$count.'" hidden>

    <div class="row">
        <div class="col-12 m-3">
            <div class="row">
                <div class="col-10"><center><h3 class="text-secondary">Question</h3></center></div>
                <div class="col-2"><p id="timer'.$count.'" class="fs-3">00</p></div>
            </div>
        </div>
        <div class="col-12 m-3">
            <span class="fs-2">'.$data["sno"].'.</span> <span class="fs-3">'.$data["q"].'</span>
        </div>
        <div class="col-12 m-3 px-4" id="aj'.$count.'">
        <span class="fs-5">A.&nbsp;&nbsp;</span>'.$data["a"].'&nbsp;&nbsp;<span id="ai'.$count.'" class="fs-4"></span><input type="radio" class="form-check-input mt-3 border border-2  bg-secondary" name="qo'.$count.'" value="a" onclick="j(this.value,'.$count.')" id="a'.$count.'"> <span class="fs-5">
        </div>
        <div class="col-12 m-3 px-4" id="bj'.$count.'">
        <span class="fs-5">B.&nbsp;&nbsp;</span>'.$data["b"].'&nbsp;&nbsp;<span id="bi'.$count.'" class="fs-4"></span><input type="radio" class="form-check-input mt-3 border border-2  bg-secondary" name="qo'.$count.'" value="b" onclick="j(this.value,'.$count.')" id="b'.$count.'"> 
        </div>
        <div class="col-12 m-3 px-4" id="cj'.$count.'">
        <span class="fs-5">C.&nbsp;&nbsp;</span>'.$data["c"].'&nbsp;&nbsp;<span id="ci'.$count.'" class="fs-4"></span><input type="radio" class="form-check-input mt-3 border border-2  bg-secondary" name="qo'.$count.'" value="c" onclick="j(this.value,'.$count.')" id="c'.$count.'">
        </div>
        <div class="col-12 m-3 px-4" id="dj'.$count.'">
        <span class="fs-5">D.&nbsp;&nbsp;</span>'.$data["d"].'&nbsp;&nbsp;<span id="di'.$count.'" class="fs-4"></span><input type="radio" class="form-check-input mt-3 border border-2  bg-secondary" name="qo'.$count.'" value="d" onclick="j(this.value,'.$count.')" id="d'.$count.'">
        </div>
        <div class="col-12 m-3 px-4" hidden>
        <span class="fs-5">D.&nbsp;&nbsp;</span>&nbsp;&nbsp;<input type="radio" class="form-check-input mt-2" name="qo'.$count.'" value="404" checked=true>
        </div>
        <div class="col-12 m-3 px-4" hidden>
        <span class="fs-5">Ans.&nbsp;&nbsp;</span>&nbsp;&nbsp;<input type="text" class="form-check-input mt-2"  value="'.$data["ans"].'" checked=true id="ans'.$count.'">
        </div>
        <center> <span id="re'.$count.'" class="fs-5">  </span> </center>
        <div class="col-12 m-3 px-4">
            <input type="button" class="form-control mb-3 bg-secondary text-light b" name="qo1" value="Next" onclick="main()"> 
        </div>
    </div>
</div>';
}
?>

<!-- Question 1 End -->

<!--  Acknowledgement Start  -->

<div class=" container  di11 shadow-lg p-5  bg-body-tertiary rounded"  id="aler1" hidden>
        <center>  <h1 class="text-warning" id="aler">You Have Completed QUIZ</h1></center> 
        <div class="row my-2">

          <div class="col-4">  <b><input type="button" class="bu colo text-light b ms-auto" value="Ok" onclick="document.getElementById('form').submit();" id="ab"></b></div>
           
           
        </div>
   </div>

<!--  Acknowledgement End  -->


</form>
<script>
    
function j(tex,num)
{
    let ans=document.getElementById('ans'+num).value;
    if(tex==ans)
    {
        document.getElementById('a'+num).hidden=true;
        document.getElementById('b'+num).hidden=true;
        document.getElementById('c'+num).hidden=true;
        document.getElementById('d'+num).hidden=true;
        document.getElementById(tex+"j"+num).style.color="#0eff00";
        document.getElementById(tex+"j"+num).style.fontWeight="bold";
        document.getElementById(tex+"i"+num).innerHTML="&#10004;";
        document.getElementById("re"+num).innerHTML="correct";
        document.getElementById("re"+num).style.color="#0eff00";
    }
    else
    {
        document.getElementById('a'+num).hidden=true;
        document.getElementById('b'+num).hidden=true;
        document.getElementById('c'+num).hidden=true;
        document.getElementById('d'+num).hidden=true;
        document.getElementById(ans+"j"+num).style.color="#0eff00";
        document.getElementById(ans+"j"+num).style.fontWeight="bold";
        document.getElementById(ans+"i"+num).innerHTML="&#10004;";
        document.getElementById(tex+"j"+num).style.color="#f32013";
        document.getElementById(tex+"j"+num).style.fontWeight="bold";
        document.getElementById(tex+"i"+num).innerHTML="&#10060;";
        document.getElementById("re"+num).innerHTML="incorrect";
        document.getElementById("re"+num).style.color="#f32013";
    }
}

    document.getElementById('qd1').hidden=false;
    
const tim=10;
var tmer=tim,count=1;


setInterval(function jj(){
if(tmer>0)
{
tmer=tmer-1;
document.getElementById('timer'+count).innerHTML=tmer;
}
if(tmer<=0)
{
    main();
   
}
},1000);


function main()
{
    
    if(count<<?php echo $count; ?>){
    document.getElementById("qd"+count).hidden=true;
    
    let j=count+1;
    document.getElementById("qd"+j).hidden=false;
    }
    else{

        document.getElementById("qd"+count).hidden=true;
        document.getElementById('form').submit();
    }
    tmer=tim;
    count=count+1;
}

</script>

</body>
</html>