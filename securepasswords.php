<?php

    if (isset($_POST['generatePassword']))
    {
	$passwordLengh = $_REQUEST['password-lengh'];
    	$passwordFile = "Files/" . $_REQUEST['fileOut'];

    	shell_exec(" openssl rand -base64 1000 | head -c '".$passwordLengh."'  > '".$passwordFile."' ");
    }
?>


<html>

    <head>
            <meta charset="UTF-8">
            <title>openguissl</title>
            <meta name="description" content="openguissl">
            <link rel="stylesheet" href="css/main-styles.css">
            <link rel="shortcut icon" type="image/png" href="images/favicon.png">
            <script src="js/scripts.js"></script>
    </head>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a> <br><br>
        <a onclick="lightSide()">Join the Light Side</a> <br><br>
        <a onclick="darkSide()">Join the Dark Side</a>
    </div>
    <span id="side_menu" class="side_menu" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    

    <body onload="switchSide()">
        <form method="post">

    		<div class="options-area">

                <div class="password">
        			<a>Password length</a>
        			<input type="text" name="password-lengh" placeholder="Ex: 25" required><br>
        		</div>


        		<div class="password-file-out">
        			<a>File out</a>
        			<input type="text" name="fileOut" placeholder="Insert the name you desire for your password file" required><br>
        		</div>

                <div class="button-content">
                    <button name="generatePassword" class="generate-button-2">Generate password</button>
                </div>

    		</div>

        </form>

    </body>
</html>
