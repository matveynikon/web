<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>web.com</title>
</head>
<body>
<?php

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->click('#toggleButton');
    }
}
?>
  
<form method="post"> 
        <input type="submit" name="FirstCest"
                class="button" value="Button1" /> 
          
</form>
</body>
</html>
