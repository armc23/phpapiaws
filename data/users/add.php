<?php 
error_reporting(0);
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Controll-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('./function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "POST"){

    $inputData = json_decode(file_get_contents("php://input"),true);

    if(empty($inputData)){

        $sotreUser = storeUser($_POST);
    }
    else{
        $sotreUser = storeUser($inputData);
        
    }

    echo $sotreUser;
}
else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . ' Method not allowed',
      
    ];

    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}

?>