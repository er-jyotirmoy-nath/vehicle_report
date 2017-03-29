<?php
session_start ();
require_once 'bdd.php';
if (isset ( $_POST ["login"] [0] ) && isset ( $_POST ["login"] [1] ) && isset ( $_POST ["login"] [2] )) {
	$username = $_POST ["login"] [0];
	$password = $_POST ["login"] [1];
	if ($_POST ["login"] [3] == "login") {
		try {
			//Kedia the data is sent as kedia but the ahacker can hack and see the data as kedia jaidep or 1 =1
			$pass_log = md5 ( $password );
			//$sql_log = "select count(*) from admin_login_table where user_name = '$username' and password_login = '$pass_log'";
			// if i dont use bind paramamter and enter the username as jaideep or 1=1 the website will get hacked to prevent it i am using bind param
			//the bind param will convert jaideep or 1=1 into a string and the result will be false
			$sql_login = "SELECT COUNT(*) FROM 	admin_login_table WHERE user_name = :user_name AND password_login = :password_login";
			$quer_login = $bdd->prepare ( $sql_login );
			$quer_login->bindParam ( ":user_name", $username );//preventing sql injection
			$quer_login->bindParam ( ":password_login", $pass_log );
			$quer_login->execute ();
			$res_login = $quer_login->fetchColumn ();
			if ($res_login == 1) {
				$_SESSION ["username"] = $username;//creating a session variable
				echo true;
			} else {
				echo 'Login credentials are wrong or donot exist!';
			}
		} catch ( Exception $e ) {
			echo $e;
		}
	}
	if ($_POST ["login"] [3] == "register") {
		try {
			$type = 'admin';
			$pass_save = md5 ( $password );//hash function
			//mysqli_real_escape_string($link, $string_to_escape)
			$sql_reg = "INSERT INTO `admin_login_table` (`user_name`, `password_login`, `type_login`) VALUES (:user_name,:password_login,:type_login);";
			$quer_reg = $bdd->prepare ( $sql_reg );
			$quer_reg->bindParam ( ":user_name", $username );
			$quer_reg->bindParam ( ":password_login", $pass_save );
			$quer_reg->bindParam ( ":type_login", $type );
			$quer_reg->execute ();
			$res_reg = $quer_reg->rowCount ();//checks whether a row was inserted or not
			if ($res_reg > 0) {
				echo "Ok";
			} else {
				echo 'Login credentials are wrong or donot exist!';
			}
		} catch ( Exception $e ) {
			echo $e;
		}
	}
	if ($_POST ["login"] [3] == "logout") {
		$_SESSION ["username"] = "";
		session_unset ();
		session_destroy ();
		echo true;
	}
}

if (isset ( $_POST ["cat_data"] [0] ) && isset ( $_POST ["cat_data"] [1] )) {
	$category = $_POST ["cat_data"] [0];
	$msg = $_POST ["cat_data"] [1];
	if ($msg == "Save") {
		$cat_id = md5 ( $category );
		try {
			$sql_cat = "INSERT INTO category_table(category_id,category_name) VALUES(:category_id,:category_name);";
			$quer_cat = $bdd->prepare ( $sql_cat );
			$quer_cat->bindParam ( ":category_id", $cat_id );
			$quer_cat->bindParam ( ":category_name", $category );
			$quer_cat->execute ();
			if ($quer_cat->rowCount () > 0) {
				echo true;
			} else {
				echo false;
			}
		} catch ( Exception $e ) {
			echo $e;
		}
	}
}
if (isset ( $_POST ["rank_data"] [0] ) && isset ( $_POST ["rank_data"] [1] )) {
	try {
		$rank = $_POST ["rank_data"] [0];
		$rank_id = substr ( $rank, 0, 5 ) . '_' . rand ( 00000, 99999 );
		$sql_rank = "INSERT INTO rank_table(Rank,RK_ID) VALUES(:Rank,:RK_ID)";
		$quer_rank = $bdd->prepare ( $sql_rank );
		$quer_rank->bindParam ( ':Rank', $rank );
		$quer_rank->bindParam ( ':RK_ID', $rank_id );
		$quer_rank->execute ();
		if ($quer_rank->rowCount () > 0) {
			echo true;
		} else {
			echo false;
		}
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}
if (isset ( $_POST ["stat_data"] [0] ) && isset ( $_POST ["stat_data"] [1] )) {
	try {
		$stat = $_POST ["stat_data"] [0];
		$stat_id = substr ( $stat, 0, 5 ) . '_' . rand ( 00000, 99999 );
		$sql_stat = "INSERT INTO station(Station_id,station_name) VALUES(:Station_id,:station_name)";
		$quer_stat = $bdd->prepare ( $sql_stat );
		$quer_stat->bindParam ( ':station_name', $stat );
		$quer_stat->bindParam ( ':Station_id', $stat_id );
		$quer_stat->execute ();
		if ($quer_stat->rowCount () > 0) {
			echo true;
		} else {
			echo false;
		}
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}
if (isset ( $_POST ["ques_data"] [0] ) && isset ( $_POST ["ques_data"] [1] ) && isset ( $_POST ["ques_data"] [3] )) {
	if ($_POST ["ques_data"] [3] == "Save") {
		try {
			$category = $_POST ["ques_data"] [0];
			$question = $_POST ["ques_data"] [1];
			$date_ques = date ( "d m y h:m:s", strtotime ( "now" ) );
			$ques_id = substr ( sha1 ( $question . $date_ques ), 0, 5 ) . '_' . rand ( 00000, 99999 );
			$sql_ques = "INSERT INTO question_table(Ques_id,question,Date_ques,Category_id) VALUES(:Ques_id,:question,:Date_ques,:Category_id)";
			$quer_ques = $bdd->prepare ( $sql_ques );
			$quer_ques->bindParam ( ':Ques_id', $ques_id );
			$quer_ques->bindParam ( ':question', $question );
			$quer_ques->bindParam ( ':Date_ques', $date_ques );
			$quer_ques->bindParam ( ':Category_id', $category );
			$quer_ques->execute ();
			if ($quer_ques->rowCount () > 0) {
				echo true;
			} else {
				echo false;
			}
		} catch ( Exception $e ) {
			echo $e->getMessage ();
		}
	}
	if ($_POST ["ques_data"] [3] == "Edit") {
		try {
			$category = $_POST ["ques_data"] [0];
			$question = $_POST ["ques_data"] [1];
			$ques_id = $_POST ["ques_data"] [2];
			
			$sql_ques = "UPDATE `question_table` 
					SET `question`=:question,`Category_id`= :Category_id WHERE `Ques_id`= :Ques_id";
			$quer_ques = $bdd->prepare ( $sql_ques );
			$quer_ques->bindParam ( ':Ques_id', $ques_id );
			$quer_ques->bindParam ( ':question', $question );
			
			$quer_ques->bindParam ( ':Category_id', $category );
			$quer_ques->execute ();
			if ($quer_ques->rowCount () > 0) {
				echo true;
			} else {
				echo false;
			}
		} catch ( Exception $e ) {
			echo $e->getMessage ();
		}
	}
}
if (isset ( $_POST ["cat_show"] [0] ) && isset ( $_POST ["cat_show"] [1] ) && isset ( $_POST ["cat_show"] [2] )) {
	
	try {
		$sql_show = "SELECT category_name,category_id FROM category_table";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e;
	}
}
if (isset ( $_POST ["rank_show"] [0] ) && isset ( $_POST ["rank_show"] [1] ) && isset ( $_POST ["rank_show"] [2] )) {
	
	try {
		$sql_show = "SELECT * FROM RANK_TABLE where 1";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}
// Get Station Details
if (isset ( $_POST ["stat_show"] [0] ) && isset ( $_POST ["stat_show"] [1] ) && isset ( $_POST ["stat_show"] [2] )) {
	try {
		$sql_show = "SELECT station_name,Station_id FROM station";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}
// Get Credentials Details
if (isset ( $_POST ["cred_show"] [0] ) && isset ( $_POST ["cred_show"] [1] ) && isset ( $_POST ["cred_show"] [2] )) {
	try {
		$sql_show = "SELECT Full_name, Age,rank_table.Rank as RK_ID,Army_no,D_O_S,Servey_id 
				FROM credentials_table 
				join rank_table on credentials_table.RK_ID = rank_table.RK_ID";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}
// Get Question Details
if (isset ( $_POST ["ques_show"] [0] ) && isset ( $_POST ["ques_show"] [1] ) && isset ( $_POST ["ques_show"] [2] )) {
	if ($_POST ["ques_show"] [0] == "get") {
		try {
			$data_array = array ();
			$sql_show = "SELECT question_table.Ques_id as qid,question_table.question as question, category_table.category_name as category,question_table.Date_ques as date_creat FROM `question_table` LEFT JOIN category_table ON question_table.Category_id = category_table.category_id WHERE 1";
			$quer_show = $bdd->prepare ( $sql_show );
			$quer_show->execute ();
			$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
			
			echo json_encode ( $res_show );
		} catch ( Exception $e ) {
			echo $e->getMessage ();
		}
	} else {
		$qid = $_POST ["ques_show"] [0];
		try {
			$data_array = array ();
			$sql_show = "SELECT question_table.question as question, category_table.category_name as category,question_table.Ques_id as qid,category_table.category_id as cat_id
					FROM `question_table` LEFT JOIN category_table ON question_table.Category_id = category_table.category_id WHERE Ques_id = :Ques_id";
			$quer_show = $bdd->prepare ( $sql_show );
			$quer_show->bindParam ( ":Ques_id", $qid );
			$quer_show->execute ();
			$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
			
			echo json_encode ( $res_show );
		} catch ( Exception $e ) {
			echo $e->getMessage ();
		}
	}
}
// Get Location Details
if (isset ( $_POST ["loc_show"] [0] ) && isset ( $_POST ["loc_show"] [1] ) && isset ( $_POST ["loc_show"] [2] )) {
	if ($_POST ["loc_show"] [1] == "all" && $_POST ["loc_show"] [2] == "all") {
		try {
			$sql_show = "SELECT CEIL(((AVG(survey_table.Factor)/1000)*100)/10) as wieght_fac, station.station_name as station_name FROM survey_table  join station 
				ON survey_table.station_id = station.Station_id GROUP BY survey_table.station_id order by wieght_fac desc limit 0,5";
			$quer_show = $bdd->prepare ( $sql_show );
			$quer_show->execute ();
			$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
			echo json_encode ( $res_show );
		} catch ( Exception $e ) {
			echo $e->getMessage ();
		}
	}
	if ($_POST ["loc_show"] [1] == "bycat" && $_POST ["loc_show"] [2] != "all") {
		$cat = $_POST ["loc_show"] [2];
		$sql_show = "SELECT CEIL(((AVG(survey_table.Factor)/1000)*100)/10) as wieght_fac, station.station_name as station_name 
		FROM survey_table join category_table ON survey_table.category_id = category_table.category_id 
		join station on survey_table.station_id = station.Station_id 
		where category_table.category_id='$cat' GROUP BY survey_table.station_id order by wieght_fac desc limit 0,5";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	}
	if ($_POST ["loc_show"] [1] == "byloc" && $_POST ["loc_show"] [2] != "all") {
		$cat = $_POST ["loc_show"] [2];
		$sql_show = "SELECT CEIL(((AVG(survey_table.Factor)/1000)*100)/10) as wieght_fac, station.station_name,category_table.category_name 
		as cat_name FROM survey_table join station ON survey_table.station_id = station.Station_id 
		join category_table on survey_table.category_id = category_table.category_id 
		where station.Station_id = '$cat' GROUP BY survey_table.category_id order by wieght_fac desc limit 0,5";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	}
}
if (isset ( $_POST ["cread_data_save"] [0] ) && isset ( $_POST ["cread_data_save"] [1] ) && isset ( $_POST ["cread_data_save"] [2] ) && isset ( $_POST ["cread_data_save"] [3] ) && isset ( $_POST ["cread_data_save"] [4] ) && isset ( $_POST ["cread_data_save"] [5] )) {
	try {
		$fname = $_POST ["cread_data_save"] [0];
		$lname = $_POST ["cread_data_save"] [1];
		$gender = $_POST ["cread_data_save"] [2];
		$age = $_POST ["cread_data_save"] [3];
		$rank = $_POST ["cread_data_save"] [4];
		$station = $_POST ["cread_data_save"] [5];
		$mat_status = $_POST ["cread_data_save"] [6];
		$arm_number = $_POST ["cread_data_save"] [7];
		$noc = $_POST ["cread_data_save"] [8];
		$nocs = $_POST ["cread_data_save"] [9];
		$tenure = $_POST ["cread_data_save"] [10];
		$full_name = $fname . ' ' . $lname;
		$survey_id = substr ( md5 ( date ( "D M Y h:m:s", strtotime ( "now" ) ) . date ( "D M Y h:m:s", strtotime ( "tommorow" ) ) ), 0, 6 ) . '_' . rand ( 000000, 999999 );
		$username = substr ( md5 ( $full_name . date ( "D M Y h:m:s", strtotime ( "now" ) ) ), 0, 5 ) . '_' . rand ( 000000, 999999 );
		$dos = date ( "D M Y h:m:s", strtotime ( "now" ) );
		$tom = $tenure;
		$unit = " ";
		$_SESSION ["STATION_ID"] = $station;
		$_SESSION ["USERNAME"] = $username;
		$_SESSION ["SURVEY_ID"] = $survey_id;
		$sql_cred = 'INSERT INTO `credentials_table`
			(`Servey_id`, `Army_no`, `RK_ID`,
			`Maritial_status`, `Age`, `Gender`, `Tenure_months`, `No_Children`, `Stn_id`,
			`Full_name`, `Unit`, `D_O_S`, `user_name`) VALUES
			(:Servey_id,:Army_no,:RK_ID,:Maritial_status,:Age,
			:Gender,:Tenure_months,:No_Children,
			:Stn_id,:Full_name,:Unit,
			:D_O_S,:user_name)';
		$quer_cred = $bdd->prepare ( $sql_cred );
		$quer_cred->bindParam ( ":Servey_id", $survey_id );
		$quer_cred->bindParam ( ":Army_no", $arm_number );
		$quer_cred->bindParam ( ":RK_ID", $rank );
		$quer_cred->bindParam ( ":Maritial_status", $mat_status );
		$quer_cred->bindParam ( ":Age", $age );
		$quer_cred->bindParam ( ":Gender", $gender );
		$quer_cred->bindParam ( ":Tenure_months", $tom );
		$quer_cred->bindParam ( ":No_Children", $noc );
		$quer_cred->bindParam ( ":Stn_id", $station );
		$quer_cred->bindParam ( ":Full_name", $full_name );
		$quer_cred->bindParam ( ":Unit", $unit );
		$quer_cred->bindParam ( ":D_O_S", $dos );
		$quer_cred->bindParam ( ":user_name", $username );
		$quer_cred->execute ();
		if ($quer_cred->rowCount () > 0)
			echo true;
		else
			echo false;
	} catch ( Exception $e ) {
		echo $e;
	}
}
// Get Dashboard Data for the admin Section
if (isset ( $_POST ["admin_dash"] [0] ) && isset ( $_POST ["admin_dash"] [1] ) && isset ( $_POST ["admin_dash"] [2] )) {
	try {
		$sql_show = "SELECT ceil(((avg(survey_table.Factor)/1000)*100)/10) as rating,category_table.category_name,station.station_name 
				FROM `survey_table` JOIN station on survey_table.station_id = station.Station_id JOIN 
				category_table ON survey_table.category_id = category_table.category_id WHERE 1 
				GROUP BY survey_table.category_id,survey_table.station_id ORDER by station.station_name";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}