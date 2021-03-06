<?php

    if (isset($_POST['generate-hash']))
    {
    	$fileIn = "Files/" . $_REQUEST['fileIn'];
    	$fileOut = "Files/" . $_REQUEST['fileOut'];
    	$algorithm = $_REQUEST['algorithm'];

    	shell_exec(" openssl dgst '".$algorithm."' '".$fileIn."' > '".$fileOut."' ");
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

    		<div class="container">
    			<div class="content">
    				<div class="box">
    					<input type="file" name="fileIn" id="file-1" class="inputfile inputfile-1" required>
    					<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose the file</span></label>
    				</div>
    			</div>
    		</div>
    		<script src="js/custom-file-input.js"></script>

    		<div class="options-area">

    				<div class="text-area">
    			        <a class="algorithm">Algorithm</a>
    			        <select id="Categories" name="algorithm" required><br>
				    <option selected disabled hidden>Select &nbsp; ▾</option>
    			            <option value="-sha256">SHA-256</option>
    			            <option value="-sha512">SHA-512</option>
    			        </select>
    				</div>


    				<div class="file-out-hash">
    					<a class="ficheiro-saida">File Out</a>
    					<input type="text" name="fileOut" placeholder="Insert the file out name" required><br>
    				</div>

                    <div class="button-content">
                        <button name="generate-hash" class="generate-button-2">Calculate Hash</button>
                    </div>


    		</div>

        </form>

    </body>
</html>
