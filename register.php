
<?php
//Register.php
session_start();
//require_once __DIR__ . 
 $connection=mysqli_connect('localhost','root','','quiz');
$database=mysqli_select_db($connection,'quiz');
if(isset($_SESSION['r1']))
      header("Location: quiz.php");
if(isset($_POST['submit']))
{
    $n1=$_POST['name1'];
    $r1=$_POST['rno1'];
    $c1=$_POST['class1'];
    $n2=$_POST['name2'];
    $r2=$_POST['rno2'];
    $c2=$_POST['class2'];
    if(empty($n1)||empty($r1)||empty($c1))
    {
         header("Location: index.php"); 
    }
    else if(!empty($r2)||!empty($n2)||!empty($c2))
    {
       if(empty($n1)||empty($r1)||empty($c1))
      {
           header("Location: index.php");     
       }    
    }
    else{
     $_SESSION['r1']=$r1;           
     $count=0;
    if($ro=mysqli_query($connection,"select * from participants where rno1='$r1';")) 
      $count=mysqli_num_rows($ro);
    if($count==0)
    {
       $rr=$r=mysqli_query($connection,"select qid from questions order by rand() limit 5");
       $no=0;
       while($q=mysqli_fetch_array($r))
       {
            $qa[$no++]=$q['qid'];   
        }
        $qa=implode(",",$qa);
mysqli_query($connection,"INSERT INTO participant "."(rno1,name1,class1,rno2,name2,class2,marks,question)  "."    VALUES '$r1','$n1','$c1','$r2','$n2','$c2',0,'$qa')");
       header("Location: quiz.php");
    }
    else
    {
         echo "Need to contact administrator";
     }
  }
}
?>









