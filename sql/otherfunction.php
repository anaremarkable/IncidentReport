<?php
	function sqlstrip($var){
		include("connection.php");

		$sqlvar=stripcslashes($var);
		$sqlvar=mysqli_real_escape_string($con, $sqlvar);

		return $sqlvar;
	}

	function encryptor($var){
		$enc1 = md5($var);
		$enc2 = md5($enc1);
		$enc3 = md5($enc2);

		return $enc3;
	}

	function username_generator(){
		$code = rand(1000,9000);
		$encoded_username = encryptor($code);
		$query = selectwhere("account", "username", $encoded_username);

		if(mysqli_num_rows($query)){ username_generator(); }
		else{  return $code;  }
	}

	function password_generator(){
		return rand(10, 90);
	}

	function report_status($value){
		if($value == 0){
			return 'Pending';
		}elseif($value == 1){
			return 'Verified';
		}elseif($value == 2){
			return 'Duplicate';
		}elseif ($value  == 3) {
			return 'Hoax';
		}

	}


	function student_status($value){
		if($value == 0){
			return 'Active';
		}elseif($value == 1){
			return 'Inactive';
		}elseif($value == 2){
			return 'Verified Reporting';
		}elseif($value == 3){
			return 'Most Hoax Reported';
		}
	}
	function faculty_status($value){
		if($value == 1){
			return 'Inactive';
		}elseif($value == 0){
			return 'Active';
		}elseif($value == 2){
			return 'Verified Reporter';
		}elseif($value == 3){
			return 'Most Hoax Reported';
		}
	}

	function faculty_program($value){
		if($value == 0){
			return 'BSIT';
		}elseif($value == 1){
			return 'BSCS';
		}elseif($value == 2){
			return 'BSCE';
		}elseif($value == 3){
			return 'BSEE';
		}elseif($value == 4){
			return 'BLISS';
		}elseif($value == 5){
			return 'BSA';
		}elseif($value == 6){
			return 'BSMA';
		}elseif($value == 7){
			return 'BSFM';
		}elseif($value == 8){
			return 'BSIA';
		}elseif($value == 9){
			return 'BSHM';
		}elseif($value == 10){
			return 'BSMM';
		}elseif($value == 11){
			return 'BSOM';
		}elseif($value == 12){
			return 'BSNE';
		}elseif($value == 13){
			return 'BEE';
		}elseif($value == 14){
			return 'BSMATH';
		}elseif($value == 15){
			return 'BSENGLISH';
		}elseif($value == 16){
			return 'FILIPINO';
		}elseif($value == 17){
			return 'BSSCIENCE';
		}elseif($value == 18){
			return 'BPE';
		}elseif($value == 19){
			return 'BSP';
		}elseif($value == 20){
			return 'BHS';
		}elseif($value == 21){
			return 'BSN';
		}elseif($value == 22){
			return 'BSHM';
		}
	}


	function faculty_position($value){
		if($value == 0){
			return 'Inactive';
		}elseif($value == 1){
			return 'Active';
		}elseif($value == 2){
			return 'Verified Reporting';
		}elseif($value == 3){
			return 'Most Hoax Reported';
		}
	}

	function involvedata_status($value){
		if($value == 0){
			return 'Pending';
		}elseif($value == 1){
			return 'Solved';
		}
	}

	function compress_image($source_url, $destination_url, $quality) {
		$info = getimagesize($source_url);

		if ($info['mime'] == 'image/jpeg')
				$image = imagecreatefromjpeg($source_url);

		elseif ($info['mime'] == 'image/gif')
				$image = imagecreatefromgif($source_url);

		elseif ($info['mime'] == 'image/png')
				$image = imagecreatefrompng($source_url);

		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}
	function selected($val1, $val2){
		if($val1 == $val2){ return "SELECTED"; }
	}

	function user_type($var){
		if($var == 0) { return "STUDENT "; }
		if($var == 1) { return "SAO "; }
		if($var == 2) { return "DEAN "; }
		if($var == 3) { return "FACULTY "; }
	}

	function department_acc($var){
		if($var == 0) { return "SOECS"; }
		if($var == 1) { return "SBMA"; }
		if($var == 2) { return "SEAS"; }
		if($var == 3) { return "SON"; }
		if($var == 4) { return "SHOM"; }
	}
	function sidebar_active($val1, $val2){
		if($val1 == $val2) return "active"; 
	}
	function offense_level($var){
		if($var == 0) { return "LIGHT OFFENSE"; }
		if($var == 1) { return "LESS GRAVE OFFENSE"; }
		if($var == 2) { return "GRAVE OFFENSE"; }
	}
	function offense_type_desc($val1){
		if($val1 == 0) {
			return "are considered as slight deviations from the norms of the community 
			and pose a threat to the values and culture of the institution. A student committing 
			such violations may be called by the Student Affairs Director for the proper disposition 
			and recommended necessary action. The Student Affairs Director may, by virtue of 
			the office s/he occupies, call the attention of the student for any of the following
			violations";
		}
		if($val1 == 1) {
			return "are considered serious deviations from the norms of the 
			community and pose a threat to the values and culture of the institution. A student 
			found to have violated any of these offenses shall face the Student Affairs Director for 
			proper disposition of the case and shall be recommended for necessary action to 
			the Discipline Committee. The penalty for a less grave offense shall be suspension 
			which shall cover no less than (3) school days and not more than 20% of the total 
			school days as provided in the Manual of Regulations for Private Schools. The 
			following constitute less grave offenses";
		}
		if($val1 == 2) {
			return " are considered extreme deviations from the norms of the 
			community and pose a threat to the values and culture of the institution. A complaint 
			may be brought to or initiated by the Student Affairs Director. A student accused of 
			any violation/s mentioned below shall be referred to the Discipline Committee for 
			proper disposition of the case and recommendation/s to the President for 
			appropriate action. The penalty for a grave offense shall be dismissal or expulsion. 
			Penalties for grave offenses for higher education students are based on Section 104
			of the Manual of Regulations for Private Higher Education or MoRPHE";
		}
	}
	function colorgen($val){
	if($val==1) return "window.chartColors.red";
	if($val==2) return "window.chartColors.blue";
	if($val==3) return "window.chartColors.lightblue";
	if($val==4) return "window.chartColors.white";
	if($val==5) return "window.chartColors.red";
	if($val==6) return "window.chartColors.yellow";
	if($val==7) return "window.chartColors.green";
	if($val==8) return "window.chartColors.lightgreen";
	if($val==9) return "window.chartColors.deepblue";
	if($val==10) return "window.chartColors.pink";
	if($val==11) return "window.chartColors.yellow";
	if($val==12) return "window.chartColors.blue";
	if($val==13) return "window.chartColors.red";
	if($val==14) return "window.chartColors.blue";
	if($val==15) return "window.chartColors.orange";
	if($val==16) return "window.chartColors.gray";
	if($val==17) return "window.chartColors.black";
	if($val==18) return "window.chartColors.pink";







}	function res_status($val){
	if($val==0) return "Active Account";
	if($val==1) return "Inactive Account";
	if($val==2) return "Removed Account";
}	
function colorgen2($val){
	if($val==1) return "rgb(139,0,0)";
	if($val==2) return "rgb(128,0,128)";
	if($val==3) return "rgb(0,255,255)";
	if($val==4) return "rgb(255, 255, 255)";
	if($val==5) return "rgb(0,128,0)";
	if($val==6) return "rgb(238,130,238)";
	if($val==7) return "rgb(255,0,0)";
	if($val==8) return "rgb(144,238,144)";
	if($val==9) return "rgb(0,0,255)";
	if($val==10) return "rgb(255,192,203)";
	if($val==11) return "rgb(255,255,0)";
	if($val==12) return "rgb(0,0,255)";
}	

function colorgen3($val){
	if($val==1) return "white";
	if($val==2) return "#dee2e6";
	if($val==3) return "#lightgreen";
	if($val==4) return "#pink";
	if($val==5) return "#228b22";
	if($val==6) return "red";
	if($val==7) return "blue";
	if($val==8) return "#orange";
	if($val==9) return "black";
	if($val==10) return "yellow";
}
function gender($var){
	if($var==0) return "Male";
	if($var==1) return "Female";
}

//=================================DATE MANIPULATOR==========================
//=================================DATE MANIPULATOR==========================
function endofmonth($i,$y){
	if($i==1 ||$i ==3 || $i==5 || $i==7 || $i==8|| $i==10|| $i==12) {return 31;}
	elseif($i==2){ if($y%4==0){return 29;} else {return 28;}}
	else{ return 30;}
}
function plusthreedays($date){
  	$d = d($date);
    $m = m($date);
   	$y = y($date);
    $end = endofmonth($m, $y);
    $day = $d+3;

    if($day > $end){
    	$m++;
    	return $day-$end;
    }
}
function day_num($var){
	if($var=='Sunday') return 0;
	if($var=='Monday') return 1;
	if($var=='Tuesday') return 2;
	if($var=='Wednesday') return 3;
	if($var=='Thursday') return 4;
	if($var=='Friday') return 5;
	if($var=='Saturday') return 6;
}
function day_num2($var){
	if($var=='Sunday') return 6;
	if($var=='Monday') return 0;
	if($var=='Tuesday') return 1;
	if($var=='Wednesday') return 2;
	if($var=='Thursday') return 3;
	if($var=='Friday') return 4;
	if($var=='Saturday') return 5;
}
function m($var){ return  date("m", strtotime($var)); }
function d($var){ return  date("d", strtotime($var)); }
function y($var){ return  date("Y", strtotime($var)); }
function ymd($var){ return  date("Y-m-d", strtotime($var)); }
function his($var){ return  date("H:i:s", strtotime($var)); }
function ymdhis($var){ return  date("Y-m-d H:i:s ", strtotime($var)); }
function sixtymin(){ return strtotime('01:00:00') - strtotime(date('Y-m-d')." 00:00:00") ;}
function thirtymin(){ return strtotime('00:30:00') - strtotime(date('Y-m-d')." 00:00:00") ;}
function twentyfourhr(){ return strtotime('24:00:00') - strtotime(date('Y-m-d')." 00:00:00") ;}
function date_from($var, $yr, $mon, $day){ 
	if($var == 'sm'){
		if($day <= 15){
	        return $yr."-".$mon."-01";
	    }else{
	        return $yr."-".($mon)."-16";
	    }
	}elseif($var == 'w'){
		$sel_date = $yr."-".$mon."-".$day;
		$mon2 = $mon;
		$yr2 = $yr;

		$d = day_num(date('l', strtotime($sel_date)));

		if($d==0){
			return $yr."-".$mon."-".$day;
		}else{
			$day2 = $day-$d;
			if($day2<0){
				if($mon2==1){
					$mon2 = 12;
					$yr2--;
				}else{
					$mon2--;
				}	
				$day2 = (endofmonth(($mon2),$yr2)+$day)-$d;
			}

			return $yr2."-".$mon2."-".$day2;
		}
	}elseif($var == 'm'){
		return $yr."-".$mon."-01";
	}
	elseif($var == 'y'){
		return $yr."-01-01";
	}
}
function date_to($var, $yr, $mon, $day){ 
	if($var == 'sm'){
		if($day <= 15){
	        return $yr."-".$mon."-15";
	    }else{
        	$end = endofmonth(($mon),$yr);
	        return $yr."-".($mon)."-".$end;
	    }
	}elseif($var == 'w'){
		$mon2 = $mon;
		$yr2 = $yr;
		$sel_date = $yr."-".$mon."-".$day;
		$d = day_num(date('l', strtotime($sel_date)));
		if($d==0){
			$end = $day+6;
			$end2 = endofmonth(($mon),$yr);
			
			if($end>$end2){
				$end = $end-$end2;
				$mon2++;
				if($mon2>12){
					$yr++;
					$mon2 ='01';
				}
			}
			return $yr2."-".$mon2."-".$end;
		}else{
			$end = $day+(6-$d);
			$end2 = endofmonth(($mon),$yr);
			if($end>$end2){
				$mon2 = $mon+1;
				$end = $end-$end2;
			}
			if($mon2>12){
				$mon2 -= 12;
				$yr2++;
			}
			return $yr2."-".$mon2."-".$end;
		}
	}elseif($var == 'm'){
		$end = endofmonth(($mon),$yr);
		return $yr."-".$mon."-".$end;
	}	

	elseif($var == 'y'){
		return $yr."-12-31";
	}
}
function date_interval($var, $yr, $mon, $day){ 
    $datetime_rec = $yr."-".$mon."-".$day;
	if($var == 'sm'){
		if($day <= 15){
	        return date('M', strtotime($datetime_rec))." "." 1-15 ".date('Y', strtotime($datetime_rec));
	    }else{
        	$end = endofmonth(($mon),$yr);
	        return  date('M', strtotime($datetime_rec))." 16-".$end." ".date('Y', strtotime($datetime_rec));
	    }
	}elseif($var == 'w'){
		$start = date('d', strtotime(date_from('w', $yr, $mon, $day)));
    	$end =  date('d', strtotime(date_to('w', $yr, $mon, $day)));

    	if($start<$end){
    		return date('M', strtotime($datetime_rec))." ".$start."-".$end." ".date('Y', strtotime($datetime_rec));
    	}else{
    		$date_to = date_to('w', $yr, $mon, $day);
    		$date_from = date_from('w', $yr, $mon, $day);
    		return date('M', strtotime($date_from))." ".$start." - ".date('M', strtotime($date_to))." ".$end." ".date('Y', strtotime($date_to));
    	}
	}elseif($var == 'm'){
		$date_to = date_to('m', $yr, $mon, $day);
		$date_from = date_from('m', $yr, $mon, $day);
		$end = endofmonth(($mon),$yr);
    	return date('M', strtotime($date_from))." 01 - ".$end." ".date('Y', strtotime($date_to));
	}
	elseif($var == 'y'){
    	return date('M d', strtotime($yr.'-01-01'))."- ".date('M d, Y', strtotime($yr.'-12-31'));
	}
}
function date_end($var, $yr, $mon, $day){ 
	if($var == 'sm'){
		if($day <= 15){
	        return 15;
	    }else{
        	$end = endofmonth(($mon),$yr);
	        return $end;
	    }
	}elseif($var == 'w'){
		return date('d', strtotime(date_to('w', $yr, $mon, $day)));
	}elseif($var == 'm'){
		return date('d', strtotime(date_to('m', $yr, $mon, $day)));
	}
	elseif($var == 'y'){
		return date('d', strtotime($yr.'-12-31'));
	}
 	
}
function date_start($var, $yr, $mon, $day){ 
	if($var == 'sm'){
		if($day <= 15){
	        return 1;
	    }else{
	        return 16;
	    }
	}elseif($var == 'w'){
		return date('d', strtotime(date_from('w', $yr, $mon, $day)));
	}elseif($var == 'm'){
		return date('d', strtotime(date_from('m', $yr, $mon, $day)));
	}
	elseif($var == 'y'){
		return date('d', strtotime($yr.'-01-01'));
	}
 	
}
function date_prev($sel_date){ 
	$yr = Y($sel_date);
    $mon = m($sel_date);
    $day = d($sel_date);
    $d = $day-1;
    if($d<1){
		if($mon<1){
			$mon2 = 12;
			$yr2 = $yr-1;
		}else{
			$mon2 = $mon-1;
			$yr2 = $yr;
		}
    	$end = endofmonth(($mon2),$yr2);
		return $yr2."-".$mon2."-".$end;
    }else{
		return $yr."-".$mon."-".$d;
    }
}
function date_next($sel_date){ 
	$yr = Y($sel_date);
    $mon = m($sel_date);
    $day = d($sel_date);
    $end = endofmonth(($mon),$yr);
    $d = $day+1;
    if($d>$end){
    	$mon = $mon+1;
		if($mon > 12){
			$mon = 1;
			$yr = $yr+1;
		}
		return $yr."-".$mon."-01";
    }else{
		return $yr."-".$mon."-".$d;
    }
}
function months($var){
	if($var==1){	return "January"; }
	if($var==2){	return "February"; }
	if($var==3){	return "March"; }
	if($var==4){	return "April"; }
	if($var==5){	return "May"; }
	if($var==6){	return "June"; }
	if($var==7){	return "July"; }
	if($var==8){	return "August"; }
	if($var==9){	return "September"; }
	if($var==10){	return "October"; }
	if($var==11){	return "November"; }
	if($var==12){	return "December"; }
}
function months2($var){
	if($var==1){	return "Jan"; }
	if($var==2){	return "Feb"; }
	if($var==3){	return "Mar"; }
	if($var==4){	return "Apr"; }
	if($var==5){	return "May"; }
	if($var==6){	return "Jun"; }
	if($var==7){	return "Jul"; }
	if($var==8){	return "Aug"; }
	if($var==9){	return "Sep"; }
	if($var==10){	return "Oct"; }
	if($var==11){	return "Nov"; }
	if($var==12){	return "Dec"; }
}
?>
