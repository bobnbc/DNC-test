<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Democratic National Committee</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        /**/
        let buttonElement = document.createElement('button');
    
        let donateLink = 'https://secure.actblue.com/donate/feb-democratic-momentum-fund-web';
    
        let volunteerLink = 'https://events.democrats.org/?is_high_priority=true';
    
        window.onload = function() {
            document.getElementById('donate').addEventListener('click', function() {
                window.location.href = donateLink;
            });
            document.getElementById('volunteer').addEventListener('click', function() {
                window.location.href = volunteerLink;
            });
            /*SANDBOX*/
            //document.body.classList.toggle('dark');
        }
    </script>
</head>
<body>
    <div class="main">
        <h1>Welcome to the Democratic National Committee</h1>
        <div id="menu">
        </div>
        </div class="blah">
                <img src="files/bg.jpg" width="85%">

                <p>We are at an inflection point right now in this country – one of those moments where the decisions we make will change the trajectory of our nation for decades to come. Each inflection point in our nation's history represents a choice. Ours is to stand up for our fundamental freedoms. This is why Joe Biden is running for re-election. Across the country, MAGA extremists are lining up to take us backward. They're trying to gut Social Security and Medicare, ban access to abortion, tell women what health care choices they're allowed to make, tell you what books you can read to your kids, and restrict your right to vote them out because of it.</p>
                <p><b>But we can stop them and finish the job we started. This is how we do it. </b></p>
                <p>Each of us collectively can play a role to make sure the people closest to us know what's at stake for our families and for our country. This includes the progress we've made and will continue to make if we keep Joe Biden and Kamala Harris in the White House. That means having discussions with our neighbors, our friends, and our families. It's sharing campaign updates and Democratic messaging in our social media circles. It's ensuring our communities know when and how to vote. It's ensuring that our communities and the people closest to us know we're still in a fight for the soul of our nation.</p>

                <button id="donate">Donate Now</button>
                <button id="volunteer">Get Involved</button>
                <p></p>
        </div>
    </div>
    <script>
//        document.body.menuItems.classList.toggle('blah');

        let menuItems = [
            'Home',
            'Support',
            'Vote',
            'About',
            'Contact'
        ];

        let index = 0;
        //let parentDiv = document.getElementsByClassName('main');
        let menuElement = document.getElementById('menu');
        let ulElement = document.createElement('ul');
/*
        let classNamer = document.body.className;
        document.body.className = classNamer + 'menustyle';
*/
        ulElement.classList.add('horizontal-menu');

        /*loop thru menu items*/
        menuItems.forEach(function(text, index) {
            let li = document.createElement('li');
            li.innerHTML = text;

            ulElement.appendChild(li);
        });

        //let lastLi = ulElement.removeChild(ulElement.lastChild);

        menuElement.insertAdjacentElement('afterbegin', ulElement);

    </script>
</body>
<footer>
    <ul class="social-media-links">
        Follow us</br>
      <?php
        $socialMediaLinks = array(
          'Facebook' => 'https://www.facebook.com/democrats/',
          'X (formerly Twitter)' => 'https://twitter.com/TheDemocrats ',
          'Instagram' => 'https://www.instagram.com/thedemocrats/ ',
        );

        foreach ($socialMediaLinks as $platform => $url) {
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