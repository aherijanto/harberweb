<?php
	session_start();
	date_default_timezone_set("Asia/Jakarta");

	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/

	if($_POST["id"]) {

		$wareid = $_POST["id"];

			$conn2 = mysqli_connect('localhost','mimj5729_myroot','myroot@@##','mimj5729_matahari');
			$result = mysqli_query($conn2,"select * from wwarehouse where ware_id = '$wareid';");
			if(!$result){
				die();
				echo 'noresult';
			}else{
				$jumrec=mysqli_num_rows($result);
			}
			

			if($jumrec>0){
				$record = mysqli_fetch_array($result);
				$arr = array('id' => $record["ware_id"],
							 'nm' => $record["ware_name"],
                             'loc' => $record["ware_loc"]
							 );
			}
			else{
				$arr = array('id' => '0',
							 'nm' => ''
							 );
			}

			echo json_encode( $arr );


	}
?>