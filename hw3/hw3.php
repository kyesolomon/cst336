<?php
    echo  $_POST["name"] ;
?>$
<!DOCTYPE html>
<html>
    <head>
        <title>ASSIGNMENT 3: HTML Forms / PHP</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>@import url("hw3.css");</style>
    </head>
    <body>
        <!-- Form goes here -->
        <form action="confirmation.php"  method="post" >
            Name:
            <input type="text" name="name"><br><br>
            <?php
                $_POST = name;
                if ( empty($_POST['name']) ) {
	            echo "Please enter your name.";
                } else {
                echo "<p>Thank you, "  . $_POST['name'];
                }
            ?>
            Undergraduate Level:
            <select name="standing">
                <option value="freshman">Freshman</option>
                <option value="sophomore">Sophomore</option>
                <option value="junior">Junior</option>
                <option value="senior">Senior</option>
            </select><br><br>
            Gender:<br>
            <input type="radio" name="gender" value="male" checked>
            <label for="male">Male</label><br>
            <input type="radio" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" name="gender" value="other">
            <label for="other">Other</label>
            <br><br>
            Check all that apply to you:<br>
            <input type="checkbox" name="transportation1" value="Drive"> I drive to school.<br>
            <input type="checkbox" name="transportation2" value="Bus"> I take the bus to school.<br>
            <input type="checkbox" name="transportation3" value="Carpool"> I carpool to school.<br><br>
            <textarea name="message" rows="10" cols="30">Tell us how we can improve your transportation to CSUMB.
            </textarea><br><br>
            <button type="button" onclick="alert('You answers are submitted, thanks for taking this survey!')">Submit</button>
            <input type="reset">
        </form>
    </body> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>