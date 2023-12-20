<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>

      
       
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
    <?php
    
    $count=0;
    include 'conn.php';
    $con=con();
    $sql="select * from ques";
    $res=$con->query($sql);
    $n=$res->num_rows;
    $data=$res->fetch_assoc();
    $qname="qname";


    while($n>$count)
    {
        $count=$count+1;
        $q="q".$count;
        $a="a".$count;
        $b="a".$count;
        $c="c".$count;
        $d="d".$count;
        $ans="ans".$count;
        
        $sql1="UPDATE `ques` SET `q`='$_POST[$q]',`a`='$_POST[$a]',`b`='$_POST[$b]',`c`='$_POST[$c]',`d`='$_POST[$d]',`ans`='$_POST[$ans]' WHERE sno=$count";
        $sql2="UPDATE `qbu` SET `q`='$_POST[$q]',`a`='$_POST[$a]',`b`='$_POST[$b]',`c`='$_POST[$c]',`d`='$_POST[$d]',`ans`='$_POST[$ans]' WHERE sno=$count AND qname='$data[$qname]'";
        
        $con->query($sql1);

    }
    echo'<div class=" container  di11 shadow-lg p-5  bg-body-tertiary rounded"  id="aler1">
    <center>  <h1 class="text-warning" id="aler">Successfully Saved </h1></center> 
    <div class="row my-2">

      <div class="col-4">  <b><input type="button" class="bu colo text-light b ms-auto" value="home" onclick="jj()" id="ab"></b></div>
       
       
    </div>
    </div>';

    ?>
    <script>
    function jj()
    {
        window.open('https://coe.aactni.edu.in','_self');
    }
   </script>
    
</body>
</html>