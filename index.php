<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <title>Website Monitoring Realtime</title>

    <script src="jquery/jquery.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        setInterval(function() {
          $("#cekph").load('cekph.php');
          $("#cekstatus").load('cekstatus.php')
        }, 3000);
      });
    </script>
</head>
<body>

<div class="container" style="text-align : center; padding-top : 20px">
    <img src="images/air.png" style="width: 200px">
    <h1></h1>
    <h2> Sistem Monitoring Kualitas Air <br> Berbasis Website Secara Realtime</h2>
    
    <div style="justify-content: center; padding-top: 50px; display: flex">
      <div class="card text-center" style="width: 50%">
        <div class="card header" 
          style="font-size: 30px; font-weight: bold; background: lightblue">
          Kadar pH
        </div>
        <div class="card-body">
          <h1 style="font-weight: bold"><span id="cekph">sensor</span> </h1>
        </div>
        <div class="card-footer">
        <span >Status : </span><span id="cekstatus">-</span>  
        </div>
      </div>
    </div>
</div>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>