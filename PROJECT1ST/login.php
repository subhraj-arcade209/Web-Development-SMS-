<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NIIT</title>
    <link rel="stylesheet" href="css/dashboard1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Permanent Marker' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Margarine' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
      input[type=submit]  {
          display: inline-block;
          padding: 15px 25px;
          font-size: 24px;
          cursor: pointer;
          text-align: center;
          text-decoration: none;
          outline: none;s
          color:#010300 ;
          background-color: #D1C507  ;
          font-family: 'Amaranth';font-size: 22px;
          border: none;
          border-radius: 20px;
          box-shadow: 0 8px #3F3B04 ;
        }
      input[type=submit]:hover {background-color: #26B11C;box-shadow: 0 5px black  }
      input[type=submit]:active{
        background-color:#620428 ;
        color:white;
        box-shadow: 0 5px #030100 ;
        transform: translateY(4px);
      }
      .creaty h1{
        color:#04C399;
        font-family: 'Brush Script MT', cursive;
        font-size: 35px;
        text-shadow: 0 4px #691303 ;
      }
      .creaty h2{
        color:#3FC304;
        font-family: 'Courgette';
        font-size: 25px;
        text-shadow: 0 4px #691303 ;
      }</style>
    </head>
    <body>
      <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="images/logoclg.png">
        </div>
        <div class="header-right">
          <table><tr>
          <td><a href="https://facebook.com/subhraj-arcade209" class="fa fa-facebook"style="font-size:35px; border: 5px solid #0B0679;"></a></td>
          <td><a href="https://github.com/subhraj-arcade209" class="fa fa-github"style="font-size:35px; border: 5px solid #054702;"></a></td>
          <td><a href="https://www.linkedin.com/in/subhrajyoti-manna-58a2541a6" class="fa fa-linkedin"style="font-size:35px; border: 5px solid #0B0679;"></a></td>
          <td><a href="https://www.instagram.com/subhraj_arcade.209/" class="fa fa-instagram"style="font-size:35px; border: 5px solid #5E0551;"></a></td></tr></table>
        </div>
      </div>
    </header>
    <div class="top-wrapper">
      <div class="container">
        <h1>LEARN TO BE CREATIVE</h1>
        <div class="creaty">
        <h1>The beautiful thing about learning is that nobody can take it away from you"</h1>
        <br><br><h2>!!  Welcome  !!</h2></div>
        <center><br><br>
          <br>
          <form action="" method="POST">
            <input type="submit" name="admin_login" value="Admin Login" style="margin:15px" required>
            <input type="submit" name="student_login" value="Student Login"style="margin:15px" required>
          </form>
          <?php
            if(isset($_POST['admin_login'])){
              header("Location: admin_login.php");
            }
            if(isset($_POST['student_login'])){
              header("Location: student_login.php");
            }
          ?>
          </center>
      </div>
    </div>
    <div class="lesson-wrapper">
      <div class="container">
        <div class="heading">
          <h2>Learn Where to Get Started!</h2>
        </div>
        <div class="facility">
        <table><tr><td>
        <div class="lessons">
          <div class="lesson">
            <div class="lesson-icon">
              <br><img src="images/library.jpeg">
              <h3>24*7 Library</h3>
            </div>
            <br><br><p class="txt-contents">Open library with an undiscovered e-library stock to solve your unlimited hunger of knowledge.</p>
          </div></td>
          <td>
          <div class="lesson">
            <div class="lesson-icon">
              <br><img src="images/indoor.jpeg">
              <h3>Indoor Activities</h3>
            </div>
            <br><br><p class="txt-contents">An indoor platform where student can chill and discuss different problems with relaxation.</p>
          </div></td>
          <td>
          <div class="lesson">
            <div class="lesson-icon">
              <br><img src="images/lab.jpeg">
              <h3>Laboratory</h3>
            </div>
            <br><br><p class="txt-contents">Various laboratories for each of the department so that no one can be stopped from getting practical knowledge.</p>
          </div></td>
          <td>
          <div class="lesson">
            <div class="lesson-icon">
              <br><img src="images/playground.jpeg">
              <h3>Playground</h3>
            </div>
            <br><br><p class="txt-contents">An open playground for all our aspirants,Being a bookwarm is not a solution for your healthy future.</p>
          </div></td></tr></table></div>
        </div>
      </div>
    </div>
    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
          <h2>Ready to be part of our journey?</h2>
        </div>
        <a href="mail.html" class="btn message"><b>Contact Us<b></a>
      </div>
    </div>
  </body>
</html>