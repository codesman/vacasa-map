<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">
            <section class="map-locations">
                <map-header></map-header>
                <map-nav></map-nav>
                <location-map></location-map>
            </section>
        </div>
    <script src="js/app.js"></script>
    </body>
</html>
