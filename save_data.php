<?php

if(isset($_POST['image'])){

	if (file_exists('data.json')){
		//if file exists open the file and append the data
		$json_file = fopen("data.json", "a") or die("Unable to open file!");
		$current_data = file_get_contents('data.json');
		$array_data = json_decode($current_data, true);

		$extra = array('imageURL' => $_POST['image'],);

		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		file_put_contents('data.json', $final_data);
		fclose($json_file);		

	}else{

		//create a json file and save the data in it
		$json_file = fopen("data.json", "a") or die("Unable to open file!");
		$current_data = file_get_contents('data.json');
		$array_data = json_decode($current_data, true);

		$extra = array('imageURL' => $_POST['image'],);

		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		file_put_contents('data.json', $final_data);
		fclose($json_file);		
	}

} 

?>