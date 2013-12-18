<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>Topcoder</title>

</head>
<body>

<?php

	$input = "4:15";
	echo $input;
	list($h,$s) = explode(":",$input);		//分割
	if($s>0){								//分が0より上だと時が変わるので+1で調節
		$h++;
	}
	$a = 12-$h;								//12時からの差を取る。
	if($a<0)$a=-$a;							
	if($h>6){								
		$h += 2*$a-12;						//足した後-12することで0~11で納める。
	}else if($h>0&&$h<6){
		$h = $a;							//差が答え。
	}
	$d = 30 - $s;							//30分との差
	if($d<0)$d=-$d;
	if($s>30){
		$s -= 2*$d;							//差の２倍を引く
	}else if($s<30){
		$s += 2*$d;							//差の２倍を足す
	}
	
	echo "<br><br>";
	echo $h.":".$s;
	
?>
	
</body>
</html>
