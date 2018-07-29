<!-- Basic Interface List -->
<?php
  function popup( $text, $popup )
  {
 ?>
  <a href="javascript:void(0);" onmouseover="return overlib('<?php echo($popup); ?>');" onmouseout="return nd();"><?php echo($text); ?></a>
 <?php
  }
 ?>
   
  <script type="text/javascript" src="../overlib/overlib.js"><!-- overLIB (c) Erik Bosrup -->
  </script>

<?php

require('../routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = false;

if ($API->connect('192.168.77.1', 'admin', 'totwinet')) {      // Change this as necessery

$ARRAY = $API->comm("/interface/getall");



echo "<table width=100% border=1>";

echo "<tr><td align=left size=3>Id</td><td size=3>name</td><td size=3>type</td><td size=3>dynamic</td><td size=3>disabled</td><td>mtu</td><td>l2mtu</td><td>comment</td></tr>";

echo "<tr><td align=left>";


for ($i=0; $i<20; $i++)

	{
$regtable = $ARRAY[$i];
	
	echo "<font color=#04B404 size=3>" . $regtable['.id'] . "</font><br>";
		}
		
echo "</td><td>";


for ($i=0; $i<250; $i++)

	{
$regtable = $ARRAY[$i];
	
	echo "<font color=#04B404 size=3>" . $regtable['name'] . "</font><br>";
		}
		
echo "</td><td>";

for ($i=0; $i<250; $i++)

	{
$regtable = $ARRAY[$i];
	
	echo "<font color=#04B404 size=3>" . $regtable['type'] . "</font><br>";
		}
		
echo "</td><td>";

for ($i=0; $i<250; $i++)

	{
$regtable = $ARRAY[$i];
	if ($regtable['dynamic']=="true")
         {
         echo "<font color=#04B404 size=3>" . $regtable['dynamic'] . "</font><br>";
         }else{
         echo "<font color=#FF0000 size=3>". $regtable['dynamic'] ."</font><br>";
         }

		}
		
echo "</td><td>";

for ($i=0; $i<250; $i++)

	{
$regtable = $ARRAY[$i];
		if ($regtable['disabled']=="true")
         {
         echo "<font color=#04B404 size=3>" . $regtable['disabled'] . "</font><br>";
         }else{
         echo "<font color=#FF0000 size=3>". $regtable['disabled'] ."</font><br>";
         }
		}
		
echo "</td><td>";

for ($i=0; $i<250; $i++)

	{
$regtable = $ARRAY[$i];
	
	echo "<font color=#000099 size=3>" . $regtable['mtu'] . "</font><br>";
		}
		
echo "</td><td>";

for ($i=0; $i<250; $i++)

	{
$regtable = $ARRAY[$i];
	
	echo "<font color=#04B404 size=3>" . $regtable['l2mtu'] . "</font><br>";
		}
		
echo "</td><td>";


echo "</table>";
echo "<br />Debug:";
echo "<br />";
print_r($ARRAY);
   $API->disconnect();

}

?>
