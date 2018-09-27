<?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://cp4.njit.edu/cp/home/login");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
                "user" => $_POST['username'],
                "pass" => $_POST['password'],
                "uuid" => "0xACA021"
        )));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HEADER, 1);

        $result = curl_exec($ch);
       // echo "<br>" .'curl error:'.curl_error($ch)."<br>";
        //echo "<br>";
        //echo $result."<br>";
        
        $json_array =array ('njit' => 'false');
        
        if (strpos($result,'welcome') !== false){
            
           // $json_array =array ('njit' => 'true');
           // echo json_encode($json_array)."<br>";
           echo 'Njit logged in' ."<br>";
        }
        else
        {
           // echo json_encode($json_array) ."<br>";
           echo 'Njit rejected input' ."<br>";
        }
         curl_close($ch);
        
        
        
        
        
        $ch = curl_init();
         
        $back_url='https://web.njit.edu/~ek95/lamp.php';
        $user = array('username' => $_POST['username'], 'password' =>$_POST['password']);
        curl_setopt($ch, CURLOPT_URL, $back_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, /*http_build_query*/ $user);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        
        //$json_array.push($result);
        //echo json_decode($result);
        //echo json_decode($_POST['json_array']);
        echo $result;
        //echo json_encode($result);
        curl_close($ch);
        
        
?>
