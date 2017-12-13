<?php

    if (isset($_POST['generate-keys']))
    {
    	$secretKey = "Files/" . $_REQUEST['secretKey'];
    	$publicKey = "Files/" . $_REQUEST['publicKey'];

    	shell_exec(" openssl genrsa -out '".$secretKey."' 2048 ");
        shell_exec(" openssl rsa -in '".$secretKey."' -out '".$publicKey."' -pubout ");
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

                <div class="keys">
        			<a class="sk">Secret Key</a>
        			<input type="text" name="secretKey" placeholder="Insert the name you desire for your secret key" required><br>
        		</div>


        		<div class="keys">
        			<a class="pk">Public Key</a>
        			<input type="text" name="publicKey" placeholder="Insert the name you desire for your public key" required><br>
        		</div>

                <div class="button-content">
                    <button name="generate-keys" class="generate-button-2">Generate keys</button>
                </div>

    		</div>

        </form>

    </body>
</html>
