<html>
<p> I am A Good Boy</p>
</html>

<?php
$name=$_POST['name'];
$rname=$_POST['rname'];
$reason=$_POST['reason'];
$enroll=$_POST['enroll'];
$branch=$_POST['branch'];
$_district=$_POST['district'];
$rdistrict=$_POST['rdistrict'];
echo $name."<br>";
echo "Hello World <br>";

echo "<br><br>To <br> The $rname <br> Date:- 24 January, 2019 <br> $rdistrict <br><br>  Dear Sir, <br><br>I was unable to attain the college because 
I was having $reason. <br> So, therefore please forgive me for one day. <br><br> Thanking You <br> $name <br> $enroll <br> $branch <br> $_district";
?>
