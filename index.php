<?php 

    $_SESSION["errors"] = [];
    if(!empty($_POST["name"]) and !empty($_POST["firstname"]) and !empty($_POST["mail"])){
        // regex pour pseudo
        $pattern = "#^[a-zA-Z0-9]+#";
        $name = preg_match($pattern, $_POST['name'], $matches_name);
        $firstname = preg_match($pattern, $_POST['firstname'], $matches_first);     

        if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL) and $matches_name[0] === $_POST['name'] and $matches_first[0] === $_POST['firstname']){
            require_once "app/pdo.php";
            //on verifie le mail unique
            $mails = $pdo->prepare("SELECT * FROM user WHERE email= ?");
            $mails->execute([$_POST['mail']]);
            $mail = $mails->fetchAll();

            if(empty($mail)){
                // inscription dans la DB
                $req = $pdo->prepare("INSERT INTO user SET name=?, firstname=?, email=?");
                $req->execute([$_POST["name"], $_POST["firstname"], $_POST["mail"]]);

                $_SESSION["errors"][] = "Merci {$_POST['name']}, bienvenue au fond du fun ! ";
            } else {
                $_SESSION['errors'][] = "Cette adresse mail est déjà utilisée connard !";
            }
    
        } else {

            $_SESSION["errors"][] = "Votre Email ou Pseudo n'est pas valide, pauvre planche !";
        }

    } else {
        $_SESSION["errors"][] = "Vous n'avez pas tout rempli, abruti..";
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <p class='errors'>
                <?php 
                    foreach($_SESSION["errors"] as $error){
                        echo $error;
                    }
                ?>
            </p>
            <div class="row">
                <div class="col-12">

                    <div id="myModal" class="modal">

                        <div class="modal-content">

                            <span class="close">&times;</span>

                            <h2>Join Newsletter</h2>

                            <form action="#" method="post">

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

                                <button type="submit" id="submit">Be a Fister</button>
                            
                            </form>

                        </div>

                    </div>

                </div>
            </div>
                  
        </div>             

    </main>

    <footer>

        <div class="row">
            <div class="col-12">
                <p>© Copyright Web 15 Academy - All rights reserved 2019.</p>
            </div>
        </div>

    </footer>

    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="node_modules/jquery/dist/jquery.js"></script>

</body>

</html>