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
      <h1><p class="text-white">SisPHP - Baseado em Arrays</p></h1>
      </center>
      <br>
      <section>
      <div class="row justify-content-center row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><b>Dados Gerais</b></h4>
                </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-richtext" viewBox="0 0 16 16">
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
                </svg></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b>Dados Gerais</b></li>
                    <li>Homens:</li>
                    <li>Mulheres:</li>
                    <li>Outro:</li>
                </ul>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal"><b>Aniversariantes</b></h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                </svg></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b>Aniversariantes do Mês</b></li>
                    <li>Nome</li>
                    <li>&nbsp;&nbsp;</li>
                    <li>&nbsp;&nbsp;</li>
                </ul>
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