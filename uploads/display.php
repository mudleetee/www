<?php
/**
 * @author bent ole fosse
 * 
 */
#include "databaseconfig.php";

$con = mysqli_connect('localhost','root','123456','netwatch');
mysqli_set_charset($con,"utf8");


if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"netwatch");
#$sql="SELECT * FROM user WHERE id = '".$q."'";
#$sql="SELECT * FROM wi_service WHERE service_active = 'y' ORDER BY promotion_price DESC, promotion_name DESC";
$query="SELECT * FROM netwatch";
#$sql="SELECT * FROM wi_service WHERE service_active = 'y' ORDER BY service_id ASC, service_name ";
#$sql="SELECT * FROM wi_service ORDER BY service_id ASC, service_name ";
#$sql="SELECT * FROM wi_service WHERE location_id = '3471LC000' and service_active = 'y' ORDER BY service_id ASC, service_name ";
#$sql="SELECT * FROM wi_service";

$result = mysqli_query($con,$query);

/*
$num=mysql_numrows($result);

echo "<table width=800>";

echo "<tr><td align=left>Router</td><td>Time</td><td>Status</td></tr>";

echo "<tr><td align=left>";

	for ($i=0; $i<$num; $i++) 
	
		{
			if (mysql_result($result,$i,"status")=="1")
			{
			echo "<font color=#04B404>".mysql_result($result,$i,"name")."</font><br>";
			}else{
			echo "<font color=#FF0000>".mysql_result($result,$i,"name")."</font><br>";
			}

		}

echo "</td><td>";

	for ($i=0; $i<$num; $i++) 
	
		{
			if (mysql_result($result,$i,"status")=="1")
			{
			echo "<font color=#04B404>".mysql_result($result,$i,"time")."</font><br>";
			}else{
			echo "<font color=#FF0000>".mysql_result($result,$i,"time")."</font><br>";
			}

		}

echo "</td><td>";

	for ($i=0; $i<$num; $i++) 
	
		{
			if (mysql_result($result,$i,"status")=="1")
			{
			echo "<font color=#04B404>Up</font><br>";
			}else{
			echo "<font color=#FF0000>Down</font><br>";
			}

		}

echo "</td></tr>";

echo "<tr><td colspan=3><center>Hopefully this works ok...</center></td></tr>";
echo "</table>";

###################################
*/
echo "<table width=800 border='1'>
<tr>
<th align=left>Router</th>
<th>Time</th>
<th>Status</th>
</tr>";

#$y=1;
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr class='highlightrow'>";
  if ($row['status'] =='1'){
	echo "<td><font color=#04B404>" . $row['name'] . "</font></td>";
	echo "<td><font color=#04B404>" . $row['time'] . "</font></td>";
	echo "<td><font color=#04B404>" . 'UP' . "</font></td>";
  } else{
	echo "<td><font color=#FF0000>" . $row['name'] . "</font></td>";
	echo "<td><font color=#FF0000>" . $row['time'] . "</font></td>";
  	echo "<td><font color=#FF0000>" . 'Down' . "</font></td>";
  }
  echo "</tr>";
  #$y+=1;
}
echo "<tr><td colspan=3><center>Hopefully this works ok...</center></td></tr>";
echo "</table>";
mysqli_close($con);
?>
