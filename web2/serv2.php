<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>web.com</title>
</head>
<body>
<?php
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        function button1() { 
            require 'vendor/autoload.php';

            $client = new \Goutte\Client();
            $crawler = $client->get('https://www.youtube.com/watch?v=LUTVUGDOzOM', ['future' => true]);
            $a = $crawler->filter('a')->text();          
            echo $a; 
            sleep(mt_rand(105, 111));
        } 
        function button2() { 
            echo "This is Button2 that is selected"; 
        } 
    
?>
  
<form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
          
        <input type="submit" name="button2"
                class="button" value="Button2" /> 
</form>
</body>
</html>
