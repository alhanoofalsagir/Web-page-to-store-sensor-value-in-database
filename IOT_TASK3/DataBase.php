<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <title>result</title>
</head>
    <body>
      <div class="header">
					<a class="logo" href="#"><img src="https://s-m.com.sa/ar/images/logo.png" alt="logo" /></a>
		</div>
          </br>
            </br>
            <div class="rania">
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="smartRania";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo "Give value <br>";
                    echo " Not submit";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "  The value is : " . $_GET['value'];
                    echo " Successfully submit";
                   }
                   $query= "insert into RaniaValue values($value)" ;
                   $run=mysqli_query($conn,$query)
                ?>
              </div>
            </form>
    </body>
</html>
