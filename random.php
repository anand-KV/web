<html>
<body>
    <form method="post" action="">
    enter first number:<input type="text"  name="n1"><br>
    
    enter second number:<input type="text"  name="n2"><br>
    <input type="submit" value="submit" name="s">
</body>
</html>
<?php
  if(isset($_POST['s']))
  {
    $r1=$_POST['n1'];
    $r2=$_POST['n2'];
    echo"<br>";
    echo"the random numbers between",$r1,"and",$r2,"is:",rand($r1,$r2);
    echo"<br>";
  }
  ?>