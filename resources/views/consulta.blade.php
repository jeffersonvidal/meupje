<!-- resources/views/consulta.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Processo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Exemplo de álbum Bootstrap</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para este template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
        <h1>Consultar Processo</h1>
    
    <!-- Formulário para informar o número do processo -->
    <form action="{{ route('consultar.processo') }}" method="POST">
        @csrf
        <label for="numero_processo">Número do Processo:</label>
        <input type="text" id="numero_processo" name="numero_processo" required>
        <button type="submit">Consultar</button>
    </form>

    <!-- Exibição dos resultados da consulta -->
    @if(isset($movimentacoes))
        <h2>Movimentações do Processo</h2>
        <ul>
            @foreach($movimentacoes as $movimentacao)
                <li>
                    <strong>Data:</strong> {{ $movimentacao['data'] }} <br>
                    <strong>Descrição:</strong> {{ $movimentacao['descricao'] }} <br>
                    @if(isset($movimentacao['documento']))
                        <strong>Documento:</strong> <a href="{{ $movimentacao['documento'] }}" target="_blank">Visualizar PDF</a>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
        </div>
      </section>


    </main>


    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
