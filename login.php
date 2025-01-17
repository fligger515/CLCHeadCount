<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>Login | CLC Head Counting</title>
  <style>
    html, body {
      margin: 0px;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
    }
    body {
      background-color: rgb(0, 30, 30);
      background: url('images/annie-spratt-b0XSjnITSoA-unsplash.jpg');
      background-repeat: no-repeat;
      background-position: -200px -3000px;
      background-attachment: fixed;
    }
    footer {
      background-color: rgb(20, 20, 20);
      width: 100%;
      height: 40px;
      bottom: 0px;
      padding-top: 28px;
      position: fixed;

      text-align: center;
      font-size: 10px;
      color: white;
    }
    .titleDiv{
      text-align: right;
      float: left;

      margin-top: 340px;
      margin-bottom: 380px;
      margin-left: 30%;
      margin-right: 40px;
    }
    .titleDiv > h1 {
      margin-bottom: 5px;

      color: white;
      letter-spacing: 10px;
      font-size: 50px;
      text-shadow: 0px 15px 7px rgba(15, 15, 15, 0.8);
    }
    .titleDiv > h2 {
      margin-top: 5px;

      letter-spacing: 7px;
      color: white;
      text-shadow: 0px 10px 5px rgba(15, 15, 15, 0.8);
    }
    .loginDiv {
      float:left;
      margin-top: 310px;
      margin-bottom: 400px;
      padding-right: 20px;
      padding-top: 80px;
      padding-left: 50px;
      padding-bottom: 80px;

      border-left: 3px solid white;
    }
    .loginDiv > input {
      height: 20px;
      width: 150px;
      margin-bottom: 8px;
      box-shadow: 0px 7px 5px rgba(15, 15, 15, 0.3);
      border-style: none;

      background-color: rgba(20, 20, 20, 0.7);
      color: white;
      letter-spacing: 3px;
      padding-left: 7px;
    }
    #loginBTN {
      float: left;

      background-image: url();
      background-color: rgb(20, 20, 20);
      border-style: none;
      border-radius: 10px;
      box-shadow: 0px 7px 5px rgba(15, 15, 15, 0.5);

      width: 80px;
      height: 70px;
      margin-top: 400px;
      margin-bottom: 400px;

      letter-spacing: 2px;
      font-size: 12px;
      color: white;
    }
  </style>
</head>
<body>
  <div class="titleDiv">
    <h1>LOG IN</h1>
    <h2>CLC HeadCounting Name</h2>
  </div>
  <form action="login_input.php" method="post">
    <div class="loginDiv">

      <input type="text" name="stuID" size=10 maxlength=8 placeholder="student ID" autofocus /><br />
      <input type="password" name="password" placeholder="password"/><br />

    </div>
    <div class="loginDiv-BTN">
      <button id="loginBTN" type="submit" value="login">Login</button>
    </div>
  </form>

  <footer>Hallym University Opensource competition ®Jeon Yu Bin 2021</footer>
</body>
</html>
