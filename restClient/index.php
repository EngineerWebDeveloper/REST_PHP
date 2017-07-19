<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rest</title>
</head>
<body>
    <h2>ENTER BOOK :</h2> 
    <form action = "" method = "POST">
     <input type = "text" name = "name"> <br />
      <input type = "submit" name = "submit"> 
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        
        //Resourse Address        
        $url = "http://localhost/rest/$name";
        
        //Send request to Resourse        
        $client = curl_init($url);
        
        curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
        
        //get response from resource
        $response = curl_exec($client);
        
        //echo $response;
        
        //decode        
        $result = json_decode($response);
        
        echo $result->data;
        
    }

?>