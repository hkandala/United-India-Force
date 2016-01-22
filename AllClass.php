<?php
require_once 'include/php/connect.php';

class All {
	function getNews() {
		$i=0;
		$arrayBig = array();
		$result = $GLOBALS['db']->raw("SELECT `title`, `by`, `desp`,  DATE_FORMAT( `date` , '%b %d %Y %h:%i %p' ) as time FROM news ORDER BY date DESC");
		while($row = $result->fetch_assoc()) {
			$arraySmall['title']=$row['title'];
			$arraySmall['desp']=$row['desp'];
			$arraySmall['by']=$row['by'];
			$arraySmall['date']=$row['time'];
			array_push($arrayBig, $arraySmall);
			$i++;
			if($i==4) {
				break;
			}
		}
		return $arrayBig;
	}
}