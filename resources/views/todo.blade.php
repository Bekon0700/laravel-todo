<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock Todo</title>

    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="main-container">
        <p class="title">Manage Your Daily Todos Here!</p>
        <div class="todo-container">
            <div class="input-container">
                <input placeholder="Enter your todo here...." type="text" class="input-box">
                <button class="add-btn">Add</button>
            </div>
            <div class="todos">
                <p class="single-todo">Sleep</p>
                <p class="single-todo">Sing for the moment</p>
                <p class="single-todo">Learn Laravel</p>
                <p class="single-todo">Sleep</p>
                <p class="single-todo">Sing for the moment</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
</body>
</html>