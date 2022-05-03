 
<html>
    <head>
        <title>Academia - @yield('titulo')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <br>
        <br>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a href="/cursos" class="navbar-brand">  <img src="/logo/calico.png" width="30" height="30" alt=""></a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Cursos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/cursos/create">Crear curso</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/cursos">Ver cursos</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Docentes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/docentes/create">Agregar docentes</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/docentes">Ver docentes</a>
                        </div>
                        <li class="nav-item active">
                            <a class="nav-link" href="/nosotros">Sobre nosotros <span class="sr-only">(current)</span></a>
                        </li>
                      </li>
                </ul>
            </div>
        </nav>
        <br>
        <div class="container">
            <br>
            @yield('contenido')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>