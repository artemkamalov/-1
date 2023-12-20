<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        main{
            display: flex;
            justify-content: center;
            align-content: center;
        }
        header{
            display: flex;
            align-content: center;
        }
        .header__regist a{
            text-decoration: none;
            color: black;
        }
        .header__regist{
            display: flex;
            width: 100%;
            justify-content: end;
            margin-right: 20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <ul class="list-group">
            @foreach ( $affairs as $affair)
            <li class="list-group-item">
                <input type="checkbox">
                    {{$affair->record}} <br>
            </li>
            @endforeach
          </ul>
    </main>
</body>
</html>
