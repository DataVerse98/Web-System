<?php
include "conn.php";

$ic = "980109-15-5011";

$sql = "SELECT * FROM appointment WHERE ic_num = '$ic'";
		$query = $conn -> query($sql);
    $row = $query -> fetch_assoc();
    
    //$theDate = $row['date'];

?>

<!DOCTYPE html>

<html>
  <head>
    <title>M-Janji</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="./img/download.jpg" />
    <!--Template css files-->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/skins/yellow.css" type="text/css" />

    <!--Live Style Switcher - Demo Only-->
    <link rel="stylesheet" class="alternate-style" title="pink" href="css/skins/pink.css" type="text/css" disabled/>
    <link rel="stylesheet" class="alternate-style" title="blue" href="css/skins/blue.css" type="text/css" disabled/>
    <link rel="stylesheet" class="alternate-style" title="orange" href="css/skins/orange.css" type="text/css" disabled/>
    <link rel="stylesheet" class="alternate-style" title="yellow" href="css/skins/yellow.css" type="text/css" disabled/>
    <link rel="stylesheet" class="alternate-style" title="green" href="css/skins/green.css" type="text/css" disabled/>
    <link rel="stylesheet" href="css/styleSwitcher.css" type="text/css" />

    <!--modal css-->
    <link rel="stylesheet" href="css/modalStyle.css" type="text/css" />

  </head>
  <body>

    <!--Preloader-->
    <div class="preloader">
      <div class="loader">

      </div>
    </div>
    <!--Preloader End-->

    <!--Main container-->
    <div class="main-container">
      <!--Aside-->
      <div class="aside">
        <!--logo-->
        <div class="logo">
          <a href="#">M-Janji</a>
        </div>
        <!--end logo-->

        <!--nav Toggler Btn-->
        <div class="nav-toggler">
          <span></span>
        </div>
        <!--end nav Toggler Btn-->

        <!--navbar-->
        <ul class="nav">
          <li>
            <a href="#home" class="active"><i class="fa fa-home"></i> Home</a>
          </li>
          <li>
            <a href="#about"><i class="fa fa-user"></i> About</a>
          </li>
          <li>
            <a href="#service"><i class="fa fa-list"></i> Services</a>
          </li>
          <!--<li>
            <a href="#portfolio"><i class="fa fa-briefcase"></i> Portfolio</a>
          </li>
          <li>
            <a href="#blog"><i class="fa fa-envelope"></i> Blog</a>
          </li>-->
          <li>
            <a href="#contact"><i class="fa fa-comments"></i> Contact</a>
          </li>
        </ul>
        <!--end navbar-->

        <!--copyright-->
        <div class="copyright-text">
          &copy; 2020 Template
        </div>
        <!--end copyright-->
      </div>
      <!--end Aside-->

      <!--Main Content-->
      <div class="main-content">
        <!--home section-->
        <section class="home section active" id="home">
          <div class="container">
            <div class="intro">
              <img src="img/home/maybank.jpg" alt="" class="shadow-dark" />
              <h1>Maybank Janji</h1>
              <!--<p>I'm a Computer Science Student</p>-->
              <!--<div class="social-links">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>-->
            </div>
          </div>
        </section>
        <!--end home section-->

        <!--About section-->
        <section class="about section" id="about">
          <div class="container">
            <div class="row">
              <div class="section-title padd-15">
                <h2>About Us</h2>
              </div>
            </div>
            <div class="row">
              <div class="about-content padd-15">
                <div class="row">
                  <div class="about-text padd-15">
                    <h3>
                      Welcome to Maybank, Malaysia's no. 1 online banking site. Thank you for choosing us.</span>
                    </h3>
                    <p>
                      Due to the coronavirus or COVID-19 pandemic. We had take a big precaution in order to keep our customers and staffs safe and free from the virus. We had take a serious decision where some of our staff will be shifted and decrease the amount of staff inside our office in order to tackle this situation. In addition, the customers are needed to queue long before they are allowed to enter the premises. Therefore, we create this system to help the customers by informing them the current situation and giving them the choice when is the good time to come to our bank.
                    </p>
                  </div>
                </div>
                <div class="row"> 
                </div>

                <div class="row">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--end About section-->

        <!--Service Section-->
        <section class="service section" id="service">
          <div class="container">
            <div class="row">
              <div class="section-title padd-15">
                <h2>Service</h2>
              </div>
            </div>
            <div class="row">
              <div class="time">
                <div class="popular-time">
                  <div class="progress">
                    <div class="progress-in" style="width: 36%;"></div>
                    <div class="skill-percent">9:00 AM</div>
                  </div>
                  <div class="progress">
                    <div class="progress-in" style="width: 56%;"></div>
                    <div class="skill-percent">10:00 AM</div>
                  </div>
                  <div class="progress">
                    <div class="progress-in" style="width: 66%;"></div>
                    <div class="skill-percent">11:00 AM</div>
                  </div>
                  <div class="progress">
                    <div class="progress-in" style="width: 76%;"></div>
                    <div class="skill-percent">12:00 PM</div>
                  </div>
                  <div class="progress">
                    <div class="progress-in" style="width: 0%;"></div>
                    <div class="skill-percent">1:00 PM</div>
                  </div>
                  <div class="progress">
                    <div class="progress-in" style="width: 86%;"></div>
                    <div class="skill-percent">2:00 PM</div>
                  </div>
                  <div class="progress">
                    <div class="progress-in" style="width: 76%;"></div>
                    <div class="skill-percent">3:00 PM</div>
                  </div>
                  <div class="progress">
                    <div class="progress-in" style="width: 53%;"></div>
                    <div class="skill-percent">4:00 PM</div>
                  </div>
                  <div class="progress">
                    <div class="progress-in" style="width: 0%;"></div>
                    <div class="skill-percent">5:00 PM</div>
                  </div>
                <!--<img src="img/Service/popular_time.JPG" alt="">-->
                </div>
              </div>
            </div>
            <div class="row">
              <button id="modal-btn" class="btn">Book</button>
            </div>
            <div class="row">
              <div class="appointment">
                <h5>Appointment Time</h5>
                <?php if($row['date'] !=null) {?>
                  <div class="date" id="date"><?php echo $row['date'];?></div>
                  <?php } else {?>
                    <div class="date" id="date"></div>
                  <?php }?>
                  <?php if($row['date'] !=null) {?>
                  <a href="delete.php?id=<?php echo $ic;?>" class="btn">Delete</a>
                  <?php }?>
              </div>
            </div>
          </div>
        </section>
        <!--Service Section End-->

        <!--Contact Section-->
        <section class="contact section" id="contact">
          <div class="container">
            <div class="row">
              <div class="section-title padd-15">
                <h2>Contact Us</h2>
              </div>
            </div>
            <div class="row">
              <!--contact-info-item-->
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <h4>Call Us On</h4>
                <p>+60135519843</p>
              </div>
              <!--contact-info-item end-->
              <!--contact-info-item-->
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-map-marker"></i></div>
                <h4>Office</h4>
                <p>In your heart</p>
              </div>
              <!--contact-info-item end-->
              <!--contact-info-item-->
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-envelope"></i></div>
                <h4>Email</h4>
                <p>info@gmail.com</p>
              </div>
              <!--contact-info-item end-->
            </div>
            <!--Contact form-->
            <div class="row">
              <form action="" class="contact-form padd-15">
                <div class="row">
                  <div class="form-item col-6 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Name*"
                      />
                    </div>
                  </div>
                  <div class="form-item col-6 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Email*"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-item col-12 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Subject*"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-item col-12 padd-15">
                    <div class="form-group">
                      <textarea
                        type="text"
                        class="form-control"
                        placeholder="Your Message. . . *"
                      /></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 padd-15">
                    <button type="submit" class="btn">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
            <!--Contact form end-->
          </div>
        </section>
        <!--Contact Section End-->
      </div>
      <!--Main Content End-->
    </div>
    <!--Main container-->

    <!--modal-->
    <form action="add_appointment.php" method="POST" enctype="multipart/form-data">
      <div id="my-modal" class="modal padd-15">
          <div class="modal-content">
              <div class="modal-header">
                  <span class="close">&times;</span>
                  <h2>Insert Work Done</h2>
              </div>
              <div class="modal-body">
                    <div class="form-group">
                      <label>IC. Number</label>
                      <input type="text" name="ic_num" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Reason</label>
                      <input list="reason" name="purpose" class="form-control">
                        <datalist id="reason">
                            <option value="ASB">
                            <option value="open bank account">
                            <option value="others">
                        </datalist>
                  </div>
                  <div class="form-group">
                      <label>Date</label>
                      <input type="date" name="date" class="form-control">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" name="add_new" class="btn">Submit</button>
              </div>
          </div>
      </div>
    </form>
    <!--end modal-->

    <!--Live Style Switcher - Demo Only-->
    <div class="style-switcher">
      <div class="toggle-style-switcher">
        <i class="fa fa-cog fa-spin"></i>
      </div>
      <h5>Style Switcher</h5>
      <ul>
        <li><a href="#" title="yellow" style="background-color: #ffb400;" onclick="setActiveStyle('yellow')"></a></li>
        <li><a href="#" title="pink" style="background-color: #ec1839;" onclick="setActiveStyle('pink')"></a></li>
        <li><a href="#" title="blue" style="background-color: #2196f3;" onclick="setActiveStyle('blue')"></a></li>
        <li><a href="#" title="orange" style="background-color: #fa5b0f;" onclick="setActiveStyle('orange')"></a></li>
        <li><a href="#" title="green" style="background-color: #72b626;" onclick="setActiveStyle('green')"></a></li>
      </ul>
      <h5>Body Skin</h5>
      <label>
        <input type="radio" class="body-skin" name="body-style" value="light" checked="true">
        Light
      </label>
      <label>
        <input type="radio" class="body-skin" name="body-style" value="dark">
        Dark
      </label>
    </div>
    <!--Live Style Switcher - Demo Only End-->

    <!--Remplate js-->
    <script src="js/script.js"></script>

    <!--Live Style js - Demo Only-->
    <script src="js/styleSwitcher.js"></script>

    <!--modal-->
    <script src="js/modal.js"></script>

  </body>
</html>
