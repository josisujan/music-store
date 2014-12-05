<html>
<head>
  <title>Online Music Store</title>
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div id="wrapper">
      <div id="container">
      <div id="header">
        <div id="logo">
          <img src="images/logo.png"/>
        </div>//end logo
        <div id="nav">
          <ul id="nav_list">
            <li><a href="<?= "?page=home" ?>">Home</a></li>
            <li><a href="<?= "?page=songs" ?>">Songs</a></li>
            <li><a href="<?= "?page=artists" ?>">Artists</a></li>
            <li><a href="<?= "?page=contact" ?>">Contact</a></li>
            <li><a href="<?= "?page=about_us" ?>">About Us</a></li>
          </ul>
        </div>

      </div>

  `
      <div id="main">
        
        <?php
          $page = isset($_GET['page']) ? $_GET['page'] : 'home';
          require_once('includes/'.$page.'.php');
        ?>  

      </div>
      <div id="footer">
        <div id="nav">
          <ul id="nav_list">
            <li><a href="<?= "?page=home" ?>">Home</a></li>
            <li><a href="<?= "?page=songs" ?>">Songs</a></li>
            <li><a href="<?= "?page=artists" ?>">Artists</a></li>
            <li><a href="<?= "?page=contact" ?>">Contact</a></li>
            <li><a href="<?= "?page=about_us" ?>">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>//end contaier
  </div>//end wrapper
</body>
</html>