<html>
    <head>
        <title>Holiday Share</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="276x299" href="docs/logo.png">
        <link rel="apple-touch-icon" href="docs/logo.png">
        <link rel="stylesheet" type="text/css" href="holiday.css">
        <link rel="stylesheet" type="text/css" href="normalize.css"/>
        <style>
           
        </style>
        <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
}
        </script>
    </head>
    <body>
        
        <ul id ="menu">
            
            <li><a style="padding-top: 23px;" href="news.php" id="menu1">News</a></li>
            <li><a style="padding-top: 23px;" href="contact.php" id="menu2">Contact</a></li>
            <li><a style="padding-top: 23px;" href="about.php" id="menu3">About</a></li>

            

        </ul>
        
         <script>
            var x = window.innerWidth;
            var y = window.innerWidth/3;
            document.getElementById("menu").style.width = x;
//            document.getElementById("menu1").style.width = y;
//            document.getElementById("menu2").style.width = y;
//            document.getElementById("menu3").style.width = y;
             
              
             
             
        </script>
        
    <!--    <span onclick="openNav()"><img src="docs/menu.png"></span><h1>Home</h1>
            <br><br> -->
        <h1>Home</h1>
        <br><br>
            <div class="buttons">
                <a href="find.php"><input type="submit" value="Find" id="buttons"></a>
                <br><br><br>
                <a href="share.php"><input type="submit" value="Share" id="buttons"></a>
            </div>
        
   <!--     <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close</a>
          <a href="menu.php">Home</a>
          <a href="profile.php">My Profile</a>
          <a href="About.php">About</a>
          <a href="login.php">Log Out</a>
        </div> -->
        
    </body>
</html>