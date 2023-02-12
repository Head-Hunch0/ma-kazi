<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Thank you for applying at Ma-kazi</title>
</head>
<body>
    <style>
        body{
            text-align: center;
            background-color: gray;
            color: black;
        }
        .container{
            width: 100%;
            justify-content: center
        }
        .rounded{
            margin: solid 1px orange;
        }
        .btn{
            background-color: green;
            overflow: hidden;
            color: white;
        }

    </style>
    <div class="container bg-light p-3 rounded">

    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
        <div class="card m-2 border-warning" >
        <div class="card-body">
        <p class="btn btn-success">Application Successful</p>
        <h5 class="card-title"></h5>
        {{-- <p class="btn btn-primary">Hi {{$data->title}},</p> --}}
        <p> Hi , {{$data['name']}} <br>

            Thank you so much for your interest in Ma-kazi and for taking the time to 
            apply for the {{$data['position']}} position. We just wanted to let you 
            know that we have received your application, and that we're looking 
            forward to reviewing it.
            <br>

            Have a great day!
        </p>
     
        

    </div>
</div>

</div>

</div>
</div>

</body>
</html>