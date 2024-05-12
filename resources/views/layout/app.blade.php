<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorie/product Managment</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .print_btn {
        display: inline-block;
        padding: 7px 20px;
        margin-top: 1% ;
        margin-bottom: 3% ;
        font-size: 16px;
        width: 100%;
        cursor: pointer;
        border: none;
        border-radius: 5px;
        background-color: #007bff; 
        color: #fff; 
        }

        .print_btn:hover {
        background-color: #0056b3;
        }

    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>