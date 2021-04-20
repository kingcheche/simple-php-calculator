<DOCTYPE html>
<html>
<head> 
<title>Simple Calculator</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<!-- Calculator Display -->
<fieldset>
<Legend> Calculator</legend>
<!-- Using method=GET so the form input will not be saved on reload -->
<form name="cal" method="GET">
<?php
//Here is where the magic begins
if(isset($_GET["enter"]))
{
// Check if display is empty - and if its empty show an error
   if (empty($_GET["display"])) {
      echo "<span class='error'> Input Error:Clr <span class='c'> C  </span> </span> ";
      echo  "<hr>";
      
   } else {
//Convert the display inputs to a new variable for ease and perform futher checks      
      $ma =$_GET["display"];      
      switch ($ma) {

         //check if the inputs starts with a "/" and display and error
            case (str_starts_with($ma, '/')):
           echo "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
           echo  "<hr>";
            break;
            //check if the inputs starts with a "*" and display and error
            case (str_starts_with($ma, '*')):
           echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
           echo  "<hr>";
            break;
             //check if the inputs starts with a "." and display and error
             case (str_starts_with($ma, '.')):
               echo "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
               echo  "<hr>";
                break;
            //check if the inputs ends with a "/" and display and error
            case (str_ends_with($ma, '/')):
           echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
           echo  "<hr>";
            break;
            //check if the inputs ends with a "*" and display and error
            case (str_ends_with($ma, '*')):
            echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
            echo  "<hr>";
               break;
            //check if the inputs ends with a "-" and display and error
               case (str_ends_with($ma, '-')):
            echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
            echo  "<hr>";
               break;
            //check if the inputs ends with a "+" and display and error
               case (str_ends_with($ma, '+')):
            echo  "<span class='error'> Syntax Error:Clr <span class='c'> C  </span> </span> ";
            echo  "<hr>";
               break;
            //If all the validation is passed process the answer
               default: 
            //Because the input is a string, convert to inter and evaluate   
               $answer = eval('return '.$ma.';');
            //Save and display the question   
              $question = $_GET["display"];
            echo $question;
            echo "<hr>";
            //Display process answer (Limit to 13)
            $answer = substr($answer,0,13);
            echo ("<span class='answer'>$answer</span>");
   }
}
}
 else 
 {
    //Show empty form on default page load
   $displayForm ="<input type = 'text'  name='display' class='display' maxlength = '11'>";
   echo $displayForm;
   echo "<hr>";
};

?>
</fieldset>
<br>
<!-- Form that send its value to display when you click on it -->
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