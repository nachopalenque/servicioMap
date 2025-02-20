<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if ($clima == 'Clear')

<p>El clima esta soleado en {{$ciudad}} con una temperatura de {{$temperatura}} grados celsius </p><br>
<img src="https://cdn-icons-png.flaticon.com/512/16115/16115959.png" alt="">

@endif

@if ($clima == 'Clouds')

<p>El clima esta nuboso en {{$ciudad}} con una temperatura de {{$temperatura}} grados celsius</p><br>

<img src="https://cdn-icons-png.flaticon.com/512/1163/1163763.png" alt="">

@endif


@if ($clima == 'Rain')

<p>El clima esta lluvioso en {{$ciudad}} con una temperatura de {{$temperatura}} grados celsius</p><br>

<img src="https://img.freepik.com/vetores-premium/nuvem-com-icone-de-chuva-em-estilo-simples-isolado-no-fundo-branco-simbolo-meteorologico_96318-19562.jpg" alt="">

@endif

@if ($clima == 'Snow')

<p>Esta nevando en {{$ciudad}} con una temperatura de {{$temperatura}} grados celsius</p><br>
<img src="https://cdn-icons-png.flaticon.com/512/3730/3730830.png" alt="">

@endif





</body>
</html>