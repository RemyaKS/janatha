<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>JANATHA</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>

  <form action="index.php" class="login-form">
    <h1>JOIN US</h1>

    <div class="txtb">
      <input type="text">
      <span data-placeholder="Firstname"></span>
    </div>

    <div class="txtb">
      <input type="text">
      <span data-placeholder="Lastname"></span>
    </div>

    <div class="txtb">
      <input type="email">
      <span data-placeholder="Valid email-id"></span>
    </div>

    <div class="txtb">
      <input type="password">
      <span data-placeholder="Password"></span>
    </div>
    <div class="">

      <span>female</span>
      <input type="radio" value="female" name="gender">

      <span>male</span>
      <input type="radio" value="male" name="gender">

      <span>others</span>
      <input type="radio" value="others" name="gender">

    </div><br><br>
    <input type="submit" class="logbtn" value="Login">

    <div class="bottom-text">
      Don't have account? <a href="#">Sign up</a>
    </div>


  </form>

  <script type="text/javascript">
    $(".txtb input").on("focus",function(){
      $(this).addClass("focus");
    });

    $(".txtb input").on("blur",function(){
      if($(this).val() == "")
        $(this).removeClass("focus");
    });

  </script>


</body>
</html>
