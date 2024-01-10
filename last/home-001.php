<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>

    <!-- FONT STYLE -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900' rel='stylesheet'>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(90deg, rgba(1, 122, 126, 0.8), rgba(2, 48, 49, 0.8)), url("../public/img/Uptown Bonifacio 3.jpeg");
      margin: 0;
      padding: 0;
    }
    header {
      padding: 20px;
    }

    .logo{
        filter: brightness(0) invert(1);
        width: 40%;
    }

    footer {
      color: white;
      text-align: center;
      padding: 10px 0;
      position: relative;
      bottom: 0;
      width: 100%;
    }
    .container {
      display: flex;
      min-width: 100%;
      flex-wrap: wrap;
      padding: 20px;
      justify-content: space-between;
    }
    .column {
      flex: 1;
      margin: 10px;
      padding: 20px;
      border: 1px solid #ddd;
      box-sizing: border-box;
    }

    form input{
        opacity: 0.5;
    }

    form label,
    .form-check p,
    .btn{
        color: white;
    }

    .header{
        color: var(--text_color);
        text-shadow: -2px 2px lightgray;
    }

    .inputs{
        width: 60%;
    }

    .btn{
        margin-left: 35%;
        padding: 5px 10px;
        border-radius: 50px;
        background-color: #00C4CC;
    }

    .form-check{
        margin-top: 20px;
    }

    #row2{
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        .logo{
            width: 60%;
        }
      .container {
        flex-direction: column;
        align-items: center;
      }
      .column {
        width: 100%;
      }
    }
    @media (min-width: 768px) {
        .logo{
            width: 30%;
        }
      .column {
        width: 100%;
      }
    }
  </style>
</head>
<body>

<header>
<img src="../public/img/MEG-Logo.png" class="logo" alt="Logo Here">
</header>

<div class="container">
  <div class="column">
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
  <div class="column">
    <h2>Right Column</h2>
    <p>This is the content for the right column.</p>
  </div>
</div>

    <footer>
        <div class="footer text-center">
            <div class="text-white"> 
                <p>© 2023 Megaworld Corporation</p>
                <p>All rights reserved.</p>
            </div>
            <div class="font-semibold space-x-5">
                <a href="https://www.megaworldcorp.com/privacy-policy" target="_BLANK">Privacy Policy </a>
                <a href="https://www.megaworldcorp.com/contact" target="_BLANK">Contact Us </a>
                <a href="#">Report a Bug </a>
            </div>
        </div>
    </footer>

</body>
</html>
