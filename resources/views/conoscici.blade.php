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
                    <a class="nav-link" href="/conoscici">Conoscici</a>
                </li>
                <li class="nav-item px-2 my-list-class">
                    <a class="nav-link" href="/contattaci">Contattaci</a>
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


    <main class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-4">
                <h2>Chi siamo?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus molestiae eveniet, voluptatum ut iste quia voluptas quae aperiam. Hic amet ex voluptate quae nesciunt ab suscipit molestias quam atque nulla!
                Ab iure blanditiis, quis laboriosam ex quos inventore vero impedit, nulla, maiores doloremque optio molestiae esse voluptatum omnis laudantium autem accusamus voluptatem sint. Minus nostrum placeat nesciunt totam repudiandae ipsum?</p>                
            </div>
            <div class="col-6">
                <img src="https://picsum.photos/400" alt="">
            </div>
        </div>
    </main>

    <!-- SCRIPT di BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>