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
    // echo $xmlDoc->saveXML();	//show
    $rows   = $xmlDoc->getElementsByTagName( 'Row');
    // r loop
    $row    = 0; //count row for debug only
    foreach ($rows as $temp) { 
		echo "<br><br>Row:".$row."</>";		//check การวิ่ง ของ loop นอก
        if($row==0) { 
            $row++; continue; // ทำให้ข้ามชื่อ ฟิลด์ไป(Row0) คือให้เริ่มเก็บข้อมูลแถว 1
        }
        $col = 1; 	//count col for debug only
        $cells = $temp->getElementsByTagName('Cell'); 
		foreach( $cells as $cell )  { 
			echo "<br><br>Row: ".$row. ", Col: ".$col."</>";  //check การวิ่ง ของ loop ใน
            if($col==1) $data1 = (string)$cell->nodeValue; 
            if($col==2) $data2 = (string)$cell->nodeValue; 
            if($col==3) $data3 = (string)$cell->nodeValue; 
			if($col==4) $data4 = (string)$cell->nodeValue; 
			if($col==5) $data5 = (string)$cell->nodeValue; 
			if($col==6) $data6 = (string)$cell->nodeValue; 
			if($col==7) $data7 = (string)$cell->nodeValue; 
			if($col==8) $data8 = (string)$cell->nodeValue; 
			if($col==9) $data9 = (string)$cell->nodeValue; 
			if($col==10) $data10 = $cell->nodeValue; 
			if($col==11) $data11 = (string)$cell->nodeValue; 
			if($col==12) $data12 = (string)$cell->nodeValue; 
			if($col==13) $data13 = (string)$cell->nodeValue; 
			if($col==14) $data14 = (string)$cell->nodeValue; 
			if($col==15) $data15 = (string)$cell->nodeValue; 
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
		$sql = " INSERT INTO wi_service (";		
		$sql .= " service_auto, ";		
		$sql .= " cpe_mac, ";
		$sql .= " service_id, ";
		$sql .= " location_id, ";		
		$sql .= " bs_id, ";		
		$sql .= " service_id2, ";		
		$sql .= " center, ";	
		$sql .= " cpe_type, ";	
		$sql .= " service_name, ";		
		$sql .= " promotion_name, ";		
		$sql .= " promotion_price, ";	
		$sql .= " service_lat, ";		
		$sql .= " service_long, ";		
		$sql .= " contact, ";		
		$sql .= " service_active, ";		
		$sql .= " service_ect";	
		$sql .= " ) VALUES ( ";		
		$sql .= " '$row', ";		
		$sql .= " '$data1', ";		
		$sql .= " '$data2', ";		
		$sql .= " '$data3', ";		
		$sql .= " '$data4', ";	
		$sql .= " '$data5', ";	
		$sql .= " '$data6', ";	
		$sql .= " '$data7', ";	
		$sql .= " '$data8', ";	
		$sql .= " '$data9', ";	
		$sql .= " '$data10',";	
		$sql .= " '$data11',";
		$sql .= " '$data12',";
		$sql .= " '$data13',";
		$sql .= " '$data14',";
		$sql .= " '$data15' ";	
		$sql .= " ) ";		

		$db->query($sql); 
		$row++;
	}
?>

</body>
</html>



