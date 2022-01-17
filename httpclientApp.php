<?php
$errors = $optparams = $data = [];
$inputVal = ['url', 'headers', 'params', 'method'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($inputVal as $val) {
        if (empty($_POST[$val]) && !in_array($val, $optparams)) {
            $errors[] = $val;
        } else {
            $data[$val] = $_POST[$val];
        }
    }
	if(count($errors)){
		echo "Invalid Data";
	}else{
		$params = json_decode($data['params'], null);
		$headers = json_decode($data['headers'], null);
		$header_list = '';
		foreach($headers as $key => $val){
			$header_list .= $key . ": " .$val . " \r\n";
		}
		$inputdata = http_build_query(
			$params
		);
		$params = array('http' =>
			array(
				'method'  => $data['method'],
				'header'  => $header_list,
				'content' => $inputdata
			)
		);
		try {
			$stream_data  = stream_context_create($params);
			$result = file_get_contents($data['url'], false, $stream_data);
			echo "Result : " . $result;
		}catch(Exception $e) {
			echo 'Error Mesage: ' .$e->getMessage();
		}	
	}
}