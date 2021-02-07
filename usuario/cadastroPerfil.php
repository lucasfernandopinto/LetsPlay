<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PFC</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <div class="container-fluid" id="nav">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/logo.png" id="logo">
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        <p class="text-monospace">Página Inicial</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="planosAula.php">
                                        <p class="text-monospace">Planos de Aula</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="disciplinas.php">
                                        <p class="text-monospace">Disciplinas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="temasTransversais.php">
                                        <p class="text-monospace">Temas Transversais</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="jogos.php">
                                        <p class="text-monospace">Jogos</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">
                                        <p class="text-monospace">Entrar</p>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="cadastroPerfil.php">
                                        <p class="text-monospace">Cadastrar-se</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">

        <div class="col-sm-12 text-center my-3">
            <h1>Cadastro de Perfil</h1>
            <div class="row justify-content-center mb-5 my-5">
                <div class="col-sm-12" id="iconCadastro">
                    <svg class="bi bi-person-plus-fill" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7.5-3a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z"
              clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z"
              clip-rule="evenodd" />
          </svg>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-5">
                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Nome..." required>
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="perfil">Tipo de Perfil</label>
                            <select class="custom-select d-block w-100" id="perfil" required>
                <option value="">Escolha...</option>
                <option>Aluno/Usuário</option>
                <option>Professor</option>
              </select>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="inputEmail">E-mail</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="exemplo@gmail.com" required>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="inputPassword">Senha</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Senha..." required>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="inputPassword">Confirmar Senha</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Confirmar Senha..." required>
                        </div>

                        <div class="form-group col-sm-12">
                            <div class="form-check">
                                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">Desejo receber novidades por e-mail
                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <a href="index.php" class="btn btn-primary">Cancelar </a>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-4 bg-light" id="rodape">
        <div class="col-sm-12">
            <span class="text-muted">&copy 2020</span>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>

</html>