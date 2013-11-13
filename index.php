<!doctype html>
<html lang="en" ng-app xmlns:fb="http://www.facebook.com/2008/fbml>">
    <head>
        <title>workbench</title>
        <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular-resource.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <script type="text/javascript" src="drive.js"></script>
        <script type="text/javascript" src="twitter.js"></script>
        <script type="text/javascript" src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>
    </head>
    <body style="border: 20px;background-color: whitesmoke;background-color: whitesmoke;text-align: center;">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=583463215054640";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <center>
            <table>
              <td style="width: 500px;border: grey;border-width: 5px;border-style: solid;text-align: center;">
                <p style="background-color: whitesmoke;text-align: right;">
                    <p style="text-decoration-color: white;font-family: cursive;font-weight: bold;">This is a simple app to upload files to google drive,
                    once you pick the file it will automatically start uploading
                    to drive, progress bar isn't there. You have to refresh
                    the web-page for uploading again!!!</p>
                    <br /><br /><br />
                    <!--Add a file picker for the user to start the upload process -->
                    <p style="text-decoration-color: white;font-family: cursive;font-weight: bold;">
                        Choose a file to upload to googleDrive :)
                        <input type="file" id="filePicker" class="file" style="display: none; text-align: right;" />
                        <input type="button" id="authorizeButton" style="display: none; text-align: right" value="Upload to Google Drive" />
                    </p>
                    <!--ng-app -->
                    <p style="text-decoration-color: white;font-family: cursive;font-weight: bold;">
                        <img src="joker.jpg" />
                        
                    </p>
                    <!--fb-follow -->
                  <div class="fb-follow" data-href="http://www.facebook.com/sangramkesari.ray" data-colorscheme="light" data-layout="standard" data-show-faces="true">
                  </div>
                </p>
              </td>
              <td style="width: 500px;border: grey;border-width: 5px;border-style: solid;text-align: center;">
                  <!--fb widget-->
                  <div class="fb-comments" data-href="http://whispering-fortress-6036.herokuapp.com/" data-numposts="5"></div>
                  <!--widgets -->
                  <p style="text-align: right;background-color: whitesmoke;">
                      <p style="text-align: right">
                          <a style="right: 10px" class="twitter-timeline" href="https://twitter.com/sngrmkr" data-widget-id="400197567310340096">Tweets by @sngrmkr</a>
                          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                      </p>
                      <p>
                          <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                          <g:plusone></g:plusone>

                          <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                          </script>

                      </p>
                  </p>
              </td>
            </table>

        </center>
    </body>
</html>