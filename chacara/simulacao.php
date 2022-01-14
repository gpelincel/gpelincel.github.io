<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a6c7b55f3c.js" crossorigin="anonymous"></script>
    <title>RECANTO DOS SONHOS</title>
</head>
<style>
    hr {
        margin-left: 50px;
        margin-right: 50px;
        height: 1px;
        background-color: #000;
    }

    .carousel-item {
        max-height: 500px;
    }

    .iframely-embed {
        height: 400px;
        width: 340px;
        margin: auto;
        box-shadow: 3px 5px 18px 8px rgba(0,0,0,0.63);
    }

    p {
        text-align: justify;
    }

    h2 {
        margin-top: 30px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"> <i class="fab fa-fly"></i> Recanto dos sonhos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="boituva.html">Nossa cidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chacara.html">Nossas acomodações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="simulacao.html">Alugue aqui</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center my-5">Simule sua reserva aqui</h1>
    <hr>
    <div class="container-fluid">
        <h2 class="text-center">Alugue no Airbnb ou fale diretamente com o proprietário: </h2>

        <div class="row mt-3">
            <div class="col">
                <div class="iframely-embed"><div class="iframely-responsive" style="padding-bottom: 75%; padding-top: 120px;"><a href="https://www.airbnb.com.br/rooms/47921272" data-iframely-url="//cdn.iframe.ly/qjIDgTh?media=0"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
            </div>

            <form action="POST" class="col m-3">
                <div class="form-floating mb-3">
                    <input id="email" type="email" class="form-control" placeholder="exemplo@exemplo.com" required>
                    <label for="email" class="form-label">Email <i class="far fa-envelope"></i></label>
                </div>

                <div class="form-floating mb-3">
                    <input id="nome" type="text" class="form-control" placeholder="Nome Sobrenome" required>
                    <label for="nome" class="form-label">Nome completo <i class="far fa-id-card"></i></label>
                </div>

                <div class="form-floating mb-3">
                    <input id="telefone" type="tel" class="form-control" placeholder="(DDD) X XXXX-XXXX"
                        pattern="([0-9]{2}) [0-9]{5}-[0-9]{4}" required>
                    <label for="telefone" class="form-label">Telefone <i class="fas fa-phone-square-alt"></i></label>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="data_reserva" class="form-label">Data do check-in <i class="far fa-calendar"></i></label>
                        <input id="data_reserva" min="<?php echo date('Y-m-d', time() ); ?>" type="date" class="form-control" placeholder="" required>
                    </div>

                    <div class="col">
                        <label for="data_reserva" class="form-label">Data do check-out <i class="far fa-calendar"></i></label>
                        <input id="data_reserva" type="date" class="form-control" placeholder="" required>
                    </div>
                </div>

                <div class="btn-group" role="group">
                    <button type="submit" class="btn btn-outline-success">Cadastrar <i class="fas fa-check"></i></button>
                    <button type="reset" class="btn btn-outline-danger">Apagar <i class="fas fa-eraser"></i></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>