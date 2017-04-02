<?php
require_once 'bdd.php';
if(isset($_GET["veh_id"])){
	$veh_id = $_GET["veh_id"];
	$sql = "SELECT * FROM maint_dtl WHERE veh_id = :veh_id";
	$query = $bdd->prepare($sql);
	$query->bindParam(":veh_id", $veh_id);
	$query->execute();
	echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
}

/*
 * Array
(
    [BA_no_sel] => 2
    [oil_ch_km] => 2
    [oil_ch_exp] => 
    [fuel_filter_dt] => 
    [fuel_filter_km] => 2
    [fuel_filter_exp] => 
    [steering_oil_dt] => 
    [steering_oil_exp] => 
)

 * */

if(isset($_POST["BA_no_sel"])){
	try {
		$sql = "UPDATE `maint_dtl` SET
			`BA_no`=:BA_no,`oil_ch_dt`=:oil_ch_dt,
			`oil_ch_km`=:oil_ch_km,`oil_ch_exp`=:oil_ch_exp,
			`air_filter_dt`= :air_filter_dt,`air_filter_km`= :air_filter_km,
			`air_filter_exp`= :air_filter_exp,`fuel_filter_dt`= :fuel_filter_dt,
			`fuel_filter_km`= :fuel_filter_km,`fuel_filter_exp`= :fuel_filter_exp,
			`bty_chg_dt`= :bty_chg_dt,`bty_chg_exp`= :bty_chg_exp,`steering_oil_dt`= :steering_oil_dt,
			`steering_oil_exp`= :steering_oil_exp WHERE `veh_id`=:veh_id";
		$query = $bdd->prepare($sql);
		$query->bindParam("BA_no", $_POST["BA_no_sel"]);
		$query->bindParam("oil_ch_dt", $_POST["oil_ch_dt"]);
		$query->bindParam("oil_ch_km", $_POST["oil_ch_km"]);
		$query->bindParam("oil_ch_exp", $_POST["oil_ch_exp"]);
		$query->bindParam("air_filter_dt", $_POST["air_filter_dt"]);
		$query->bindParam("air_filter_km", $_POST["air_filter_km"]);
		$query->bindParam("air_filter_exp", $_POST["air_filter_exp"]);
		$query->bindParam("fuel_filter_dt", $_POST["fuel_filter_dt"]);
		$query->bindParam("fuel_filter_km", $_POST["fuel_filter_km"]);
		$query->bindParam("fuel_filter_exp", $_POST["fuel_filter_exp"]);
		$query->bindParam("bty_chg_dt", $_POST["bty_chg_dt"]);
		$query->bindParam("bty_chg_exp", $_POST["bty_chg_exp"]);
		$query->bindParam("steering_oil_dt", $_POST["steering_oil_dt"]);
		$query->bindParam("steering_oil_exp", $_POST["steering_oil_exp"]);
		$query->bindParam(":veh_id", $_POST["veh_num"]);
		$query->execute();
		if($query->rowCount()){
			echo "Done";
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	
		
	
}