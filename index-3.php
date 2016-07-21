<!DOCTYPE html>

<html>

  <head>

    <title>.HTACCESS default ERROR page</title>

    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
   
  </head>

  <body>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="http://www.toogoodbruh.com">Home</a></li>
          <li><a href="http://www.toogoodbruh.com/tgbmods">Leaders</a></li>
          <li><a href="http://www.toogoodbruh.com/latestvideos">Videos</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="http://www.toogoodbruh.com/join">Join</a></li>
          <li><a href="#">Log In</a></li>
          <li><a href="http://www.toogoodbruh.com/help">Help</a></li>
        </ul>

    </div>
    </div>

    <p># DO NOT REMOVE THIS LINE AND THE LINES BELOW HOTLINKID://toogoodbruh.com
RewriteEngine on
RewriteCond %{HTTP_REFERER} !^http://toogoodbruh.com/.*$      [NC]
RewriteCond %{HTTP_REFERER} !^http://toogoodbruh.com$      [NC]
RewriteCond %{HTTP_REFERER} !^http://www.toogoodbruh.com/.*$      [NC]
RewriteCond %{HTTP_REFERER} !^http://www.toogoodbruh.com$      [NC]
RewriteRule .*\.(.*)$ http://http [R,NC]
# DO NOT REMOVE THIS LINE AND THE LINES ABOVE //toogoodbruh.com:HOTLINKID

# Do not remove this line, otherwise mod_rewrite rules will stop working
RewriteBase /
</p>

    <footer class="site-footer">
        <p><a href="http://www.toogoodbruh.com/errorPageCode.html">Error Page Code</a></p>

</body>

</html>