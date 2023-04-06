<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Natura</title>
    
    <!-- link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font a piacere da Google Fonts Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- script di FontAwesome -->
    <script src="https://kit.fontawesome.com/05cf7470eb.js" crossorigin="anonymous"></script>
    <!-- link al MIO foglio di stile CSS -->
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <!-- NAVBar interamente con bootstrap -->
    
    <!-- Navbar offcanvas bootstrap -->
    <nav class="navbar navbar-dark my-bg-navbar">
        <div class="container flex-nowrap">
            <a class="navbar-brand" href="/">
                <i class="fa-solid fa-globe logo"></i>
            </a>
            <!-- Parte NAV che si vede fino a schermi grandi -->
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item px-2 my-list-class">
                    <a class="nav-link" href="/">Destinazioni</a>
                </li>
                <li class="nav-item px-2 my-list-class">
                    <a class="nav-link" href="./conoscici">Conoscici</a>
                </li>
                <li class="nav-item px-2 my-list-class">
                    <a class="nav-link" href="./contattaci">Contattaci</a>
                </li>
                <li class="nav-item px-2 my-list-class">
                    <button type="button" class="btn my-btn-shop">Shop</button>
                </li>
            </ul>
            
            <!-- Parte NAV che si vede per schermi piccoli ancora da modificare -->
            <!-- Da qui parte effettivamente la parte a destra con l'icona -->
            <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-navbar-side" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <a class="offcanvas-title nav-link" id="offcanvasDarkNavbarLabel"><span class="my-logo-text">Travel</span><span class="my-logo-text2">IN</span></a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Destinazioni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/conoscici">Conoscici</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contattaci">Contattaci</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    
    
        <!-- Scritta con animazione -->
        <article class="container mt-5 text-center">
            <h1 class="slide-in-left">Preparati a darci la tua opinione!</h1>
        </article>
        
        
        <!-- FOOTER FORM -->
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 bg-form">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" placeholder="es. and@email.com" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control form-field" id="exampleInputPassword1">
                        </div>
                        <div class="my-3">
                            <textarea placeholder="Write here what you think" class="form-control form-field" cols="20" rows="5"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input form-field" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="reset" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrati</button>
                    </form>
                </div>
            </div>
        </div>

    
    
    <!-- SCRIPT di BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>