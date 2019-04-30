<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Tomasz Pankowski">
    <meta name="keywords" content="Sign Tattoo,tätowi̱e̱ren,STUDIO Düsseldorf,Johann Vaas,Tattoostudio, TATTOO DÜSSELDORF">
    <meta name="description" content="Tätowi̱e̱ren und düsseldorf? - Sign tatoo naturlich! Jedes Tattoo ist für mich ein einzigartiges Kunstwerk, welches nur in einem 
        ausführlichen Beratungsgespräch individuell für dich gestaltet werden kann.  
        Individualität, das ist es was ich mir zum größten Ziel gemacht habe">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/styles.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <title>Sign Tattoo | DAS TÄTOWIEREN STUDIO IN DÜSSELDORF</title>
</head>
<body class="text-white bg-dark">
    <nav class="navbar navbar-expand-md navbar-dark bg-gradient-black fixed-top mt-0 mt-md-4 shadow-lg opacity-08 border-top border-bottom border-dark">
        <a href="index.html" class="navbar-brand d-inline d-md-none">
            <img src="img/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-0 mx-md-auto lead py-2">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="stil.html" class="nav-link px-3">STIL</a>
                </li>
                <li class="nav-item">
                    <a href="tatowieren.html" class="nav-link">TÄTOWIEREN</a>
                </li>
                <li class="nav-item d-none d-md-block">
                    <a href="index.html" class="nav-link image-link">
                        <img src="img/logo.png" class="d-inline-block position-absolute" alt="logo">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="kunstler.html" class="nav-link">KÜNSTLER</a>
                </li>
                <li class="nav-item">
                    <a href="studio.html" class="nav-link">STUDIO</a>
                </li>
                <li class="nav-item">
                    <a href="kontakt.html" class="nav-link">KONTAKT</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container-fluid index-s-2 d-flex py-5">
        <div class="row my-auto w-100 ml-0">
            <div class="col-10 col-md-8 mx-auto text-center">
                <h3 class="section-title text-uppercase">Nachricht gesendet!</h3>
                <p class="lead pb-3">
                    Ihre Nachricht wurde registriert.
                </p>
                <table class="table table-responsive table-condensed text-white d-inline">                    
                    <tbody>
                        <tr>
                            <th class="w-25">Name:</th>
                            <td class="w-75">
                                <?php 
                                    if(isset($_POST['fname']))
                                    echo htmlspecialchars($_POST['fname']);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>
                                <?php 
                                    if(isset($_POST['femail']))
                                    echo htmlspecialchars($_POST['femail']);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nachricht:</th>
                            <td>
                                <?php 
                                    if(isset($_POST['fmessage']))
                                    echo htmlspecialchars($_POST['fmessage']);
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <footer class="container-fluid p-3 border-top border-dark">
        <div class="row">
            <ul class="list-inline mx-auto">
                <li class="list-inline-item">
                    <a href="https://www.facebook.com" class="icon-item mx-1"><span class="fa fa-facebook-official" rel="noreferrer"></span></a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.instagram.com" class="icon-item mx-1"><span class="fa fa-instagram" rel="noreferrer"></span></a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.twitter.com" class="icon-item mx-1"><span class="fa fa-twitter" rel="noreferrer"></span></a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="mx-auto text-center">
                <h3 class="section-title text-uppercase text-center">TÄTOWIEREN DÜSSELDORF</h3>
                <ul class="list-unstyled">
                    <li>Sign - Tattoo Düsseldorf</li>
                    <li>Johann Vaas</li>
                    <li>Köln Straße 123</li>
                    <li>12345 Düsseldorf</li>
                    <li>Telefon: +49 (0) 123 1234567</li>
                    <li>E-Mail: info&#64;mail.com</li>
                </ul>
            </div>
        </div>
        <div class="row border-top mx-3">
            <p class="mx-auto pt-2">Copyright &copy; 2019</p>
        </div>
    </footer>
    <script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>