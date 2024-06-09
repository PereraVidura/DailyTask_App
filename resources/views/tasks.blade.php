<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: url('https://images.unsplash.com/photo-1506784365847-bbad939e9335?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            color: #ffeb3b;
            text-shadow: 2px 2px #000;
        }

        .alert {
            text-align: left;
        }

        .form-control, .btn {
            margin-bottom: 10px;
        }

        table {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            overflow: hidden;
        }

        table th, table td {
            color: #000;
        }

        .btn-primary, .btn-warning, .btn-success, .btn-danger {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Daily Tasks</h1>
        <br>
        <div class="row">
            <div class="col-md-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach

                <form method="post" action="/saveTask">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
                    <input type="submit" class="btn btn-primary" value="SAVE">
                    <input type="button" class="btn btn-warning" value="CLEAR">
                </form>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Task</th>
                            <th>Completed</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->task}}</td>
                                <td>
                                    @if($task->iscompleted)
                                        <button class="btn btn-success">Completed</button>
                                    @else
                                        <button class="btn btn-warning">Not Completed</button>
                                    @endif
                                </td>
                                <td>
                                    @if(!$task->iscompleted)
                                        <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark as Completed</a>
                                    @else
                                        <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark as Not Completed</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                                </td>
                                <td>
                                    <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4xF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
