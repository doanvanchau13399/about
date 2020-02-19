
<?php
require_once 'init.php';
if(isset($_GET['trangchu']))
{
    $temp = $_GET['trangchu'];
    $id = $_GET['id'];
}
else
{
    $temp = null;
}
if(isset($_GET['index']))
{
    $temp2 = $_GET['index'];
}
else
{
    $temp2 = null;
}
if($temp2=='product_details')
{
  include ('product_details.php');
  exit();
}
elseif($temp2=='carts')
{
  include ('cart.php');
  exit();
}
$active= 'About';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>About</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="Home.css" rel="stylesheet">
  <link rel="stylesheet" href="footer.css">
</head>

<body>
  <?php include ('header.php')?>
  <!-- Page Content -->
  <div class="container">
    <div id="hot" style="text-align: center;text-transform: uppercase;">
        <div class="box" style="background:lightblue;">
            <div class="container">
                <div class="col-md-12">
                    <h2>Introduce</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">           
        <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque consectetur illo illum cum obcaecati eos eligendi voluptate, similique quas harum veniam dolorum ipsam impedit. Aliquam aperiam autem repudiandae tenetur dolorum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut nulla odit inventore a sapiente ullam blanditiis non cupiditate, ex distinctio fugit autem rerum. Perspiciatis sunt rem dolore nesciunt voluptate? Sequi.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus illo incidunt voluptates iste. Ullam excepturi enim earum deleniti accusantium sunt totam. Quasi ea ex exercitationem! Ducimus a ratione voluptate minima?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sunt consectetur nemo repellendus quia. Non delectus dolorum enim, quasi laborum neque amet velit, quia illum est minima eligendi earum nobis?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque consectetur illo illum cum obcaecati eos eligendi voluptate, similique quas harum veniam dolorum ipsam impedit. Aliquam aperiam autem repudiandae tenetur dolorum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut nulla odit inventore a sapiente ullam blanditiis non cupiditate, ex distinctio fugit autem rerum. Perspiciatis sunt rem dolore nesciunt voluptate? Sequi.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus illo incidunt voluptates iste. Ullam excepturi enim earum deleniti accusantium sunt totam. Quasi ea ex exercitationem! Ducimus a ratione voluptate minima?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sunt consectetur nemo repellendus quia. Non delectus dolorum enim, quasi laborum neque amet velit, quia illum est minima eligendi earum nobis?
            </p>
        </div>
        
        
    </div>
  </div>
  <!-- /.container -->

  <?php include ('footer.php')?>
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  
</body>
</html>
