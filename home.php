<!-- <?php
session_start();


include('connection.php'); 
include('login.php'); 

$email=$_POST['email'];
$password=$_POST['password']; 

$sql = "select * from register where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: home.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            
        }     


?> -->
<!DOCTYPE html>
<html>
  <head>
    <title>Indian Football Fans Association</title>
    <link rel="stylesheet" type="text/css" href="css/IFFA.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,200;1,300&display=swap"
      rel="stylesheet"
    />

  </head>
  <body>
    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">...</div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    

      <div class="text-section">
        <h1>The IFFA welcomes you !</h1>
        <p>
          Welcome <?php echo $_SESSION['username'] ?>
        </p>
      </div>
    </section>
    <?php
    if ($_SESSION['club']=='Liverpool Fans India') {
      include 'liverpool.php';
    } elseif ($_SESSION['club']=='Bharath Spurs Fans') {
      include 'spurs.php';
    }elseif ($_SESSION['club']=='Barca Gang India'){
      include 'barca.php';
    }elseif ($_SESSION['club']=='PSG supporters club India'){
      include 'psg.php';
    }elseif ($_SESSION['club']=='Bharath Red devils'){
      include 'manu.php';
    }elseif ($_SESSION['club']=='Madridstas in India'){
      include 'madrid.php';
    }elseif ($_SESSION['club']=='Indian Juventus Supporters'){
      include 'juve.php';
    }elseif ($_SESSION['club']=='Chelsea India'){
      include 'chelsea.php';
    }elseif ($_SESSION['club']=='Jai milan'){
      include 'milan.php';
    }else {
      include 'bayern.php';
    }
    ?>
    
    
    <section id="footer">
      <div class="footer-row">
        <div class="footer-column address">
          <h1>IFFA</h1>
          <hr />
          <p>
            044-22415671<br />
            reachiffa@gmail.com<br /><br />
          </p>
          <p>XYZ street, Gandhi Nagar, Chennai, Tamilnadu</p>
        </div>
        <div class="footer-column">
          <ul class="links">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#aboutus">About us</a></li>
            <li><a href="#clubsincluded">Fan clubs included</a></li>
            <li><a href="#perks">Perks</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </section>
    <div class="copyrights">
      <p>
        © 2021 Indian Football Fans Association | All rights reserved | Site by
        Kaushik Ayyanar
      </p>
    </div>
    <script>

      $(document).ready(function(){
        $(".enroll-btn").click(function(){
          $("#exampleModal").modal('show');
        });       
      });
        

        // $(".btn").click(function(){
            
        // });
    
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="IFFA.js"></script>
    <script type="text/javascript" src="authentication.js"></script>
  </body>
</html>
