<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MAQE Forums</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
            .container {
                max-width: 1200px;
                margin: auto;
            }

            .post {
                display: flex;
                padding: 10px;
                border: 1px solid #eee;
                margin-bottom: 10px;
                min-height: 200px;
            }
            .post-image {
                min-width: 200px;
                width: 200px;
            }
            .post-image img {
                width: 100%;
                max-width: 100%;
            }
            .post-content {
                padding-left: 15px;
                flex-grow: 1;
                border-right: 1px solid #eee;
                margin-right: 10px;
            }
            .post-content h3 {
                margin-top: 0;
                margin-bottom: 10px;
            }
            .post-content p {
                margin-top: 0;
                margin-bottom: 10px;
            }
            .post-content span {
                margin-bottom: 10px;
            }
            .author {
                margin-left: auto;
                min-width: 20%;
                width: 20%;
                padding: 10px;
            }
            .author-image {
                min-width: 100px;
                width: 100px;
                border-radius: 50%;
                overflow: hidden;
                margin: 0 auto;
            }
            .author-image img {
                max-width: 100%;
                width: 100%;
            }
            .author-info span {
                display: inline-block;
                width: 100%;
                margin-bottom: 10px;
                text-align: center;
            }
            .author-info span.author-name {
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
