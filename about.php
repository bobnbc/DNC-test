<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Democratic National Committee</title>
    <link rel="stylesheet" href="styles.css">
    <script src="header.js">
    </script>
</head>
<body>
    <div class="main">
        <h1>Welcome to the Democratic National Committee</h1>
        <div id="menu">
            <ul data-menuItem="menuItem"></ul>
        </div>
    </div>
    <div>
        <h2>About Us</h2>
        <div>
        </div>
    </div>
    <script src="scripts.js">
    </script>
</body>
<footer>
    <ul class="social-media-links">
        Follow us</br>
      <?php
        $socialMediaLinks = array(
          'Facebook' => 'https://www.facebook.com/democrats/',
          'X (formerly Twitter)' => 'https://twitter.com/TheDemocrats ',
        );

        $lastSocialMediaLinks = array(
            'Instagram' => 'https://www.instagram.com/thedemocrats/ ',
        );

        foreach ($socialMediaLinks as $platform => $url) {
            echo '<li><a href="' . $url . '" target="_blank" rel="noopener noreferrer">' . $platform . '</a> || </li>';
        }
        foreach ($lastSocialMediaLinks as $platform => $url) {
            echo '<li><a href="' . $url . '" target="_blank" rel="noopener noreferrer">' . $platform . '</a></li>';
        }

      ?>
    </ul>
    <p style="text-align: left">Copyright: <?php echo date("Y"); ?>
</footer>
</html>
<?php
//    echo '<pre>' . print_r(get_defined_vars(), true) . '</pre>';
    echo '<pre>';
 //   var_dump($_SERVER);
    echo '</pre>';
?>