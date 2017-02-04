<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tribute to Christy Kang</title>
        <meta name="description" content="Remembering Christy Kang">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Arimo|Bree+Serif|Crete+Round|Lora" rel="stylesheet">

        <!--build:css css/styles.min.css-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!--endbuild-->
    </head>
    <body>
        <header>
          <nav>
            <ul>
            </ul>
          </nav>
        </header>
        <section class="feature">
          <div class="aligner">
            <div class="align image"><img src="./img/christy-kang-profile.jpg" class="tribute"/></div>
            <div class="align name">Christy Hae-Jin Kang</div>
            <div class="align date">(March 11, 1949 - January 12, 2017)</div>
          </div>
          <div>
            <p class="paragraph">
              Christy Kang (67) was born in Seoul, Korea March 11, 1949. Poverty stricken but she was determined to pursue her goals. At the age of 26, she immigrated to Hawaii. As decorated as she was, she was also selfless, sacrificial, and a spirit-filled woman.
            </p>
            <!--

            Using her gifts, she aided the unfortunate by helping them achieve their goals.

            <p>Christy Hae-Jin Kang (67) was the eldest of three born in Seoul, Korea March 11, 1949 to pastor Do-soon Kang and Hyun-Sang Il. She was born in a time of turmoil, a poverty struck Korea, due to the Korean War. However, that didn’t stop her from pursuing her passion in entrepreneurship even when Korea was strongly against industrially successful women. Her hobby was to travel and had always dreamed of achieving her goals in America.</p>
            <p>In 1975, that dream was fulfilled – Christy arrived to America. Christy embarked on a journey in obtaining multiple degrees: She received a degree in business, cosmetology, and theology all with high honors. As decorated as she was, she was also a compassionate, faithful, and loving friend, sister, and aunt. She was a faithful prayer warrior always keeping others before her. She faithfully served the youth with Bible lessons.</p>
            <p>On January 12, 2017, Christy passed away suddenly. Although we are all grieving for her, Christy's winning smile and loving spirit will never be forgotten. What we'll all remember most about her was her great love for our Lord and her genuine concern for others and their eternal well being. Though many may not have been aware of it, Christy was always praying for others. We thank God for the many lives Christy touched and the many more who are now rejoicing with her in Glory.</p>
          -->
          </div>
        </section>
        <div class="wall">
          <div class="post">
            <div class="name">joonsub</div>
            <div class="comment">hello, how are you?</div>
          </div>
          <div class="post">
            <div class="name">bingsoo</div>
            <div class="comment">facebook hollue</div>
          </div>
          <?php

          $host="localhost"; // Host name
          $username="joonsu5_emo"; // Mysql username
          $password="password123"; // Mysql password
          $db_name="joonsu5_emo"; // Database name
          $tbl_name="guestbook"; // Table name

          // Connect to server and select database.
          mysql_connect("$host", "$username", "$password")or die("cannot connect server ");
          mysql_select_db("$db_name")or die("cannot select DB");
          $sql="SELECT * FROM $tbl_name";
          $result=mysql_query($sql);
          while($rows=mysql_fetch_array($result)){
          ?>
          <div class="post">
            <div class="name"><? echo $rows['name']; ?></div>
            <div class="comment"><? echo $rows['comment']; ?></div>
          </div>
          <?php
          }
          mysql_close(); //close database
          ?>
        </div>
        <div class="wrapper">
          <form class="form-horizontal" id="form1" name="form1" method="post" action="addguestbook.php">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="inputName" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
              <div class="col-sm-10">
                <input type="phone" class="form-control" id="inputPhone" placeholder="(XXX) XXX-XXXX">
              </div>
            </div>
            <div class="form-group">
              <label for="inputComment" class="col-sm-2 control-label">Comment</label>
              <div class="col-sm-10">
                <textarea type="comment" class="form-control" id="inputComment" placeholder="Say something"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Post</button>
              </div>
            </div>
          </form>
        </div>
        <section class="center">
          If you would like to include any note or share any personal greetings, please email: <a href="mailto:2heaven@gmail.com">2heaven2017@gmail.com</a><br />
          Or call Min Chung (brother in law) at: (323) 642-8774
        </section>
        <footer>
          Please come back as we will be updating this site with a more formal eulogy, pictures, the funeral service note, and more.
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!--build:js js/main.min.js -->
        <script src="js/main.js"></script>
        <!-- endbuild -->

        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-90567203-1', 'auto');
        ga('send', 'pageview');

      </script>
    </body>
</html>
