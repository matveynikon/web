<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>web.com</title>

<style>

li {
  Float: Left;
  Font Family: Arial, Helvetica, sans-serif;
  display: inline;
  width: 150px;
  height: 50px;
  text-indent: 5px;
  background: cyan;
  position: center;
  overflow: scroll;
  border-radius: 5px;

}



li:hover {
  Float: Left;
  Font Family: Arial, Helvetica, sans-serif;
  display: inline;
  width: 150px;
  height: 50px;
  text-indent: 5px;
  animation-name: example;
  animation-duration: 0.5s;
  animation-delay: 0.2s;
  animation-fill-mode: both;
  animation-name: example2;
  animation-duration: 0.5s;
  animation-delay: 0.2s;
  animation-fill-mode: both;
  position: center;
  overflow: scroll;
  border-radius: 5px;
  background: cyan;


}

@keyframes example{
  from {center: 0px; background-color: mediumaquamarine;}
  to {center: 300px; background-color: darkcyan;}
}


@keyframes example2
 {
  from {center: 0px; background-color: lightseagreen;}
  to {center: 300px; background-color: darkturquoise;}
}

* {
   font-family:Arial, Helvetica, sans-serif;
   font-size: 35px;
   overflow: auto;
}

h1 {
   font-family: myFirstFont;
   font-size: 50px;
   color: turquoise;
   background-color: rgb(0,0,0); /* Fallback color */
   background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
   font-weight: bold;
   border: 3px solid #f1f1f1;
   position: absolute;
   top: 45%;
   left: 65%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 60%;
   padding: 20px;
   text-align: center;
}


p {
  background-color: turquoise;
  width: 800px;
  height: 200px;
  overflow: auto;
  border-radius: 10px;

 }

input {
 height: 30px;
 width: 200px;
 top: 25%;
 font-size: 20px;
 border: 1px solid;
 border-radius: 3px;
 }

form {
position: absolute;
top: 18%;
left: 50px;
}

.s {
  Float: Left;
  Font Family: Arial, Helvetica, sans-serif;
  display: inline;
  width: 195px;
  height: 30px;
  text-indent: 40%;
  background: springgreen;
  position: center;
  overflow: scroll;
  border-radius: 3px;
  font-size: 20px;
  padding: 5px;
 }

.s:hover {
  color: black;
  Float: Left;
  Font Family: Arial, Helvetica, sans-serif;
  display: inline;
  width: 195px;
  height: 30px;
  text-indent: 40%;
  animation-name: example3;
  animation-duration: 0.5s;
  animation-delay: 0.2s;
  animation-fill-mode: both;
  position: center;
  overflow: scroll;
  border-radius: 5px;
  background: mediumspringgreen;
  font-size: 20px;


}

@keyframes example3{
  from {center: 0px; background-color: turquoise;}
  to {center: 300px; background-color: aquamarine;}
}
label {
color: lightcyan;
height: 30px;
width: 100px;
top: 25%;
font-size: 20px;
}

.img4 {
   width: 100%;
   height: 550px;
   background-image: url('h.jpg');
   background-size: cover;
   background-repeat: no-repeat;
   filter: blur(3px);
  -webkit-filter: blur(3px);
}

</style>
</head>
<body>
<?php
require 'vendor/autoload.php';

$client = new \Goutte\Client();
$crawler = $client->request('GET', 'https://www.youtube.com/watch?v=LUTVUGDOzOM');
$pageH1 = $crawler->filter('span')->text();
sleep(mt_rand(1000, 3000));
var_dump($pageH1);
?>
<ul>
    <li><b><a href="css.html"><font color="black">Home</font></a></b></li>
    <li><b><a href="css.html"><font color="black">Tasks</font></a></b></li>
</ul>

<form>
    <label>URL:</label><br>
  <input type="text" value=""><br>
  <label>Daily runs:</label><br>
  <input type="text" value=""><br>
  <label>Minimum watch time:</label><br>
  <input type="text" value=""><br><br>
  <label>Maximum watch time:</label><br>
  <input type="text" value=""><br><br>
  <button type="button" onclick="">Try it</button>
</form>
</body>
</html>
