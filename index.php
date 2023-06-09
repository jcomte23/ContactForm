<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Program made with PHP to send contact emails to anyone" />
    <meta name="keywords" content="form,email,php,jcomte23" />
    <meta name="sitedomain" content="https://github.com/jcomte23/ContactForm" />
    <meta name="organization" content="JCOMTEC" />
    <meta name="author" content="Javier Cómbita Téllez" />
    <meta name="designer" content="Javier Cómbita Téllez" />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="revisit-after" content="15days" />
    <link rel="apple-touch-icon" sizes="57x57" href="https://i.imgur.com/P1bp8G6.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="https://i.imgur.com/bLeRlVx.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://i.imgur.com/aY6t4a8.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://i.imgur.com/9MZCLDl.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://i.imgur.com/BB38ZG2.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="https://i.imgur.com/y6X4oNY.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://i.imgur.com/G0YGNjd.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="https://i.imgur.com/LGMbf41.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://i.imgur.com/0yxKqNm.png" />
    <link rel="icon" type="image/png" sizes="36x36" href="https://i.imgur.com/OsUhe1P.png" />
    <link rel="icon" type="image/png" sizes="48x48" href="https://i.imgur.com/8f81hvw.png" />
    <link rel="icon" type="image/png" sizes="72x72" href="https://i.imgur.com/S3FKBMU.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="https://i.imgur.com/roK1QC2.png" />
    <link rel="icon" type="image/png" sizes="144x144" href="https://i.imgur.com/892ITro.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="https://i.imgur.com/TqJg3hb.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://i.imgur.com/epr1mZP.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="https://i.imgur.com/SAJ2WZH.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://i.imgur.com/XJxRTbN.png" />
    <link rel="manifest" href="/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="https://i.imgur.com/iGcS0l3.png" />
    <meta name="theme-color" content="#ffffff" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css" />
    <title>Contact</title>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="https://getbootstrap.com/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" role="img" fill="currentColor" class="bi bi-bootstrap-fill" viewBox="0 0 16 16" aria-label="Bootstrap">
                        <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z" />
                        <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z" />
                    </svg>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./index.php"  class="nav-link px-2 text-white">Jcomte23</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="column-row mt-4">

        <?php if (isset($_POST["status"])) : ?>
            <?php if ($_POST["status"] == 'danger') : ?>
                <div class="col-lg-4 mx-auto alert alert-danger text-center" role="alert">
                    Error,message not sent!
                </div>
            <?php endif; ?>

            <?php if ($_POST["status"] == 'success') : ?>
                <div class="col-lg-4 mx-auto alert alert-success text-center" role="alert">
                    Message sent successfully!
                </div>
            <?php endif; ?>
        <?php endif; ?>


        <h2 class="text-center">Mail Sender</h2>
        <form action="./server.php" method="post" class="mt-2">
            <div class="column-row">
                <div class="col-lg-3 mx-auto">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" required name="name" id="Name" autocomplete="off" placeholder="Your name">
                </div>
                <div class="col-lg-3 mx-auto">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" required name="email" id="Email" autocomplete="off" placeholder="Destination Email">
                </div>
                <div class="col-lg-3 mx-auto">
                    <label for="subject" class="form-label">Subject of the email</label>
                    <input type="text" class="form-control" required name="subject" id="Subject" autocomplete="off" placeholder="The subject of your email">
                </div>
                <div class="col-lg-3 mx-auto">
                    <label for="message" class="form-label">Message of the email</label>
                    <textarea class="form-control" required name="message" id="message" rows="5" autocomplete="off" placeholder="Message"></textarea>
                </div>
            </div>
            <div class="text-center">
                <br>
                <button name="btnSend" class="btn btn-dark mx-auto" type="submit">Send</button>
            </div>
    </div>
    </form>
    </div>


    <br>
    <footer class="bg-dark  mt-auto text-center text-white ">
        <div class="container p-4 pb-0">
            <section class="">
                <!-- linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://co.linkedin.com/in/javier-c%C3%B3mbita-t%C3%A9llez-4b4aa3258?trk=people-guest_people_search-card" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/jcomte23" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg></a>
                <!-- GitHub -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/jcomte23/ContactForm" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
            </section>
        </div>


        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white text-decoration-none" href="https://github.com/jcomte23">Jcomte23</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>