<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="../assets/js/p.js"></script>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="shortcut icon" href="../img/favicon-color.png">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contact-container {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            width: 900px;
        }

        .contact-container > div {
            padding: 30px;
        }

        .details-container {
            background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
        }

        .details-container > p {
            margin: 10px;
        }

        .details-container > h6 {
            margin: 25px;
        }

        .social {
            margin: 10px 35px;
        }

        .social > i {
            font-size: 25px;
            margin-right: 15px;
        }
    </style>
</head>
<body id="login" style="background:url(../images/bg/mainbg.png)">


    <div class="main">

        <div class="contact-container row">
            <div class="details-container col-6">
                <h2>Contact Us</h2>
                <p>Welcome to EZEMS.! We value your feedback, inquiries, and suggestions. Our dedicated team is here to assist you in any way we can. Feel free to reach out to us through the channels below:</p>

                <h6><span><i class="fa-solid fa-location-dot"></i></span> 24/7., Kilifi, Kenya </h6>

                <h6><span><i class="fa-solid fa-envelope"></i></span> ezems.developers@gmail.com</h6>

                <h6><span><i class="fa-solid fa-phone"></i></span> (254)1010086123</h6>

                <div class="social">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                </div>
            </div>

            <div class="form-cotainer col-6">
                <form action="hireme-message.php" method="POST">
                    <div class="form-group">
                        <label for="name" style="color:black">Your Name:</label>
                        <input type="text" class="form-control" id="name" name="fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="email" style="color:black">Your Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message" style="color:black">Message:</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Send Message</button>
                </form>
            </div>
        </div>

    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
