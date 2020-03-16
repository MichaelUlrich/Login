
<?php
error_reporting(E_ALL | E_STRICT);

$servername = "sql2.njit.edu";
$serverUsername = "ek95";
$serverPassword = "epi8o1iaT";
 $db = "ek95";
 // Create connection
 $conn = mysqli_connect("sql2.njit.edu", "ek95", "epi8o1iaT", "ek95");
 mysqli_select_db($conn, 'ek95');

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . mysqli_connect_error());
 } else {
        echo "\0"; //Won't echo any text without for some reason
}


 $query = mysqli_query($conn, "SELECT * FROM login");
$row = mysqli_fetch_array($query);


 $hashed_user_pw = MD5($_POST['password']);


if($row['username'] == $_POST['username'] && $row['password'] == $hashed_user_pw) {
        //$json_array = array(
        //      "db" => "true"
        //);
        //echo json_encode($json_array);
        echo 'Database Logged in' . "<br>";
} else {
        //$json_array = array(
        //        "db" => "false"
        //);
        //echo json_encode($json_array);
        //
        echo 'Database Rejected Input' . "<br>";
}




 mysqli_close($conn);
?>
