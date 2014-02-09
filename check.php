<?php
       header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');
 
    // The JSON standard MIME header.
     /*  header('Content-type: application/json');
    include("conn.php");
    $action = $_REQUEST['action']; // We dont need action for this tutorial, but in a complex code you need a way to determine ajax action nature
    $action = $_POST['action'];
    $formData = json_decode($_POST['formData']); // Decode JSON object into readable PHP object
    $username = $formData->{'username'}; // Get username from object
    $password = $formData->{'password'}; // Get password from object
    $q="SELECT * FROM users WHERE username = $username AND password = $password";

    $rs=mysql_query($q);
    $r=mysql_num_rows($rs);
    //$output = array('status' => true, 'massage' => 'Welcome!');
    //if($r != 0)
    //{
    	//$output = array('status' => true, 'massage' => 'Welcome!');
    	//$result=true;
    //else
    //{
    	//$output = array('status' => true, 'massage' => 'Welcome!');
    //	 $result=false;
    //}*/
     $result=true;
    print  json_encode($result);
       
    
    
    
?>