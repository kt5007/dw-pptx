<?php
    // if(isLogin()){
    //     header('Location: ../memo/');
    //     exit;
    // }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>1 phrase pptx maker</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap 4.0.0 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>   
      .cover {
        background: url(../common/img/bg.png);
        background-size: cover;
      }
    </style>
  </head>

  <body>
    <!-- header -->
    <header>
      <div class="cover text-white text-center py-5">
        <h1 class="display-4 mb-4">1 phrase pptx maker</h1>
      </div>
    </header>

    <main>
      <!-- 会員登録 -->
      <section class="py-5">
        <div class="container">
          <form>
            <div class="form-group">
              <label for="InputName">Name</label>
              <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Enter Name">
              <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="InputPassword1">Password</label>
              <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="Check1">
              <label class="form-check-label" for="Check1">利用規約に同意</label>
            </div>
            <div class="py-2">
              <button type="submit" class="btn btn-outline-success btn-lg btn-block" type="button">登録</button>
            </div>
          </form>
        </div>
      </section>
    </main>

    <footer class="text-center text-muted py-4">
      Copyright kenjin
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>