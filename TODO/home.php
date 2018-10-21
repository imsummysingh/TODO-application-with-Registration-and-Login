<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>ToDo</title>

    

</head>
<body>
    <div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">TODO</a>
                </div>
                <form class="navbar-form navbar-left" action="action.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
    </div>
    <div id = "back">
    <div id="container">
        <div class="controls">
            <h1>TODO</h1>
            <input type="text" id="input"><a href=""></a><br>
            <button type="submit" id="add">Add TODO</button>
            <button type="button" id="remove">Remove TODO</button>
        </div>
        <ul id="list">
            <li class="mycheck">
                <input type="checkbox" id="check">
                <label>Wake Up</label>
            </li>

            <li class="mycheck">
                <input type="checkbox" id="check" checked>
                <label>Brush</label>
            </li>
        </ul>
    </div>
    </div>

     <script src="todo.js"></script>
</body>
</html>