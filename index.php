<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Browser Detector in PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Browser Detector in PHP</h1>
      </div>
          <div class="card-body">
            <?php
            function detect(){
              $info = $_SERVER['HTTP_USER_AGENT'];
              if(strpos($info,"Chrome") == true)
              echo "<h4>You are using Google Chrome</h4>";
              if(strpos($info,"Firefox") == true)
              echo "<h4>You are using Firefox</h4>";
              elseif(strpos($info,"Trident/7") == true)
              echo "<h4>You are using Internet Explorer</h4>";
              else{
              echo "<h4>Other Browser</h4>";
              }
            }
            detect();
            ?>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>