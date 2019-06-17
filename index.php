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

                    <button type="button" class="btn btn-primary" data-toggle=".modal" data-target=".modal">JOIN THE FIST</button>

                    <div class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>              
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <footer>
        <p>© Copyright Web 15 Academy All rights reserved 2019.</p>
    </footer>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/countdown.js"></script>

</body>

</html>