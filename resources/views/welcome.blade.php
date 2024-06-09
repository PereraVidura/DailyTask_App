<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Task App</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Special+Elite&family=Sriracha&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: "Mali", cursive;
            background: url('https://images.unsplash.com/photo-1506784365847-bbad939e9335?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        h1 {
            font-family: "Kaushan Script", cursive;
            font-size: 3em;
            color: #ffeb3b;
            text-shadow: 2px 2px #000;
        }

        p {
            font-size: 1.2em;
            line-height: 1.5em;
            text-shadow: 1px 1px #000;
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #ffeb3b;
            border-color: #ffeb3b;
            color: #000;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #fdd835;
            border-color: #fdd835;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container text-center mt-5">
        <h1>Welcome to Daily Task App!</h1>
        <br><br>
        <p> Enhance your productivity and manage your daily tasks effortlessly with our innovative and 
            user-friendly platform. Stay organized and prioritize your to-dos with ease using our comprehensive 
            suite of tools. Track progress on your goals, set smart reminders, and gain insights with detailed 
            analytics. Whether handling complex projects or daily agendas, our platform streamlines your workflow, 
            ensuring nothing is overlooked and helping you achieve your objectives efficiently </p>
        <br>
        <a href="/tasks" class="btn btn-primary">View Tasks</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4xF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
