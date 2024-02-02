<!DOCTYPE html>
<html lang="en">

<head>
    <title>Copisteria Iuga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .tinta {
            width: 50px;
            height: 50px;
            float: left;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!--<div class="jumbotron">
            <h1>Copisteria Julian</h1>
            <p>Usa la impresora que mejor te vaya!</p>
            </div>-->
        <div class="row">
            <h3>Hojas:0</h3>
            <p>Introduce la impresora y el texto a imprimir</p>
            <form action="{{ url('/imprimir') }}" method="get" class="form-inline" role="form">
                Impresora:
                <select class="form-control" name="n_impresora">
                    <option value="1">Impresora0</option>
                    <option value="2">Impresora1</option>
                    <option value="3">Impresora2</option>
                </select>
                <textarea class="form-control" rows="4" name="texto"></textarea>
                <input type="submit" value="Enviar a impresora">
            </form>
        </div>
        @foreach ($impresoras as $impresora)
            <div class="impre">
                <div class="col-sm-4">
                    <div class="row"><a href="{{ url('/impresora' . $impresora->id) }}"><img
                                src="{{ 'A' . ($impresora->id + 1) }}.jpg" alt="Procesa cola"></a></div>
                    <div class="row">
                        <div class="toner">
                            <div class="tinta" style="background-color:black">{{ $impresora->tintaNegra }}</div>
                            <div class="tinta" style="background-color:yellow">{{ $impresora->tintaAmarilla }}</div>
                            <div class="tinta" style="background-color:cyan">{{ $impresora->tintaCian }}</div>
                            <div class="tinta" style="background-color:magenta">{{ $impresora->tintaRosa }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="list-group">
                            @foreach ($imprimir as $impresion)
                                @if ($impresion->idImpresora === $impresora->id)
                                    <li class="list-group-item">{{ $impresion->texto }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
