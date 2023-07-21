<html>
<head>
	<title>รับข้อมูลฟอร์ม เงื่อนไข คำนวณ</title>
</head>
<body>
<h4>#หน้ารับข้อมูลฟอร์ม เงื่อนไข คำนวณ</h4>
<?php
	$rnum1 = $_POST["num1"];
	$rnum2 = $_POST["num2"];
	$rselcal = $_POST["selcal"];
	if ($rselcal==1) {
		$cal = $rnum1 + $rnum2;
		$typecal = "บวก";
	}else if ($rselcal==2) {
		$cal = $rnum1 - $rnum2;
		$typecal = "ลบ";
	}else if ($rselcal==3) {
		$cal = $rnum1 * $rnum2;
		$typecal = "คูณ";
	}else if ($rselcal==4) {
		$cal = $rnum1 / $rnum2;
		$typecal = "หาร";
	}else {
		$cal = $rnum1 ** $rnum2;
		$typecal = "ยกกำลัง";
	}
	echo "ตัวเลขที่ 1 คือ ".$rnum1."<br>";
	echo "ตัวเลขที่ 2 คือ ".$rnum2."<br>";
	echo "ผลการคำนวณ ".$typecal." เท่ากับ ".$cal;
?>
</body>
</html>