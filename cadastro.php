<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>SisPHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            body {
                background-color: #DCDCDC;
            }
        </style>
    </head>
    <body>
        <img src="imagens/logosenai.png" width="20%" height="20%"/>
        <hr/>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SisPHP</a>
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="cadastro.php">Cadastro</a>
                <a class="nav-link" href="#">Dados</a>
                <a class="nav-link" href="#">Sobre</a>
            </div>
        </div>
        </div>
        </nav>
        </header>
        <div class="container-fluid">
      <br>
      <center>
      <h1><p class="text-white">SisPHP - Cadastro de Pessoa</p></h1>
      </center>
      <br>
      <section>
      <div class="row justify-content-center row-cols-2 row-cols-md-2 mb-3 text-justify">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3 text-center">
                    <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-file-earmark-richtext" viewBox="0 0 16 16">
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
                </svg><b>Cadastro de Pessoa</b></h4>
                </div>
            <div class="card-body">
                <form action="cad.php" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Seu nome" required/>
                        <br/>
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control" name="datanascimento" required/>
                        <br/>
                        <label>Celular</label>
                        <input type="number" class="form-control" name="celular" required/>
                        <br/>
                        <label>Sexo</label>
                        <select class="custom-select" name="sexo">
                            <option selected>Escolha...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                        <br/><br/>
                        <button type="submit" class="btn btn-secondary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
    </div>
        </section>
        <footer>
            <hr/>
            <center><b>Desenvolvido pela turma TDS05 - SENAI - 2021</b></center>
        </footer>
    </body>
</html>