<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        
        <style>
            body {
                font-family: "Source Sans Pro", sans-serif;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <div id="app" class="position-ref full-height">
            <section class="map-locations flex-center">
                <div>
                    <map-header></map-header>
                    <map-nav></map-nav>
                    <location-map></location-map>
                </div>
                
            </section>
        </div>
    <script src="js/app.js"></script>
    </body>
</html>
