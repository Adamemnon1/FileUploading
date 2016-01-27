<!DOCTYPE html>
<html>

<head>
    <title> Calc </title>
    
</head>

<body>
    <form name= "input" action= "htmlResultPage.php" method= "GET">
        Input 1: 
        <input type="text" name="num1">
        
        Input 2: 
        <input type="text" name= "num2">
        
        
        <p>
         
            Operation:
            <input type= "radio" name = "op" value = "add" id = "addinput" />
                <label for = "addinput"></label>Add 
            <input type= "radio" name = "op" value = "sub" id = "subinput" />
                <label for = "subinput"></label>Sub 
            <input type= "radio" name = "op" value = "mult" id = "multinput" />
                <label for = "multinput"></label>Mult 
            <input type= "radio" name = "op" value = "div" id = "divinput" />
                <label for = "divinput"></label>Div 
            
        </p>
        <br>
        <input type="submit" value= "Calculate" >
        
    </form>
    
</body>

<?php

?>

</html>
