<?  
date_default_timezone_set('Asia/Hong_Kong'); 
/*藏歷*/
	$xml = new DOMDocument();
	$xml->load("./wp-content/themes/bwo2014/includes/calr".date('Y').".xml");
	$month = $xml->getElementsByTagName("month");
	$j=1;
	foreach($month as $rs){
		$day = $rs->getElementsByTagName("day");
		if ($j==date('n'))
		{
			for ($i = 0; $i < 31; $i++)
			{
				$tt[$i] = $day->item($i)->nodeValue;
			}
			break;
		}
		$j++;
	}
	$tcalr = $tt[date('j')-1];
	$dj=mktime(0,0,0,date("m"),date("d"),date("Y"));
	echo '<div id="tcal" style="font-size:12px;text-align:right;">'.date('n月j日',$dj);
	$weekarray=array("日","一","二","三","四","五","六");
	echo '<span class="space1">|</span>星期'.$weekarray[date('w')];
	echo '<span class="space1">|</span><strong>藏历'.$tcalr.'</strong></div>';
?>