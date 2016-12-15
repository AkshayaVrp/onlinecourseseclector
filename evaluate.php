

<?php
session_start();
//Evaluate.php
$rno=$_SESSION['r1'];
$_SESSION['r1']=$rno;
//require "dbconnect.php";
$connection=mysqli_connect('localhost','root','','quiz');
$database=mysqli_select_db($connection,'quiz');
if(isset($_POST['ans']))
{
$sans=$_POST['ans'];
$rr=mysqli_query($connection,"select question from participant where rno1='$rno';");
$r1=mysqli_fetch_assoc($rr);
$r=$r1['question'];
$q=explode(",",$r);
$qid=$i=0;
while($i<5)
{
    if($q[$i]!=0)
    {
        $qid=$q[$i];
        $q[$i]=0;
        break;
    }
    $i++;
}
$e=implode(",",$q);
mysqli_query($connection,"update participant set question='$e' where rno1='$rno';");
$que=mysqli_query($connection,"select * from questions where qid='$qid';");
$questions=mysqli_fetch_assoc($que);
$cans=$questions['ans'];
if($cans==$sans)
  mysqli_query($connection,"update participant set marks=marks+5 where rno1='$rno';");
}
header('Location: quiz.php');
?>
