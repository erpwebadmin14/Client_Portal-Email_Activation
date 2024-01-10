<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Portal | Email Activation</title>

    <!--CSS-->
    <link href="assets/css/home-001-style.css" rel="stylesheet">

    <!-- FONT STYLE -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900' rel='stylesheet'>
    
    <!-- Using a CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!--LOGO OF MEGAWORLD HERE-->
        <img src="public/img/MEG-Logo.png" class="logo" onError="this.style.display='none'" alt="Megaworld Corporation">
    </header>

    <section>
        <div class="container">
            <div class="left">
                <form>
                    <div class="form-header">
                        <h1 class="header"><b> ACTIVATE ACCOUNT </b></h1>
                        <h6 class="subheader"> To create your account, please fill out the following fields: </h6>
                    </div>
                    <div class="inputs">
                        <div class="row g-3" id="row1">
                            <div class="col-md-6">
                                <input type="text" class="form-control px-3 py-0.5" placeholder="First Name" id="inputFirstName">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control px-3 py-0.5" placeholder="Last Name" id="inputSurname">
                            </div>
                            <div class="col-md-12">
                                <input type="date" class="form-control px-3 py-0.5" placeholder="Birth Date" id="inputBirthdate">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control px-3 py-0.5" placeholder="+63 | Mobile No." id="inputMobile">
                            </div>
                        </div>

                        <div class="row g-3" id="row2">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Email Address</label>
                                <input type="text" class="form-control px-3 py-0.5" id="inputEmail4">
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control px-3 py-0.5" id="inputPassword">
                            </div>
                            <div class="col-md-12">
                                <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control px-3 py-0.5" id="inputConfirmPassword">
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <p class="form-check-label" for="gridCheck1">
                                I understand and agree to Megaworld Corporation's <u> Privacy Statement </u>
                            </p>
                        </div>

                        <a href="home-002.php"><button type="button" class="btn text-center">ACTIVATE</button></a>
                    </div>
                </form>
            </div>

            <div class="right">
                <div class="phone">
                    <img src="public/img/phone_screen.jpg" class="screen" onError="this.style.display='none'" alt="">
                    <img src="public/img/iphone.png" class="case" onError="this.style.display='none'" alt="">
                    
                    <div class="glow"></div>
                </div>
                <div class="app_store">
                    <a href="#"><img src="public/img/apple.png" class="apple" onError="this.style.display='none'" alt=""></a>
                    <a href="#"><img src="public/img/Google_Play.webp" class="google_play" onError="this.style.display='none'" alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <!--Footer Here-->
    <footer >
        <p>© 2024 Megaworld Corporation</p>
        <p>All rights reserved.</p>
        <a href="https://www.megaworldcorp.com/privacy-policy" target="_BLANK">Privacy Policy </a>
        <a href="https://www.megaworldcorp.com/contact" target="_BLANK">Contact Us </a>
        <a href="#">Report a Bug </a>
    </footer>

</body>
</html>