<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Cyber Troops Club Uitmck (CTCU)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <p align="center"><img src="photo/ct.png" style="width:50%;" class="w3-round"></p><br><br>
    <h4><b>Cyber Troops Club</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
	<a href="#aboutus" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT US</a> 
	<a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
<a href="#activities" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITIES</a> 	
    <a href="#achievements" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
	<a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a> 
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

<!-- Header -->
  <header id="home">
<div class="w3-row-padding w3-padding-20 w3-center" id="home">
    <h3 class="w3-jumbo"><b>WELCOME TO CYBER TROOPS CLUB</b></h3></P>
   

<!-- Images of Club -->
    <div class="w3-col m8 w3-center">
      <p align="center"><img src="photo/ctc.png" alt="club" style="width:150%"></p>
    </div>
  <div class="w3-container w3-padding-large" id="aboutus">
    <h4><b>About Us</b></h4>
    <p>Cyber Troops Club UiTM Cawangan Kelantan are particularly common and play a crucial role in fostering a sense of belonging, promoting extracurricular engagement, and enhancing the overall student experience. They provide avenues for students to explore their interests outside the classroom, develop leadership skills, and connect with peers who share similar passions. Overall, our club serve as valuable social and organizational structures that bring people together, foster collaboration and community, and provide avenues for personal growth and fulfillment.</p>
    <hr>
    
    


<!-- Committee section-->
	<div class="w3-row-padding w3-padding-20 w3-center" id="committee">
	<h4><p align="center"><b>Cyber Troops Club Committee</b></p></h4>
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/iqah.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>President</b></p>
        <p>Hello, my name is Nurul Haziqah Binti Bakri. I am 23 years old this year.  As the elected president of the club, I am honored to lead our members in our shared mission and vision.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/wanie.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Vice President</b></p>
        <p>Hello, my name is Nur Shahwanie binti Mohamad Yaacob. I am 23 years old this years.  I am committed to assist my members till success. Cheers!</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/ikha.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Secretary</b></p>
        <p>Hello, my name is Siti Nur Zulaikha binti Hasbullah. I am 23 years old. I adeptly manage administrative tasks with efficiency and precision. Fighting!</p>
      </div>
    </div>
  </div>
  
	
    </p>
	
	<!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/bella.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Treasurer</b></p>
        <p>I am Siti Nur Nabila binti Mohd Razali. My dedication to financial stewardship ensures the efficient allocation and responsible utilization of resources for our Cyber Troops Club's success.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/ucop.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Project Leader</b></p>
        <p>I am Mhd Yusuf bin Ahmad.  I am dedicated to guiding our team towards success by leveraging our collective skills and expertise to accomplish our goals effectively and efficiently.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/una.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Head of Special Bureau</b></p>
        <p>I am Bahiyyah Husna binti Hasnan.  As a head of special bureau, I am entrusted with leading a team dedicated to tackling complex challenges with precision and expertise.</p>
      </div>
    </div>
  </div>
    <hr>
    
     
	 <!-- Slideshow Header -->
  <div class="w3-container" id="membership">
    <h2 class="w3-text-black">Membership for Cyber Troops Club 2024</h2>
    <div class="w3-display-container mySlides">
    <img src="photo/membercard.png" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p><a href="admin/home.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Register Membership</a></p>
      </div>
    </div>
	
	
  
  <!-- Header Activity -->
 <p align="center"> <div class="w3-container w3-padding-large" id="activities"><h3>Cyber Troops Club Activities</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>
    
	
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    
	
  <!-- Header Achievements-->
  <div class="w3-container" style="margin-top:80px" id="achievements">
    <h3>Achievements Showcase</b></h3>
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="photo/1.png" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="photo/2.png" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img src="photo/3.png" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>

    <div class="w3-half">
      <img src="photo/41.png" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="photo/5.png"style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img src="photo/6.png" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

   <!-- Contact -->
     

  <div class="w3-container" id="contact" style="margin-top:75px">
  
    <h3><b>Contact Us Form for Cyber Troops Club</b></h3>
    <p>Do you want to join Cyber Troops Club? Fill out the form and fill me in with the details :) We love meeting new members!</p>
    <form action="admin/add_contact.php" target="_blank">
	   <div class="w3-section">
	   <label>User ID</label>
        <input class="w3-input w3-border" type="text" name="contact_id" required>
      </div>
	  	   <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="contact_name" required>
      </div>
	  <div class="w3-section">
	   <label>Student ID</label>
        <input class="w3-input w3-border" type="text" name="contact_studid" required>
      </div>
	  <div class="w3-section">
	  <label>Phone</label>
        <input class="w3-input w3-border" type="text" name="contact_phone" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="contact_email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="contact_desc" required>
      </div>
	 
      <button type="submit" class="w3-button w3-block w3-padding-large w3-black w3-margin-bottom">Send Message</button>
    </form>  
  </div>
  
  
  <!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-black"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
  </div>
  <p>Powered by <a href="admin/index.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">CTC Groups.co</a></p>
</footer>
 
    
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
