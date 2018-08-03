<html>
<head>
<!-- <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ /> -->
<!-- <meta charset="UTF-8"> -->
<?php 
	require '../config.php';
	// $db->query();
	if ( $_FILES['file']['error'] ) { 
        die("upload error "); 
    } 
    // ======Get data from Excel(.xml)======================
    // $xmlDoc = DOMDocument::load($_FILES['file']['tmp_name'] ); //deprecated
   
    $xmlDoc = new DOMDocument();
    $xmlDoc->load($_FILES['file']['tmp_name']);
    // echo $doc->saveXML();	//show
    $rows   = $xmlDoc->getElementsByTagName( 'Row');
    // r loop
    $row    = 0; //count row
    foreach ($rows as $temp) { 
		echo "<br><br>Row:".$row."</>";		//check การวิ่ง ของ loop นอก
        if($row==0) { 
            $row++; continue; // ทำให้ข้ามชื่อ ฟิลด์ไป(Row0) คือให้เริ่มเก็บข้อมูลแถว 1
        }
        $col = 1; 	//count col
        $cells = $temp->getElementsByTagName('Cell'); 
		foreach( $cells as $cell )  { 
			echo "<br><br>Row: ".$row. ", Col: ".$col."</>";  //check การวิ่ง ของ loop ใน
            if($col==1) $data1 = $cell->nodeValue; 
            if($col==2) $data2 = $cell->nodeValue; 
            if($col==3) $data3 = $cell->nodeValue; 
			if($col==4) $data4 = $cell->nodeValue; 
			if($col==5) $data5 = $cell->nodeValue; 
			if($col==6) $data6 = $cell->nodeValue; 
			if($col==7) $data7 = $cell->nodeValue; 
			if($col==8) $data8 = $cell->nodeValue; 
			if($col==9) $data9 = $cell->nodeValue; 
			if($col==10) $data10 = $cell->nodeValue; 
			if($col==11) $data11 = $cell->nodeValue; 
			if($col==12) $data12 = $cell->nodeValue; 
			if($col==13) $data13 = $cell->nodeValue; 
			if($col==14) $data14 = $cell->nodeValue; 
			if($col==15) $data15 = $cell->nodeValue; 
			$col++;	
		}
		echo "<br>cpe_mac = ".$data1."</>"; //check 
		echo "<br>service_id = ".$data2."</>"; //check 
		echo "<br>location_id = ".$data3."</>"; //check 
		echo "<br>bs_id = ".$data4."</>"; //check
		echo "<br>service_id2 = ".$data5."</>"; //check 
		echo "<br>center = ".$data6."</>"; //check
		echo "<br>cpe_type = ".$data7."</>"; //check
		echo "<br>service_name = ".$data8."</>"; //check
		echo "<br>promotion_name = ".$data9."</>"; //check 
		echo "<br>promotion_price = ".$data10."</>"; //check 
		echo "<br>service_lat = ".$data11."</>"; //check
		echo "<br>service_long = ".$data12."</>"; //check 
		echo "<br>contact = ".$data13."</>"; //check
		echo "<br>service_active = ".$data14."</>"; //check 
		echo "<br>service_ect = ".$data15."</>"; //check 
		$row++;
	}
?>

</body>
</html>



