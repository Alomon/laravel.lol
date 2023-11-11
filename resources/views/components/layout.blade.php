<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>

<header style="height: 200px; background: #4b5563">Шапка сайта</header>

<main>
    <!-- {{ $slot }} -->
    <br />
    {{ $content }}
</main>

<footer style="height: 200px; background: blueviolet">Подвал сайта</footer>

</body>
</html>
