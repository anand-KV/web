<html>
 <center><h1>
  mar Athanasius College of engineering
  </h1></center>
     <body>
          <center><h1>Student Mark Entry</h1></center>
               <form name="xam" method="POST" align=center>
                name: <input type="text"/><br>
                 roll no: <input type="number"/><br>
                  course: <input type="text"/><br>
                
               <table border=2 style="color:rgb(100,98,130);"align=center>
                   <tr style="color:red">
                     <th>si.no</th>
                     <th>subject</th>
                     <th>mark</th>
                  
                   </tr>
                   <tr>
                      <td><input type="number" placeholder="si.no"name="s1"></td>
                      <td><input type="text" placeholder="subject"name="sub1"></td>
                      <td><input type="number" placeholder="mark"name="mar1"></td>
                   </tr>
                   <tr>
                      <td><input type="number" placeholder="si.no"name="s2"></td>
                      <td><input type="text" placeholder="subject"name="sub2"></td>
                      <td><input type="number" placeholder="mark"name="mar2"></td>
                   </tr>      
                   <tr>
                      <td><input type="number" placeholder="si.no"name="s3"></td>
                      <td><input type="text" placeholder="subject"name="sub3"></td>
                      <td><input type="number" placeholder="mark"name="mar3"></td>
                   </tr>
                   <tr>
                      <td><input type="number" placeholder="si.no"name="s4"></td>
                      <td><input type="text" placeholder="subject"name="sub4"></td>
                      <td><input type="number" placeholder="mark"name="mar4"></td>
                   </tr>
                   
               </table> 
              <center> <input type="submit" value="total" style="background:#ab0a00;" name="tot" /></center>
              <center> <input type="submit" value="clear"style="background:#069155;" name="clr"/></center>
            </form>   
<?php
   if(isset($_POST["tot"])) 
    {
 ?>
   <center><h3>Exam report</h3></center>
   <table border=2 align=center>
   <tr>
      <th>si.no</th>
      <th>subject</th>
      <th>mark</th>
      <th>result</th>
   </tr> 
   <?php
     $i=1;
     for($i=1;$i<=4;$i++)
     {
      $s="s".$i;
      $sub="sub".$i;
      $mar="mar".$i;
      if($_POST[$mar]>=50)
      {
       $result="passed";
       }
       else
       $result="failed";
    ?>
    <tr> 
       <td><?php $i;?></td>
       <td><?php $_POST[$sub];?></td> 
       <td><?php $_POST[$mar];?></td>   
       <td><?php $result;?></td>   
    </tr>
    <?php } ?>
    <?php
      }
      ?>
    </table>  
</html>
                 
