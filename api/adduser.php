<?php
include(getenv('MYAPP_CONFIG'));

$UserName = $_REQUEST["UserName"];
$PwdHash = $_REQUEST["PwdHash"];
$hashed_pwd = hash('sha256', $PwdHash);

// Create connection
 

$conn = mysqli_connect($DB_URL, $DB_USER, $DB_PWD, $DB_NAME);
$sqlifexsat = "SELECT ID,UserName FROM users where UserName= '$UserName'";
$result = mysqli_query($conn, $sqlifexsat);

if (mysqli_num_rows($result) > 0) {
   $response_array['status'] = "fail";
   $response_array['message'] = "Username already exists";
} else {
   $sql = "INSERT INTO users(UserName,PwdHash) VALUES('$UserName','$hashed_pwd')";
   mysqli_query($conn, $sql);

   // if ($conn->error) {
   //     $response_array['status'] = mysqli_error($conn);
   //     echo json_encode($response_array);
   // }
   $response_array['status'] = "success";
   $response_array['message'] =    "{$UserName} successfully added";
}

echo json_encode($response_array);




mysqli_close($conn);
