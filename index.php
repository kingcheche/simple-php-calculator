<DOCTYPE html>
<html>
<head> 
<title>Simple Calculator</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
   <!-- <div class="relaod">
<form  name="relaod" action="index.php" method="POST">
   <input type="submit" value="Force reload">
</from>
</div> -->
<div class="container">
<fieldset>
<Legend> Calculator</legend>
<form name="cal" method="GET">
<?php

if(isset($_GET["enter"]))
{

   if (empty($_GET["display"])) {
      echo "<span class='error'> Input Error:Clr <span class='c'> C  </span> </span> ";
      echo  "<hr>";
      
   } else {
      
      $ma =$_GET["display"];      
      switch ($ma) {
            case (str_starts_with($ma, '/')):
           echo "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
           echo  "<hr>";
            break;
            case (str_starts_with($ma, '*')):
           echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
           echo  "<hr>";
            break;
            case (str_ends_with($ma, '/')):
           echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
           echo  "<hr>";
            break;
            case (str_ends_with($ma, '*')):
            echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
            echo  "<hr>";
               break;
               case (str_ends_with($ma, '-')):
            echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
            echo  "<hr>";
               break;
               case (str_ends_with($ma, '+')):
            echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
            echo  "<hr>";
               break;
               default: 
               $answer = eval('return '.$ma.';');
              $question = $_GET["display"];
            echo $question;
            echo "<hr>";
            echo ("<span class='answer'>$answer</span>");
   }
}
}
 else 
 {
   $displayForm ="<input type = 'text'  name='display' class='display' maxlength = '11'>";
   echo $displayForm;
   echo "<hr>";
};

?>
</fieldset>
<br>
<input type="button" value="7" class="num" onclick="cal.display.value+='7' ">
<input type="button" value="8" class="num" onclick="cal.display.value+='8' ">
<input type="button" value="9" class="num" onclick="cal.display.value+='9' ">
<input type="button" value="÷" class="opt" onclick="cal.display.value+='/' ">

<br>
<input type="button" value="4" class="num" onclick="cal.display.value+='4' ">
<input type="button" value="5" class="num" onclick="cal.display.value+='5' ">
<input type="button" value="6" class="num" onclick="cal.display.value+='6' ">
<input type="button" value="x" class="opt" onclick="cal.display.value+='*' ">

<br>
<input type="button" value="1" class="num" onclick="cal.display.value+='1' ">
<input type="button" value="2" class="num" onclick="cal.display.value+='2' ">
<input type="button" value="3" class="num" onclick="cal.display.value+='3' ">
<input type="button" value="-" class="opt" onclick="cal.display.value+='-' ">

<br>
<button href="index.php" class="clear"> C </button>
<input type="button" value="0" class="num" onclick="cal.display.value+='0' ">
<input type="button" value="." class="opt" onclick="cal.display.value+='.' ">
<input type="button" value="+" class="opt" onclick="cal.display.value+='+' ">
<br>
<input type="submit" name="enter" value="=" class="enter">
</form>
<p class="title">Simple 2-Display Calculator</p>
</div>

</body>
</html>