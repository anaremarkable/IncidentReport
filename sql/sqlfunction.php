<?php

//=============================================SELECT=============================================
//=============================================SELECT=============================================

	function select($tablename){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` ");
		return $query;
	}
	function selectorder($tablename, $col, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` ORDER BY `".$col."` ".$order);
		return $query;
	}
	function selectwhere($tablename, $col, $val){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col."`='{$val}'");
		return $query;
	}
	function selectsumwhere($tablename, $col, $colname, $col1, $val1){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$col.") AS ".$colname." FROM `".$tablename."` WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function selectsumwherelike($tablename, $col, $colname, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$col.") AS ".$colname." FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND  `".$col2."` LIKE '%{$val2}%' ");
		return $query;
	}

	function selectsumwhereandlike($tablename, $col, $colname, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$col.") AS ".$colname." FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}' AND `".$col3."` LIKE '%{$val3}%' ");
		return $query;
	}
	function selectsumwhereandnotlike($tablename, $col, $colname, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$col.") AS ".$colname." FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`!='{$val2}' AND `".$col3."` LIKE '%{$val3}%' ");
		return $query;
	}
	function selectsumwhereless($tablename, $col, $colname, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(`".$col."`) AS ".$colname." FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`<='{$val2}' ");
		return $query;
	}

	function selectsumwherelessand($tablename, $col, $colname, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(`".$col."`) AS ".$colname." FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}' AND `".$col3."`<='{$val3}' ");
		return $query;
	}

	function selectsumwherebetweenand($tablename, $col, $colname, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$col.") AS ".$colname." FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}'");
		return $query;
	}function selectsumwherebetweenand2($tablename, $sum1, $sum2, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$sum1."*".$sum2.") AS totalsum FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' AND `".$col4."`='{$val4}'");
		return $query;
	}
	function selectsum2wherebetweenand2($tablename, $sum1, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$sum1.") AS totalsum FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' AND `".$col4."`='{$val4}'");
		return $query;
	}

	function selectsum2wherebetweenandnot2($tablename, $sum1, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$sum1.") AS totalsum FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' AND `".$col4."`=!'{$val4}'");
		return $query;
	}

	function selectsumwherelikeand2($tablename, $sum1, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$sum1.") AS totalsum FROM `".$tablename."` WHERE `".$col1."` LIKE '%{$val1}%' AND `".$col2."`='{$val2}' AND `".$col3."`='{$val3}'");
		return $query;
	}
	function selectsumwhereand($tablename, $col, $val, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$col.") AS ".$val." FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}'");
		return $query;
	}

	function selectsumwhereminus($tablename, $col, $coll, $val, $col1, $val1){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$col."-".$coll.") AS ".$val." FROM `".$tablename."` WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function selectsumwhereminusand($tablename, $col, $coll, $val, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$col."-".$coll.") AS ".$val." FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}'");
		return $query;
	}

	function selectwherenot($tablename, $col, $val){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col."`!='{$val}'");
		return $query;
	}

	function selectwhereandnot($tablename, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`!='{$val2}'");
		return $query;
	}

	function selectwhereand2not($tablename, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}' AND `".$col3."`!='{$val3}'");
		return $query;
	}
	function selectwhereand($tablename, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}'");
		return $query;
	}

	function selectwhereandgreater($tablename, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE  `".$col1."`='{$val1}' AND `".$col2."`>'{$val2}'");
		return $query;
	}
	function selectwheregreaterandnotequal($tablename, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`>'{$val2}' AND `".$col3."`!='{$val3}'");
		return $query;
	}

	function selectwhereless($tablename, $col1, $val1){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`<='{$val1}'");
		return $query;
	}
	function selectwherelessorder($tablename, $col1, $val1, $col2, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`<='{$val1}' ORDER BY `".$col2."` ".$order);
		return $query;
	}
	function selectwherelessequal($tablename, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`<='{$val2}'");
		return $query;
	}
	function selectwherelessequalorder($tablename, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`<='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}

	function selectwheregreaterequalorder($tablename, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`>='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}

	function selectwherelessequalorderlimit($tablename, $col1, $val1, $col2, $val2, $col3, $order, $limit){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`<='{$val2}' ORDER BY `".$col3."` ".$order. " LIMIT ".$limit);
		return $query;
	}
	function selectwherelessnotequalorder($tablename, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`!='{$val1}' AND `".$col2."`<='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}
	function selectwherelessandequalorder($tablename, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' ORDER BY `".$col4."` ".$order);
		return $query;
	}
	function selectwherelessandequal($tablename, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}'");
		return $query;
	}
	function selectwherelessandnotequal($tablename, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`!='{$val3}'");
		return $query;
	}
	function selectwherelessandnotequalorder($tablename, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`!='{$val3}' ORDER BY `".$col4."` ".$order);
		return $query;
	}
	function selectwhereand2($tablename, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}' AND `".$col3."`='{$val3}'");
		return $query;
	}
	function selectwhereand3($tablename, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}' AND `".$col3."`='{$val3}' AND `".$col4."`='{$val4}'");
		return $query;
	}
	function selectwhereand2order($tablename, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}' AND `".$col3."`='{$val3}' ORDER BY `".$col4."` ".$order);
		return $query;
	}
	function selectwhereor($tablename, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' OR `".$col2."`='{$val2}'");
		return $query;
	}function selectwhereororder($tablename, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' OR `".$col2."`='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}
	function selectcountwhereorand($tablename, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT COUNT(`id`) AS totalcount FROM `".$tablename."` WHERE (`".$col1."`='{$val1}' OR `".$col2."`='{$val2}') AND `".$col3."`='{$val3}'");
		return $query;
	}
	function selectwhereorder($tablename, $col1, $val1, $col2, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' ORDER BY `".$col2."` ".$order);
		return $query;
	}

	function selectwherenotorder($tablename, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`!='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}
	function selectwhereorderlimit($tablename, $col1, $val1, $col2, $order, $limit){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' ORDER BY `".$col2."` ".$order. " LIMIT ".$limit);
		return $query;
	}
	function selectorderlimit($tablename, $col1, $order, $limit){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` ORDER BY `".$col1."` ".$order. " LIMIT ".$limit);
		return $query;
	}
	function selectwhereandnotorder($tablename, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`!='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}
	function selectwhereandorder($tablename, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}
	function selectgroup($tablename, $col2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` GROUP BY `".$col2."`");
		return $query;
	}
	function selectwheregroup($tablename, $col1, $val1, $col2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`='{$val1}' GROUP BY `".$col2."`");
		return $query;
	}
	function selectwherebetween($tablename, $col1, $val1, $col2 ,$val2 ){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' ");
		return $query;
	}function selectdistinctwherebetweenand($tablename, $distinct, $col1, $val1, $col2 ,$val2, $col3 ,$val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT DISTINCT(`".$distinct."`) FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' ");
		return $query;
	}function selectcountwherebetweenand2($tablename, $col1, $val1, $col2 ,$val2, $col3 ,$val3, $col4 ,$val4){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT COUNT(`id`) AS totalcount FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' AND `".$col4."`='{$val4}'");
		return $query;
	}function selectdistinctwherebetween($tablename, $distinct, $col1, $val1, $col2 ,$val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT DISTINCT(`".$distinct."`) FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' ");
		return $query;
	}function selectdistinctwherebetweenorder($tablename, $distinct, $col1, $val1, $col2 ,$val2 ,$col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT DISTINCT(`".$distinct."`) FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}function selectdistinctwherebetweenandorder($tablename, $distinct, $col1, $val1, $col2 ,$val2, $col3, $val3, $col4, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT DISTINCT(`".$distinct."`) FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' ORDER BY `".$col4."` ".$order);
		return $query;
	}function selectdistinctwhere($tablename, $distinct, $col1, $val1){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT DISTINCT(`".$distinct."`) FROM `".$tablename."` WHERE `".$col1."`>='{$val1}'");
		return $query;
	}function selectdistinctwherelike($tablename, $distinct, $col1, $val1){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT DISTINCT(`".$distinct."`) FROM `".$tablename."` WHERE `".$col1."` LIKE '%{$val1}%'");
		return $query;
	}function selectdistinctwherelikeorder($tablename, $distinct, $col1, $val1, $col2, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT DISTINCT(`".$distinct."`) FROM `".$tablename."` WHERE `".$col1."` LIKE '%{$val1}%' ORDER BY `".$col2."` ".$order);
		return $query;
	}
	function selectdistinctwherelikeand($tablename, $distinct, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT DISTINCT(`".$distinct."`) FROM `".$tablename."` WHERE `".$col1."` LIKE '%{$val1}%' AND `".$col2."`='{$val2}'");
		return $query;
	}function selectdistinctwherelikeandorder($tablename, $distinct, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT DISTINCT(`".$distinct."`) FROM `".$tablename."` WHERE `".$col1."` LIKE '%{$val1}%' AND `".$col2."`='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}function selectcountwherebetweenand($tablename, $col1, $val1, $col2 ,$val2, $col3 ,$val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT COUNT(`id`) AS totalcount FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' ");
		return $query;
	}function selectsum2wherebetweenand($tablename, $sum1, $sum2, $col1, $val1, $col2 ,$val2, $col3 ,$val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT SUM(".$sum1."+".$sum2.") AS totalsum FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' ");
		return $query;
	}function selectwherebetweenand($tablename, $col1, $val1, $col2 ,$val2, $col3 ,$val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' ");
		return $query;
	}function selectwherebetweenandorder($tablename, $col1, $val1, $col2 ,$val2, $col3 ,$val3, $col4, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' ORDER BY `".$col4."` ".$order);
		return $query;
	}function selectwherebetweenandnotorder($tablename, $col1, $val1, $col2 ,$val2, $col3 ,$val3, $col4, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`!='{$val3}' ORDER BY `".$col4."` ".$order);
		return $query;
	}function selectwherebetweenand2($tablename, $col1, $val1, $col2 ,$val2, $col3 ,$val3, $col4 ,$val4){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' AND `".$col4."`='{$val4}'  ");
		return $query;
	}function selectwherebetweenand2order($tablename, $col1, $val1, $col2 ,$val2, $col3 ,$val3, $col4 ,$val4, $col5, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' AND `".$col3."`='{$val3}' AND `".$col4."`='{$val4}' ORDER BY `".$col5."` ".$order);
		return $query;
	}
	function selectwherebetweenorder($tablename, $col1, $val1, $col2 ,$val2, $col3, $order ){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}
	function selectwherebetweengroup($tablename, $col1, $val1, $col2 ,$val2 ,$col3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}' GROUP BY `".$col3."`");
		return $query;
	}
	function selectwhereandbetweengroup($tablename, $col1, $val1, $col2 ,$val2 , $col3, $val3 ,$col4){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}'  AND `".$col3."`='{$val3}' GROUP BY `".$col4."`");
		return $query;
	}
	function selectwherecount($columnname, $col1, $tablename, $col2 ,$val2, $col3, $val3, $col4){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT COUNT(`".$columnname."`) as ".$col1." FROM ".$tablename."  WHERE `".$col2."`='{$val2}' AND `".$col3."`='{$val3}'  GROUP BY `".$col4."`");
		return $query;
	}
	function selectcount($tablename, $columnname, $col1, $col2 ,$val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT COUNT(`".$columnname."`) as ".$col1." FROM ".$tablename."  WHERE `".$col2."`='{$val2}'");
		return $query;
	}
	function selectwhereandcount($tablename, $columnname, $col1, $col2 ,$val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT COUNT(`".$columnname."`) as ".$col1." FROM ".$tablename."  WHERE `".$col2."`='{$val2}' AND `".$col3."`='{$val3}'");
		return $query;
	}
	function selectwherecount2($columnname, $col1, $tablename, $col2 ,$val2, $col3, $val3, $col4, $val4){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT COUNT(`".$columnname."`) as ".$col1." FROM ".$tablename."  WHERE `".$col2."`='{$val2}' AND `".$col3."`='{$val3}' AND  `".$col4."`='{$val4}'");
		return $query;
	}
	function selectwherelike($tablename, $col1, $val1){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."` LIKE '%$val1%'");
		return $query;
	}
	function selectwherelikeor($tablename, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."` LIKE '%$val1%' OR `".$col2."` LIKE '%$val2%'");
		return $query;
	}
	function selectwherelikeand($tablename, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."` LIKE '%$val1%' AND `".$col2."`='{$val2}'");
		return $query;
	}
	function selectwherelikeorder($tablename, $col1, $val1, $col2, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."` LIKE '%$val1%' ORDER BY `".$col2."` ".$order);
		return $query;
	}
	function selectwherelikeandorder($tablename, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."` LIKE '%$val1%'  AND `".$col2."`='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}
	function selectwherelikeandnotorder($tablename, $col1, $val1, $col2, $val2, $col3, $order){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."` LIKE '%$val1%'  AND `".$col2."`!='{$val2}' ORDER BY `".$col3."` ".$order);
		return $query;
	}
	function selectwherelikeandnot($tablename, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."` LIKE '%$val1%'  AND `".$col2."`='{$val2}' AND `".$col3."`!=".$val3);
		return $query;
	}
	function selectwherelikeand2not($tablename, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."` LIKE '%$val1%'  AND `".$col2."`!='{$val2}' ");
		return $query;
	}

	function selectwherelikeand2($tablename, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "SELECT * FROM `".$tablename."` WHERE `".$col1."` LIKE '%$val1%'  AND `".$col2."`='{$val2}' AND `".$col3."`='{$val3}'");
		return $query;
	}



//=============================================INSERT=============================================
//=============================================INSERT=============================================

	function insert1($table, $col1, $val1){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`) VALUES('{$val1}')");
		return $query;
	}
	function insert2($table, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`) VALUES('{$val1}', '{$val2}')");
		return $query;
	}
	function insert3($table, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`) VALUES('{$val1}', '{$val2}', '{$val3}')");
		return $query;
	}
	function insert4($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}')");
		return $query;
	}
	function insert5($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}')");
		return $query;
	}
	function insert6($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}')");
		return $query;
	}
	function insert7($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}')");
		return $query;
	}
	function insert8($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}')");
		return $query;
	}
	function insert9($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}')");
		return $query;
	}
	function insert10($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}')");
		return $query;
	}
	function insert11($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}')");
		return $query;
	}
	function insert12($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}')");
		return $query;
	}
	function insert13($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`, `".$col13."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}', '{$val13}')");
		return $query;
	}
	function insert14($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`, `".$col13."`, `".$col14."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}', '{$val13}', '{$val14}')");
		return $query;
	}
	function insert15($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`, `".$col13."`, `".$col14."`, `".$col15."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}', '{$val13}', '{$val14}', '{$val15}')");
		return $query;
	}
	function insert16($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`, `".$col13."`, `".$col14."`, `".$col15."`, `".$col16."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}', '{$val13}', '{$val14}', '{$val15}', '{$val16}')");
		return $query;
	}
	function insert17($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`, `".$col13."`, `".$col14."`, `".$col15."`, `".$col16."`, `".$col17."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}', '{$val13}', '{$val14}', '{$val15}', '{$val16}', '{$val17}')");
		return $query;
	}
	function insert18($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17, $col18, $val18){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`, `".$col13."`, `".$col14."`, `".$col15."`, `".$col16."`, `".$col17."`, `".$col18."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}', '{$val13}', '{$val14}', '{$val15}', '{$val16}', '{$val17}', '{$val18}')");
		return $query;
	}
	function insert19($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17, $col18, $val18, $col19, $val19){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`, `".$col13."`, `".$col14."`, `".$col15."`, `".$col16."`, `".$col17."`, `".$col18."`, `".$col19."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}', '{$val13}', '{$val14}', '{$val15}', '{$val16}', '{$val17}', '{$val18}', '{$val19}')");
		return $query;
	}
	function insert20($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17, $col18, $val18, $col19, $val19, $col20, $val20){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`, `".$col13."`, `".$col14."`, `".$col15."`, `".$col16."`, `".$col17."`, `".$col18."`, `".$col19."`, `".$col20."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}', '{$val13}', '{$val14}', '{$val15}', '{$val16}', '{$val17}', '{$val18}', '{$val19}', '{$val20}')");
		return $query;
	}
	function insert21($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17, $col18, $val18, $col19, $val19, $col20, $val20, $col21, $val21){
		include('connection.php');
		
		$query = mysqli_query($con, "INSERT INTO `".$table."` (`".$col1."`, `".$col2."`, `".$col3."`, `".$col4."`, `".$col5."`, `".$col6."`, `".$col7."`, `".$col8."`, `".$col9."`, `".$col10."`, `".$col11."`, `".$col12."`, `".$col13."`, `".$col14."`, `".$col15."`, `".$col16."`, `".$col17."`, `".$col18."`, `".$col19."`, `".$col20."`, `".$col21."`) VALUES('{$val1}', '{$val2}', '{$val3}', '{$val4}', '{$val5}', '{$val6}', '{$val7}', '{$val8}', '{$val9}', '{$val10}', '{$val11}', '{$val12}', '{$val13}', '{$val14}', '{$val15}', '{$val16}', '{$val17}', '{$val18}', '{$val19}', '{$val20}', '{$val21}')");
		return $query;
	}

//=============================================UPDATE=============================================
//=============================================UPDATE=============================================

	function update1($table, $col1, $val1, $col2, $val2){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function updateand1($table, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col3."` ='{$val3}' WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}'");
		return $query;
	}

	function update2($table, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update3($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update4($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update5($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update6($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update7($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update8($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update9($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update10($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update11($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update12($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}', `".$col13."` ='{$val13}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update13($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}', `".$col13."` ='{$val13}', `".$col14."` ='{$val14}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update14($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}', `".$col13."` ='{$val13}', `".$col14."` ='{$val14}', `".$col15."` ='{$val15}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update15($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}', `".$col13."` ='{$val13}', `".$col14."` ='{$val14}', `".$col15."` ='{$val15}', `".$col16."` ='{$val16}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update16($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}', `".$col13."` ='{$val13}', `".$col14."` ='{$val14}', `".$col15."` ='{$val15}', `".$col16."` ='{$val16}', `".$col17."` ='{$val17}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update17($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17, $col18, $val18){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}', `".$col13."` ='{$val13}', `".$col14."` ='{$val14}', `".$col15."` ='{$val15}', `".$col16."` ='{$val16}', `".$col17."` ='{$val17}', `".$col18."` ='{$val18}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update18($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17, $col18, $val18, $col19, $val19){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}', `".$col13."` ='{$val13}', `".$col14."` ='{$val14}', `".$col15."` ='{$val15}', `".$col16."` ='{$val16}', `".$col17."` ='{$val17}', `".$col18."` ='{$val18}', `".$col18."` ='{$val18}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update19($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17, $col18, $val18, $col19, $val19, $col20, $val20){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}', `".$col13."` ='{$val13}', `".$col14."` ='{$val14}', `".$col15."` ='{$val15}', `".$col16."` ='{$val16}', `".$col17."` ='{$val17}', `".$col18."` ='{$val18}', `".$col19."` ='{$val19}', `".$col20."` ='{$val20}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update20($table, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5, $col6, $val6, $col7, $val7, $col8, $val8, $col9, $val9, $col10, $val10, $col11, $val11, $col12, $val12, $col13, $val13, $col14, $val14, $col15, $val15, $col16, $val16, $col17, $val17, $col18, $val18, $col19, $val19, $col20, $val20, $col21, $val21){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$table."` SET `".$col2."` ='{$val2}', `".$col3."` ='{$val3}', `".$col4."` ='{$val4}', `".$col5."` ='{$val5}', `".$col6."` ='{$val6}', `".$col7."` ='{$val7}', `".$col8."` ='{$val8}', `".$col9."` ='{$val9}', `".$col10."` ='{$val10}', `".$col11."` ='{$val11}', `".$col12."` ='{$val12}', `".$col13."` ='{$val13}', `".$col14."` ='{$val14}', `".$col15."` ='{$val15}', `".$col16."` ='{$val16}', `".$col17."` ='{$val17}', `".$col18."` ='{$val18}', `".$col19."` ='{$val19}', `".$col20."` ='{$val20}', `".$col21."` ='{$val21}' WHERE `".$col1."`='{$val1}'");
		return $query;
	}
	function update1wherebetweenand($tablename, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$tablename."` SET `".$col4."`='{$val4}' WHERE (`".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}') AND `".$col3."`='{$val3}'");
		return $query;
	}function update1wherebetweenand2($tablename, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4, $col5, $val5){
		include('connection.php');
		
		$query = mysqli_query($con, "UPDATE `".$tablename."` SET `".$col5."`='{$val5}' WHERE (`".$col1."`>='{$val1}' AND `".$col2."`<='{$val2}') AND `".$col3."`='{$val3}' AND `".$col4."`='{$val4}'");
		return $query;
	}
//=============================================DELETE=============================================
//=============================================DELETE=============================================

	function delete($tablename){
		include('connection.php');
		$query = mysqli_query($con, "DELETE FROM `".$tablename."`");
		
		return $query;
	}		
	function delete1($tablename, $col1, $val1){
		include('connection.php');
		$query = mysqli_query($con, "DELETE FROM `".$tablename."` WHERE `".$col1."`='{$val1}'");
		
		return $query;
	}
	function delete2($tablename, $col1, $val1, $col2, $val2){
		include('connection.php');
		$query = mysqli_query($con, "DELETE FROM `".$tablename."`  WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}'");
		
		return $query;
	}	function delete3($tablename, $col1, $val1, $col2, $val2, $col3, $val3){
		include('connection.php');
		$query = mysqli_query($con, "DELETE FROM `".$tablename."`  WHERE `".$col1."`='{$val1}' AND `".$col2."`='{$val2}' AND `".$col3."`='{$val3}'");
		
		return $query;
	}	
?>