<html>
  <body>
   <form name='f1' method='get' action='seller.php'>
    name:<input type='text' name='t1'><br>
    contact no.:<input type='text' name='t2'><br>
    property type:<SELECT NAME='t3'>
                 <OPTION VALUE='appartment'>Appartment</OPTION>
                 <OPTION VALUE='villa'>villa</OPTION>
                 <OPTION VALUE='bunglow'>bunglow</OPTION>
                 </SELECT><br>
    bhk:<SELECT NAME='t4'>
                 <OPTION VALUE='1bhk'>1bhk</OPTION>
                 <OPTION VALUE='2bhk'>2bhk</OPTION>
                 <OPTION VALUE='3bhk'>3bhk</OPTION>
                 <OPTION VALUE='4bhk'>4bhk</OPTION>
                 </SELECT><br>
    city:<SELECT NAME='t5'>
                 <OPTION VALUE='vellore'>vellore</OPTION>
                 <OPTION VALUE='chennai'>chennai</OPTION>
                 <OPTION VALUE='bhopal'>bhopal</OPTION>
                 <OPTION VALUE='amravati'>amravati</OPTION>
                 </SELECT><br>
    locality:<input type='text' name='t6'><br>
    address:<textarea name='t7' rows='5' cols='40'></textarea><br>
    furnished:<input type='radio' name='t8' value='unfurnished'>unfurnished&nbsp;<input type='radio' name='t8' value='semi-furnished'>semi-furnished&nbsp;<input type='radio' name='t8' value='fully-furnished'>fully-furnished<br>
    detailed description:<textarea name='t9' rows='8' cols='50'></textarea><br> 
    Set Rent:<input type='text' name='t10'><br>
    Add photo-1:<input type='text' name='t11'><br>
    Add photo-2:<input type='text' name='t12'><br>
    Add photo-3:<input type='text' name='t13'><br>
    Add photo-4:<input type='text' name='t14'><br>
    Add photo-5:<input type='text' name='t15'><br>
    <input type='submit' name='b1' value='submit'>&nbsp;&nbsp;<input type='reset' name='b2' value='clear'>   
  </form>
  <?php
    if(count($_GET)>0)
    {
      $a=$_GET['t1'];
      $b=$_GET['t2'];
      $c=$_GET['t3'];
      $d=$_GET['t4'];
      $e=$_GET['t5'];
      $f=$_GET['t6'];
      $g=$_GET['t7'];
      $h=$_GET['t8'];
      $i=$_GET['t9'];
      $j=$_GET['t10'];
      $k=$_GET['t11'];
      $l=$_GET['t12'];
      $m=$_GET['t13'];
      $n=$_GET['t14'];
      $o=$_GET['t15'];
        $result=mysql_connect("localhost","root","");
           if($result)
           {
              $r=mysql_select_db("project",$result);
              $qry="insert into seller(seller_username,Mobile_no,property_type,Type_bhk,Location,Locality,Address,Furnished,Text_Area,Rent,Seller_ph1,Seller_ph2,Seller_ph3,Seller_ph4,Seller_ph5) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')";
              $res=mysql_query($qry,$result);
              if($res)
              {
                  echo "data inserted!!!";
              }
              else
              {
                    echo "unsuccessful!!!".mysql_error($result);
              }
                           
           }
           else
             echo "alert('database alert!!')"; 
         }
  ?>
 </body>
</html>