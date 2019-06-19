<?php
    $db_name = "fisteaser";
    $db_host = "127.0.0.1";
    $db_admin = 'admin';
    $db_pass = 'plop';




    
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>fisteaser</title>
</head>

<body>
    <header>
        <img src="assets/img/logofistiland.jpg" alt="">
    </header>

    <main>

        <div class="container">

            <div class="row">
                <div class="col-12">
                
                    <h1>Opening coming soon :</h1>
                    
                    <div id="countdown"></div>
                </div>
            </div>

            <button id="myBtn">Join the Fist</button>

            <div class="row">
                <div class="col-12">

                    <div id="myModal" class="modal">

                        <div class="modal-content">

                            <span class="close">&times;</span>

                            <h2>Join Newsletter</h2>

                            <p>
                                <label for="name">Name
                                    <input type="text" name="name" id="name">
                                </label>
                            </p>

                            <p>
                                <label for="firstname">Firstname
                                    <input type="text" name="firstname" id="firstname">
                                </label>
                            </p> 

                            <p>
                                <label for="mail">Email
                                    <input type="email" name="mail" id="mail">
                                </label>
                            </p>

                            <button type="submit" id="submit">Join the Fist</button>

                        </div>

                    </div>

                </div>
            </div>
                  
        </div>             

    </main>

    <footer>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© Copyright Web 15 Academy All rights reserved 2019.</p>
                </div>
            </div>
        </div>

    </footer>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="node_modules/jquery/dist/jquery.js"></script>

</body>

</html>