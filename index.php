<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>openguissl</title>
        <meta name="description" content="openguissl">
        <link rel="stylesheet" href="css/styles.css">
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
        <div class="main-content">

            <div class="contents-boxes">

                <div class="content1">
                    <section class="menu">
                        <div class="content">

                            <div class="icon">

                            </div>

                            <div class="title">
                                Encrypt & Decrypt
                            </div>

                            <div class="text">
                                This option will encrypt or decrypt a file for you. Easy right?
                            </div>

                            <div>
                                <a href="enc-dec.php" class="button">Let's do it</a>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="content2">
                    <section class="menu">
                        <div class="content">

                            <div class="icon">

                            </div>

                            <div class="title">
                                Generate Passwords
                            </div>

                            <div class="text">
                                You need strong passwords? <br> You came to the right place.
                            </div>

                            <div>
                                <a href="securepasswords.php" class="button">Let's generate</a>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="content3">
                    <section class="menu">
                        <div class="content">

                            <div class="icon">

                            </div>

                            <div class="title">
                                Calculate Hash
                            </div>

                            <div class="text">
                                This calculate hash for your files. <br> This is not Instagram.
                            </div>

                            <div>
                                <a href="hash.php" class="button">Let's calculate</a>
                            </div>

                        </div>
                    </section>
                </div>

            </div>


            <div class="contents-boxes">

                <div class="content4">
                    <section class="menu">
                        <div class="content">

                            <div class="icon">

                            </div>

                            <div class="title">
                                Calculate HMAC
                            </div>

                            <div class="text">
                                What I have to say!? <br> Hash but protected with a key.
                            </div>

                            <div>
                                <a href="hmac.php" class="button">Let's calculate</a>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="content5">
                    <section class="menu">
                        <div class="content">

                            <div class="icon">

                            </div>

                            <div class="title">
                                Generate RSA Keys
                            </div>

                            <div class="text">
                                You like to share? <br> Share public key with the world.
                            </div>

                            <div>
                                <a href="rsa.php" class="button">Let's generate</a>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="content6">
                    <section class="menu">
                        <div class="content">

                            <div class="icon">

                            </div>

                            <div class="title">
                                Digital Signature
                            </div>

                            <div class="text">
                                You don’t like digital signatures? <br> Trust me, is safer than handmade.
                            </div>

                            <div>
                                <a href="digitalsignature.php" class="button">Let's sign</a>
                            </div>

                        </div>
                    </section>
                </div>

            </div>

        </div>

    </body>
</html>
