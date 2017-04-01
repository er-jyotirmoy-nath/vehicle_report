<?php
session_start ();
require_once 'bdd.php';
if (isset ( $_POST ["login"] [0] ) && isset ( $_POST ["login"] [1] ) && isset ( $_POST ["login"] [2] )) {
	if ($_POST ["login"] [0] == 'admin' && $_POST ["login"] [1] == 'admin123') {
		echo "1";
	} else {
		echo '0';
	}
}
if (isset ( $_POST ["type_show"] [0] ) && isset ( $_POST ["type_show"] [1] ) && isset ( $_POST ["type_show"] [2] )) {
	
	try {
		$sql_show = "SELECT * FROM veh_type where 1";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}
if (isset ( $_POST ["number_show"] [0] ) && isset ( $_POST ["number_show"] [1] ) && isset ( $_POST ["number_show"] [2] )) {
	try {
		$sql_show = "SELECT veh_id FROM vehicle_master";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}
if (isset ( $_POST ["ba_show"] [0] ) && isset ( $_POST ["ba_show"] [1] ) && isset ( $_POST ["ba_show"] [2] )) {
	try {
		$veh_id = $_POST ["ba_show"] [1];
		$sql_show = "SELECT BA_no FROM vehicle_master where veh_id = :veh_id";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->bindParam ( ':veh_id', $veh_id );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}

if (isset ( $_POST ["class_show"] [0] ) && isset ( $_POST ["class_show"] [1] ) && isset ( $_POST ["class_show"] [2] )) {
	try {
		$sql_show = "SELECT class_id FROM class";
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

if (isset ( $_POST ["maintain_show"] [0] ) && isset ( $_POST ["maintain_show"] [1] ) && isset ( $_POST ["maintain_show"] [2] )) {
	try {
		$sql_show = "SELECT * from maint_dtl";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}

if (isset ( $_POST ["tire_show"] [0] ) && isset ( $_POST ["tire_show"] [1] ) && isset ( $_POST ["tire_show"] [2] )) {
	try {
		$sql_show = "SELECT * from tyre_dtls_table";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $e ) {
		echo $e->getMessage ();
	}
}
if (isset ( $_POST ["veh_show"] [0] ) && isset ( $_POST ["veh_show"] [1] ) && isset ( $_POST ["veh_show"] [2] )) {
	if ($_POST ["veh_show"] [1] == "all" && $_POST ["veh_show"] [2] == "all") {
		try {
			$sql_show = "SELECT * from vehicle_master";
			$quer_show = $bdd->prepare ( $sql_show );
			$quer_show->execute ();
			$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
			echo json_encode ( $res_show );
		} catch ( Exception $e ) {
			echo $e->getMessage ();
		}
	}
	if ($_POST ["veh_show"] [1] == "byvehnum" && $_POST ["veh_show"] [2] != "all") {
		$vehnum = $_POST ["veh_show"] [2];
		$sql_show = "SELECT * FROM VEHICLE_MASTER WHERE engine_no = :engine_no";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->bindParam ( ':engine_no', $vehnum );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	}
	if ($_POST ["veh_show"] [1] == "bychassis" && $_POST ["veh_show"] [2] != "all") {
		$chassis = $_POST ["veh_show"] [2];
		$sql_show = "SELECT * FROM VEHICLE_MASTER WHERE chassis_no = :chassis_no";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->bindParam ( ':chassis_no', $chassis );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	}
}
if (isset ( $_POST ["veh_data_save"] [0] ) && isset ( $_POST ["veh_data_save"] [1] ) && isset ( $_POST ["veh_data_save"] [2] ) && isset ( $_POST ["veh_data_save"] [3] ) && isset ( $_POST ["veh_data_save"] [4] ) && isset ( $_POST ["veh_data_save"] [5] )) {
	try {
		$BA_no = $_POST ["veh_data_save"] [0];
		$veh_type = $_POST ["veh_data_save"] [1];
		$veh_class = $_POST ["veh_data_save"] [2];
		$dt_mfr = $_POST ["veh_data_save"] [3];
		$dt_induction = $_POST ["veh_data_save"] [4];
		$dt_takingover = $_POST ["veh_data_save"] [5];
		$engine_no = $_POST ["veh_data_save"] [6];
		$chassis_no = $_POST ["veh_data_save"] [7];
		$km_engine = $_POST ["veh_data_save"] [8];
		$km_chassis = $_POST ["veh_data_save"] [9];
		$veh_id = substr ( md5 ( date ( "D M Y h:m:s", strtotime ( "now" ) ) . date ( "D M Y h:m:s", strtotime ( "tommorow" ) ) ), 0, 6 ) . '_' . rand ( 000000, 999999 );
		
		$sql_cred = 'INSERT INTO `vehicle_master`' . '(`BA_no`, `veh_type`, `dt_mfr`, ' . '`dt_induction`, `dt_takingover`, `class`, ' . '`km_engine`, `km_chassis`, `engine_no`, ' . '`chassis_no`) VALUES (' . ':BA_no,:veh_type,:dt_mfr,:dt_induction,' . ':dt_takingover,:class,:km_engine,:km_chassis,:engine_no,' . ':chassis_no)';
		$quer_cred = $bdd->prepare ( $sql_cred );
		$quer_cred->bindParam ( ":BA_no", $BA_no );
		$quer_cred->bindParam ( ":veh_type", $veh_type );
		$quer_cred->bindParam ( ":dt_mfr", $dt_mfr );
		$quer_cred->bindParam ( ":dt_induction", $dt_induction );
		$quer_cred->bindParam ( ":dt_takingover", $dt_takingover );
		$quer_cred->bindParam ( ":class", $veh_class );
		$quer_cred->bindParam ( ":km_engine", $km_engine );
		$quer_cred->bindParam ( ":km_chassis", $km_chassis );
		$quer_cred->bindParam ( ":engine_no", $engine_no );
		$quer_cred->bindParam ( ":chassis_no", $chassis_no );
		
		$quer_cred->execute ();
		if ($quer_cred->rowCount () > 0)
			echo true;
		else
			echo false;
	} catch ( Exception $e ) {
		echo $e;
	}
}

if (isset ( $_POST ["tire_data_save"] [0] ) && isset ( $_POST ["tire_data_save"] [1] ) && isset ( $_POST ["tire_data_save"] [2] ) && isset ( $_POST ["tire_data_save"] [3] ) && isset ( $_POST ["tire_data_save"] [4] )) {
	try {
		$tyre_id = $_POST ["tire_data_save"] [0];
		$veh_num_tire = $_POST ["tire_data_save"] [1];
		$tyre_chg_dt = $_POST ["tire_data_save"] [2];
		$tyre_chg_km = $_POST ["tire_data_save"] [3];
		$tyre_num = $_POST ["tire_data_save"] [4];
		$tyre_ch_exp = $_POST ["tire_data_save"] [5];
		$sql_cred = 'INSERT INTO `tyre_dtls_table`(`tyre_id`, `veh_id`, `tyre_number`, `tyre_chg_dt`, `tyre_chg_km`, `tyre_ch_exp`) ' . 'VALUES (:tyre_id, :veh_num_tire, :tyre_num, :tyre_chg_dt, :tyre_chg_km, :tyre_ch_exp)';
		$quer_cred = $bdd->prepare ( $sql_cred );
		$quer_cred->bindParam ( ":tyre_id", $tyre_id );
		$quer_cred->bindParam ( ":veh_num_tire", $veh_num_tire );
		$quer_cred->bindParam ( ":tyre_chg_dt", $tyre_chg_dt );
		$quer_cred->bindParam ( ":tyre_chg_km", $tyre_chg_km );
		$quer_cred->bindParam ( ":tyre_num", $tyre_num );
		$quer_cred->bindParam ( ":tyre_ch_exp", $tyre_ch_exp );
		$quer_cred->execute ();
		if ($quer_cred->rowCount () > 0)
			echo true;
		else
			echo false;
	} catch ( Exception $e ) {
		echo $e;
	}
}

if (isset ( $_POST ["man_data_save"] [0] ) && isset ( $_POST ["man_data_save"] [1] ) && isset ( $_POST ["man_data_save"] [2] ) && isset ( $_POST ["man_data_save"] [3] ) && isset ( $_POST ["man_data_save"] [4] ) && isset ( $_POST ["man_data_save"] [5] )) {
	try {
		$BA_no_sel = $_POST ["man_data_save"] [0];
		$veh_num = $_POST ["man_data_save"] [1];
		$oil_ch_dt = $_POST ["man_data_save"] [2];
		$oil_ch_km = $_POST ["man_data_save"] [3];
		$air_filter_dt = $_POST ["man_data_save"] [4];
		$air_filter_km = $_POST ["man_data_save"] [5];
		$fuel_filter_dt = $_POST ["man_data_save"] [6];
		$fuel_filter_km = $_POST ["man_data_save"] [7];
		$bty_chg_dt = $_POST ["man_data_save"] [8];
		$steering_oil_dt = $_POST ["man_data_save"] [9];
		$oil_ch_exp = $_POST ["man_data_save"] [10];
		$air_filter_exp = $_POST ["man_data_save"] [11];
		$fuel_filter_exp = $_POST ["man_data_save"] [12];
		$bty_chg_exp = $_POST ["man_data_save"] [13];
		$steering_oil_exp = $_POST ["man_data_save"] [14];
		$sql_cred = 'INSERT INTO `maint_dtl`(`veh_id`, `BA_no`, `oil_ch_dt`, `oil_ch_km`, `oil_ch_exp`, `air_filter_dt`, `air_filter_km`, `air_filter_exp`, `fuel_filter_dt`,' . '`fuel_filter_km`, `fuel_filter_exp`, `bty_chg_dt`, `bty_chg_exp`, `steering_oil_dt`, `steering_oil_exp`) VALUES ' . '(:veh_id,:BA_no,:oil_ch_dt,:oil_ch_km,:oil_ch_exp' . ',:air_filter_dt,:air_filter_km,:air_filter_exp,' . ':fuel_filter_dt,:fuel_filter_km,:fuel_filter_exp,' . ':bty_chg_dt,:bty_chg_exp,:steering_oil_dt,:steering_oil_exp)';
		$quer_cred = $bdd->prepare ( $sql_cred );
		$quer_cred->bindParam ( ":veh_id", $veh_num );
		$quer_cred->bindParam ( ":BA_no", $BA_no_sel );
		$quer_cred->bindParam ( ":oil_ch_dt", $oil_ch_dt );
		$quer_cred->bindParam ( ":oil_ch_km", $oil_ch_km );
		$quer_cred->bindParam ( ":air_filter_dt", $air_filter_dt );
		$quer_cred->bindParam ( ":air_filter_km", $air_filter_km );
		$quer_cred->bindParam ( ":fuel_filter_dt", $fuel_filter_dt );
		$quer_cred->bindParam ( ":fuel_filter_km", $fuel_filter_km );
		$quer_cred->bindParam ( ":bty_chg_dt", $bty_chg_dt );
		$quer_cred->bindParam ( ":steering_oil_dt", $steering_oil_dt );
		$quer_cred->bindParam ( ":oil_ch_exp", $oil_ch_exp );
		$quer_cred->bindParam ( ":air_filter_exp", $air_filter_exp );
		$quer_cred->bindParam ( ":fuel_filter_exp", $fuel_filter_exp );
		$quer_cred->bindParam ( ":bty_chg_exp", $bty_chg_exp );
		$quer_cred->bindParam ( ":steering_oil_exp", $steering_oil_exp );
		$quer_cred->execute ();
		if ($quer_cred->rowCount () > 0)
			echo true;
		else
			echo false;
	} catch ( Exception $e ) {
		echo $e;
	}
}

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

if (isset ( $_POST ["send_data"] [0] )) {
	try {
		$veh_id = $_POST ["send_data"] [0];
		$sql_show = "select * from maint_dtl where veh_id = '$veh_id'";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $exc ) {
		echo $exc->getTraceAsString ();
	}
}
if (isset ( $_POST ["send_data_tire"] [0] )) {
	try {
		$veh_id = $_POST ["send_data_tire"] [0];
		$sql_show = "select * from tyre_dtls_table where veh_id = '$veh_id'";
		$quer_show = $bdd->prepare ( $sql_show );
		$quer_show->execute ();
		$res_show = $quer_show->fetchAll ( PDO::FETCH_ASSOC );
		echo json_encode ( $res_show );
	} catch ( Exception $exc ) {
		echo $exc->getTraceAsString ();
	}
}
if (isset ( $_POST ['alert_days'] [0] ) && isset ( $_POST ['alert_days'] [1] ) && isset ( $_POST ['alert_days'] [2] )) {
	if ($_POST ['alert_days'] [2] == 'all') {
		
		try {
			$sql = "SELECT veh_id,BA_no,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'),STR_TO_DATE(`oil_ch_exp`,'%Y-%m-%d')) AS oil_days,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`air_filter_exp`,'%Y-%m-%d')) AS air_days,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`fuel_filter_exp`,'%Y-%m-%d')) AS fuel_days,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`bty_chg_exp`,'%Y-%m-%d')) AS bttr_days,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`steering_oil_exp`,'%Y-%m-%d')) AS steer_days
					FROM `maint_dtl`";
			$query = $bdd->prepare($sql);
			$query->execute();
			echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
		
		
		
	}
	if ($_POST ['alert_days'] [2] != 'all') {
	
		try {
			$sql = "SELECT veh_id,BA_no,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'),STR_TO_DATE(`oil_ch_exp`,'%Y-%m-%d')) AS oil_days,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`air_filter_exp`,'%Y-%m-%d')) AS air_days,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`fuel_filter_exp`,'%Y-%m-%d')) AS fuel_days,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`bty_chg_exp`,'%Y-%m-%d')) AS bttr_days,
					DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`steering_oil_exp`,'%Y-%m-%d')) AS steer_days
					FROM `maint_dtl`";
			$query = $bdd->prepare($sql);
			$query->execute();
			echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
				
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	
	
	
	
	}
}