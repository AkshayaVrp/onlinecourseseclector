<html>
<head>
<title>Quiz
</title>
<style type="text/css">
p{
    font-family:footlight mt light;
    color:white;
}
p.jeya{
  font-size:25px;
}
</style>
</head>
<body bgcolor="black">
<?php
session_start();
//require "dbconnect.php";
$connection=mysqli_connect('localhost','root','','quiz');
$database=mysqli_select_db($connection,'quiz');
if(isset($_SESSION['r1']))
{
$rno=$_SESSION['r1'];
$_SESSION['r1']=$rno;
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
         break;
    }
    $i++;
}
if($qid==0)
{
      $w=mysqli_query($connection,"select marks from participant where rno1='$rno';");
      $ww=mysqli_fetch_assoc($w);
      $m=$ww['marks']; ?>
     <p class="jeya">
     <?php echo 'Your score is '; ?>
     <?php echo $m; ?></p><?php
     session_write_close();    
 }
else
{
$que=mysqli_query($connection,"select * from questions where qid='$qid';");
$question=mysqli_fetch_assoc($que);
?>
<center>
<br><br><br><br><br><br><br>
<form method="post" action="evaluate.php">
<table width=500 cellspacing=3>
<tr>
<td colspan=2 align="center">
<p class="jeya"><?php echo $question['quest'];?></p></td></tr>
<tr>
<td width=250><p class="jeya"><input type="radio" name="ans" value="a"/><?php echo $question['a'];?></p></td>
<td width=250><p class="jeya"><input type="radio" name="ans" value="b"/><?php echo $question['b'];?></p></td>
</tr>
<tr>
<td width=250><p class="jeya"><input type="radio" name="ans" value="c"/><?php echo $question['c'];?></p></td>
<td width=250><p class="jeya"><input type="radio" name="ans" value="d"/><?php echo $question['d'];?></p></td>
</tr>
<tr><td colspan=2 align="center"><input type="submit" value="Next"></td></tr>
</table>
</form>
<?php
}
}
else
{
   header("Location : index.php");
}
?>
</center>
</body>
</html>