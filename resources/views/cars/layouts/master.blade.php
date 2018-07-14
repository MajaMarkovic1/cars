<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel=stylesheet href='../css/cars.css'>
    <link rel=stylesheet href='css/cars.css'>
    
    <title>Document</title>
</head>
<body>
   
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav blog-nav">
                <a class="nav-link active" href="cars">Cars</a>
                <a class="nav-link" href="about">About</a> 
            </nav>
        </div>
    </div>
    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

        @yield('content')
          

        </div><!-- /.blog-main -->


      </div><!-- /.row -->

    </div><!-- /.container -->
   
</body>
</html>