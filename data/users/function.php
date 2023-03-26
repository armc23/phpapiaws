<?php

require '../inc/config.php';


function error422($message){
   
    $data = [
        'status' => 422,
        'message' => $message,
      
    ];
    header("HTTP/1.0 422 Can not process the data");
    echo json_encode($data);
    exit();
}


function storeUser($userInput){

    global $conn;
    $name = mysqli_real_escape_string($conn,$userInput['name']);
    
    if (empty(trim($name))) {

        return error422('Enter username');
    }
    else {
        $query = "INSERT INTO users (username) VALUES('$name')";
        $result = mysqli_query($conn, $query);

        if($result){
            $data = [
                'status' => 201,
                'message' => 'User is Created successfully',
            ];
        
            header("HTTP/1.0 201 Created");
            return json_encode($data);
        }
        else{
            
            $data = [
                'status' => 500,
                'message' => 'Internal Server Error',
            ];
        
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }
    }

}

function getUserList(){

    global $conn;

    $query = "SELECT * from users";
    $query_run = mysqli_query($conn, $query);

    if($query_run){

        if(mysqli_num_rows($query_run)>0){

            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
            $data = [
                'status' => 200,
                'message' => 'User List Fetched Successfully',
                'data' => $res
            ];
        
            header("HTTP/1.0 200 OK");
            return json_encode($data);
        }
        else{
            $data = [
                'status' => 404,
                'message' => 'No User Found',
            ];
        
            header("HTTP/1.0 404 No User Found");
            return json_encode($data);

        }

    }
    else {
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
    
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
}


?>