<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <style>

        html,
        body {
            margin: 0;
            padding: 0;
        }

        .main {
            padding: 100px 0;
            background-color: #f0f0f0;
            color: #555;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 500;
            line-height: 1.15;
        }

        .logo {
            display: block;
            max-width: 200px;
            margin: 0 auto;
            padding: 50px 0;
        }

        .content {
            max-width: 760px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 16px;
        }

        .article {
            padding: 30px;
            background-color: #f5f5f5;
        }

        .header {
            padding: 20px;
            background-color: #82d111;
            color: #fff;
            text-transform: uppercase;
        }

        .headline {
            margin: 0;
            font-size: 25px;
            text-align: center;
        }

        .highlight {
            display: block;
            margin: 1rem;
            padding: 1rem;
            background-color: #fff;
            box-shadow: 0 1rem 5rem #ddd;
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
        }

        .table {
            width: 100%;
            max-width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        .center {
            text-align: center;
        }

        td,
        th {
            padding: 1em;
            border: 1px solid #ccc;
            text-align: left;
        }

        .footer {
            padding-bottom: 30px;
            color: #999;
            font-size: 0.85em;
            text-align: center;
        }

        .footer a {
            color: #82d111;
        }

        .card {
            padding: 50px 75px;
            color: #666;
        }

        .card strong {
            color: #555;
        }

        .card a {
            color: #82d111;
        }

    </style>

    @stack('header')

</head>
<body>

    <div class="main">

        <div class="content">

            @if (empty($exclude_logo))
                <img src="{{ asset('public/storage/images/logo.png') }}" alt="{{ config('app.name') }}" class="logo" />
            @endif

            @if (empty($exclude_header))
                <header class="header">
                    <h1 class="headline">{{ $title }}</h1>
                </header>
            @endif

            @yield('body')

            @if (empty($exclude_footer))
                <footer class="footer">
                    <p>
                        {{ __('common.copyright', ['year' => date('Y')]) }}
                        <br />
                        {{ config('app.name') }}
                    </p>
                </footer>
            @endif

        </div>

    </div>

    @stack('footer')

</body>
</html>
