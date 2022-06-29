<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Mon blog</title>
</head>
<body>
    <header>
        <div id="header-title">
            <h1 class="display-1 ms-4">Mon blog</h1>
            <h3 class="ms-4">Je fais ce que je veux avec mes cheveux !</h3>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">accueil</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">connexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">déconnexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">inscription</a>
                  </li>
                  <!-- bloc liste déroulante des catégories
                  --------------------------------------------------------------->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Catégories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Catégorie 1</a></li>
                        <li><a class="dropdown-item" href="#">Catégorie 2</a></li>
                        <li><a class="dropdown-item" href="#">Catégorie 3</a></li>
                    </ul>
                  </li>
                  <!--------------------------------------------------------------->
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main class="mt-2 pt-2 border-top border-secondary">
        <div class="d-flex flex-wrap col-10">
            <div class="card col-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id unde provident minus ut nemo est natus dolor, molestiae eveniet cumque.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                    <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem?</li>
                    <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id unde provident minus ut nemo est natus dolor, molestiae eveniet cumque.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                    <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem?</li>
                    <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id unde provident minus ut nemo est natus dolor, molestiae eveniet cumque.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                    <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem?</li>
                    <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id unde provident minus ut nemo est natus dolor, molestiae eveniet cumque.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                    <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem?</li>
                    <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id unde provident minus ut nemo est natus dolor, molestiae eveniet cumque.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                    <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem?</li>
                    <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id unde provident minus ut nemo est natus dolor, molestiae eveniet cumque.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                    <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem?</li>
                    <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id unde provident minus ut nemo est natus dolor, molestiae eveniet cumque.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                    <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem?</li>
                    <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id unde provident minus ut nemo est natus dolor, molestiae eveniet cumque.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                    <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem?</li>
                    <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id unde provident minus ut nemo est natus dolor, molestiae eveniet cumque.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                    <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, exercitationem?</li>
                    <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p class="text-center mt-2 pt-2 border-top border-secondary">Copyright - Beauvoir-Mon Blog - mars 2022</p>
    </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</html>
