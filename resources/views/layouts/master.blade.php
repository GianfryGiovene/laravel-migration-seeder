{{-- Creiamo una tabella trains e relativa Migration
Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto ;) ...
Inserite inizialmente i dati tramite PhpMyAdmin.
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna. --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Migration-Seeder</title>
</head>

<body>
    @include('partials.header')
    @yield('trains-content')
    @include('partials.footer')
</body>

</html>
