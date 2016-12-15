//Index.php
<html>
<head>
<title>Welcome to Code Wizard
</title>
<style type="text/css">
.mybox{
   width:300px;
   height:30px;
}
.mybutton{
  width:90px;
  height:60px;
}
p{
    font-family:footlight mt light;
    color:white;
}
p.head{
    font-size:50px;
}
p.jeya{
  font-size:25px;
}
</style>
</head>
<body bgcolor=black>
<?php
session_start();
?>
<center>
<p class="head">Code Wizard</p>
<table width=750 cellspacing="7">
<form name="registration" method="post" action="register.php">
<tr>
<td width=375 align=center><p class="jeya"> Enter Name of Participant 1 :-</p></td>
<td width=375 align=center><p class="jeya"> Enter Name of Participant 2 :-</p></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td align=center><input type="text" class="mybox" name="name1"/></td>
<td align=center><input type="text" class="mybox" name="name2"/></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td width=375 align=center><p class="jeya">Enter Roll No of Participant 1 :-</p></td>
<td width=375 align=center><p class="jeya">Enter Roll No of Participant 2 :-</p></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td align=center><input type="text" class="mybox" name="rno1"></td>
<td align=center><input type="text" class="mybox" name="rno2"></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td width=375 align=center><p class="jeya"> Enter Class of Participant 1 :-</p></td>
<td width=375 align=center><p class="jeya"> Enter Class of Participant 2 :-</p></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td align=center><input type="text" class="mybox" name="class1"></td>
<td align=center><input type="text" class="mybox" name="class2"></td>
</tr>
<tr></tr><tr></tr><tr></tr>
</table>
<br>
<input type="submit"  name="submit" id="submit" value="Register">
</form>
</center>
</body>
</html>

