<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="bg-card-shadow">
        <div class="w-75" id="header-container">
            <h2>R-TODOs</h2>
            <x-navbar.top-nav user="0"/>
        </div>
    </div>
    @yield('main')
    {{-- @foreach ($todos as $todo)
        <p>Id = {{ $todo->id }}</p>
        <p>Todo  = {{ $todo->todo }}</p>
        <p>createdAt = {{ $todo->created_at }}</p>
        <br />
    @endforeach --}}

    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
</body>
</html>