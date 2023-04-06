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
    <nav class="navbar navbar-dark my-bg-navbar fixed-top">
        <div class="container flex-nowrap">
            <a class="navbar-brand" href="/">
                <i class="fa-solid fa-globe logo"></i>
            </a>
            <!-- Parte NAV che si vede fino a schermi grandi -->
            <ul class="navbar-nav d-flex flex-row">
                @foreach ($links as $link)
                <li class="nav-item px-2 my-list-class">
                    <a class="nav-link" href="/">{{$link}}</a>
                </li>
                @endforeach
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
    
    
    
    
    <!-- Pagina Principale, MAIN CON CAROSELLO -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <!-- CARD SVIZZERA -->
            <div class="carousel-item item active" id="svizzera">
                <div class="carousel-caption d-flex flex-column justify-content-center align-item-center bg-caption pt-0">
                    <h1>Precisa e rilassante</h1>
                    <p class="text-center px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur cumque tenetur, porro consequuntur aut saepe?</p>
                </div>
            </div>
            <!-- CARD PAESAGGIO ZEN -->
            <div class="carousel-item item" id="zen">
                <div class="carousel-caption d-flex flex-column justify-content-center align-item-center bg-caption pt-0">
                    <h1>La pace dei sensi</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolor pariatur laboriosam odit esse reiciendis!</p>
                </div>
            </div>
            <!-- CARD BORGO ARANCIO -->
            <div class="carousel-item item" id="borgo">
                <div class="carousel-caption d-flex flex-column justify-content-center align-item-center bg-caption pt-0">
                    <h1>Borghi</h1>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <!-- Qui cominciano i pulsanti del CAROSELLO -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    
    <!-- sezione CONOSCICI -->
    <section class="container-color pb-3">
        <div class="row justify-content-center px-4 py-4">
            <!-- Immagine di lato -->
            <div class="col-12 col-md-5 d-flex justify-content-end pe-3">
                <img class="img-conoscici" src="/media/castello-sole.jpg" alt="">
            </div>
            <!-- Commento lato dx -->
            <div class="col-12 pt-4 text-center col-md-5 d-flex flex-column justify-content-center">
                <h3 class="text-font">Dalla passione</h3>
                <p class="text-font">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi dignissimos ad, facilis, porro, a deleniti sint nesciunt doloremque cupiditate ducimus laboriosam consectetur alias accusantium necessitatibus. Sequi autem nobis cum maxime?</p>
            </div>
        </div>
    </section>
    
    <!-- Sezione carousel + Card -->
    <!-- Questo carosello è quello per dispositivi con grandezza superiore al sm breakpoint -->
    <div class="container mt-5 pt-3">
        <div class="row">
            <div class="d-none d-sm-flex col-sm-12">
                
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- Card container -->
                            <div class="card-group">
                                <div class="card">
                                    <img src="/media/Carousel-images/architettura-bella.jpg" class="card-dim-img card-img-top" alt="...">
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="/media/Carousel-images/architettura-scura.jpg" class="card-dim-img card-img-top" alt="...">
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="/media/Carousel-images/bianco-nero.jpg" class="card-dim-img card-img-top" alt="...">
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Altre parti del carousel -->
                        <div class="carousel-item">
                            <div class="card-group">
                                <div class="card">
                                    <img src="/media/Carousel-images/vicolo.jpg" class="card-dim-img card-img-top" alt="...">
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="/media/Carousel-images/madrid.jpg" class="card-dim-img card-img-top" alt="...">
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="/media/Carousel-images/vicolo.jpg" class="card-dim-img card-img-top" alt="...">
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Terza serie di card -->
                        <div class="carousel-item">
                            <div class="card-group">
                                <div class="card">
                                    <img src="/media/Carousel-images/building-angolo.jpg" class="card-dim-img card-img-top" alt="...">
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="/media/Carousel-images/madrid.jpg" class="card-dim-img card-img-top" alt="...">
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="/media/Carousel-images/vecchi-nuovo.jpg" class="card-dim-img card-img-top" alt="...">
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Questo carosello è per dispositivi mobile inferiori di dimensioni al sm di bootstrap -->
    <div id="carosellomio" class="carousel slide d-sm-none">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carosellomio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carosellomio" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carosellomio" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <!-- CARD prima-card -->
            <div class="carousel-item active" id="prima-card">
                <div class="carousel-caption d-flex flex-column justify-content-center align-item-center bg-caption pt-0">
                    <h1>Precisa e rilassante</h1>
                    <p class="text-center px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur cumque tenetur, porro consequuntur aut saepe?</p>
                </div>
            </div>
            <!-- CARD seconda-card -->
            <div class="carousel-item" id="seconda-card">
                <div class="carousel-caption d-flex flex-column justify-content-center align-item-center bg-caption pt-0">
                    <h1>La pace dei sensi</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolor pariatur laboriosam odit esse reiciendis!</p>
                </div>
            </div>
            <!-- CARD terza-card -->
            <div class="carousel-item" id="terza-card">
                <div class="carousel-caption d-flex flex-column justify-content-center align-item-center bg-caption pt-0">
                    <h1>Borghi</h1>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <!-- Qui cominciano i pulsanti del CAROSELLO -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carosellomio" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carosellomio" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    
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

    <footer>
        <h3 class="text-center">Informazioni di contatto:</h3>
        <ul class="d-flex justify-content-evenly">
            <li class="my-nav-link"><i class="fa-solid fa-phone pe-2"></i>Telefono</li>
            <li class="my-nav-link"><i class="fa-solid fa-envelope pe-2"></i>Mail</li>
            <li class="my-nav-link"><i class="fa-brands fa-square-facebook pe-2"></i>Facebook</li>
            <li class="my-nav-link"><i class="fa-brands fa-square-instagram pe-2"></i>Instagram</li>
        </ul>
    </footer>
    
    
    
    
    
    <!-- CODICE DELLA MODALE -->
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Qui comincia il form all'interno -->
                <div class="modal-body bg-form-modal">
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                          <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                      </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- SCRIPT di BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>