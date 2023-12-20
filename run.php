<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        .prog{
            margin: auto;
            width: 50%;
            background-color:#D9D9D9;
            border-radius: 10px;
            width: 90%;
            
        }
        .load{
            height: 100%;
            width: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            background: #9BF9CC;
            color: #000;
            font-family: Inter;
            font-size: 27px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            letter-spacing: -0.544px;
        }
        .main{
            margin-top: 10%;
            border-radius: 32px;
            background: #FEFAFA;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }
        .hed{
            color: #F3BF37;
            font-family: Inter;
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            letter-spacing: -0.68px;
        }
        .dl{
            text-align: center;
            color: #000;
            font-family: Inter;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            letter-spacing: -0.544px;
        }
        .bt{
            font-family: Inter;
            background-color: #F3BF37;
        }
        
    </style>
</head>
<body>
   <?php
    
  if(isset($_POST['uname']))
   {
    $cha="qo";
    $count=0;
    include 'conn.php';
    $con=con();
    $sql1="select * from status";
    $res1=$con->query($sql1);
    $data1=$res1->fetch_assoc();
    $sql="select * from ques";
    $res=$con->query($sql);
    $correct=0;
    $non=0;
    while($data=$res->fetch_assoc())
    {
        $count=$count+1;
        $ans=$_POST['qo'.$count];
        if($ans==$data['ans'])
        {
            $correct=$correct+1;
        }
        else if($ans=="404")
        {
            $non=$non+1;
        }

    }
    $ad=$count-$non;
    $wr=$count-$correct-$non;
    $uname=$_POST['uname'];
    $sc=$data1['sm']*$correct;
    $qname=$data1['qname'];
    $sql1="INSERT INTO mark VALUES ('$uname','$count','$ad','$non','$correct','$wr','$sc','$qname')";
    $con->query($sql1);
    echo'<div class="main p-3 container"><br>
    <center><span class="hed" id="hed">LOADING...</span></center>
<div class="prog mt-5">
    <div class="load" id="pro">
        
        80%
    
    </div>

</div>
<div class="row">
    <div class="col-6 dl mt-5">Total Marks &#8594;<span id="tm"></span > </div>
    <div class="col-6 dl mt-5">Your Mark &#8594;<span id="ym"></span> </div>
</div>
<div class="row">
<div class="col-8"></div>
<div class="col-4"><b><input type="button" value="HOME" class="btn bt ms-left text-dark m-4" onclick="jj()"></b></div>
</div>
</div>';
    }

   ?> 
   <script>
    function jj()
    {
        window.open('https://aactni.edu.in','_self');
    }
    let j=0
            setInterval(function jj() {
               if(j<100)
               {
                j++;
                document.getElementById('pro').innerHTML=j+"%";
                document.getElementById('pro').style.width=j+"%";
                
               } 
               else
               {
                document.getElementById('tm').innerHTML="<?php echo $count*$data1['sm'];?>";
                document.getElementById('ym').innerHTML="<?php echo $sc;?>";
                document.getElementById('hed').innerHTML="<?php session_start(); echo $_SESSION['uname']; session_unset();?>";
                
               }
            },20);
   </script>
</body>
</html>