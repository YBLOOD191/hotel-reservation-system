<?php 
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PRINCE HOTEL</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

    
</head>

    <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/logo.png" alt="Site logo">
                                PRINCE HOTEL
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#top">HOME <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-4">ABOUT </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-5">GALLERY </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-6">CONTACT US </a>
                                  </li>
                                  
                                  <?php 
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
         <li class="nav-item"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
              <li class="nav-item"><a class="nav-link" href="order.php">Booking Status</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        	</ul>
        </li>
        <?php } else
		{
		?>
		<li><a class="nav-link" href="Login.php"title="login">&nbsp;&nbsp;User Login</a>
        </li>
		<?php 
		} ?>
                                 
                                </ul>
                                
        
        
      
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>
            <div class="tm-section tm-bg-img" style="background-image: url('img/bg-img-1.jpg');">
               ############
            </div>
            
            <div class="tm-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="tm-section-title">Here are the Types of rooms we offer....</h2>
                            <p class="tm-color-white tm-section-subtitle">WELCOME TO PRINCE HOTEL</p>
                            
                        </div>                
                    </div>
                </div>        
            </div>
            
            <div class="tm-section tm-position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow">
                    <polygon fill="#e67c03" points="0,0  100,0  50,60"></polygon>                   
                </svg> 

                <div class="container tm-pt-5 tm-pb-4">
                   
                        <div class="page-content-product">
                            
                               <div class="container">
                                  <div class="row clearfix">
                                
                                  
                                         
                                              <?php 
	                                        $sql=mysqli_query($con,"select * from rooms");
	                                        while($r_res=mysqli_fetch_assoc($sql))
	                                        {
	                                        ?>
	                                         	<div class="col-sm-4">
                                            <img src="image/rooms/<?php echo $r_res['image']; ?>"class="box-img"alt="Image"id="img1"height="285px"> <!--Id Is Img-->
                                            <h4 class="Room_Text">[ <?php echo $r_res['type']; ?>]</h4>
                                            <p class="text-justify"><?php echo substr($r_res['details'],0,100); ?></p><br>
	                                    <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="btn btn-danger text-center">Read more</a><br><br>
                                        </div>
	                                    <?php } ?>
                                           
                                          </div>
                                          </div>
                                          
                                  </div>
                               </div>
                            </div>
                         
            
            <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-4">
                <div class="container">
                    
                    <div class="container-fluid text-center">
                        <div class="container"> 
                          <div class="row content">
                            <div class="col-sm-12">
                              <h1 id="font"><font style="font-family: 'Lucida Handwriting', serif;text-shadow:1px 1px #000;">{ PRINCE Hotel }</font></h1><br>
                              <p class="text-justify">A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator and other kitchen facilities, upholstered chairs, a flat screen television, and en-suite bathrooms. Small, lower-priced hotels may offer only the most basic guest services and facilities. Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, business centre (with computers, printers, and other office equipment), childcare, conference and event facilities, tennis or basketball courts, gymnasium, restaurants, day spa, and social function services. Hotel rooms are usually numbered (or named in some smaller hotels and B&Bs) to allow guests to identify their room. Some boutique, high-end hotels have custom decorated rooms. Some hotels offer meals as part of a room and board arrangement. In the United Kingdom, a hotel is required by law to serve food and drinks to all guests within certain stated hours.[citation needed] In Japan, capsule hotels provide a tiny room suitable only for sleeping and shared bathroom facilities.
                        
                        The precursor to the modern hotel was the inn of medieval Europe. For a period of about 200 years from the mid-17th century, coaching inns served as a place for lodging for coach travelers. Inns began to cater to richer clients in the mid-18th century. One of the first hotels in a modern sense was opened in Exeter in 1768. Hotels proliferated throughout Western Europe and North America in the early 19th century, and luxury hotels began to spring up in the later part of the 19th century.
                        
                        Hotel operations vary in size, function, complexity, and cost. Most hotels and major hospitality companies have set industry standards to classify hotel types. An upscale full-service hotel facility offers luxury amenities, full service accommodations, an on-site restaurant, and the highest level of personalized service, such as a concierge, room service, and clothes pressing staff. Full service hotels often contain upscale full-service facilities with a large number of full service accommodations, an on-site full service restaurant, and a variety of on-site amenities. Boutique hotels are smaller independent, non-branded hotels that often contain upscale facilities. Small to medium-sized hotel establishments offer a limited amount of on-site amenities. Economy hotels are small to medium-sized hotel establishments that offer basic accommodations with little to no services. Extended stay hotels are small to medium-sized hotels that offer longer-term full service accommodations compared to a traditional hotel.</p>
                        <h1 align="center"id="font"><font style="font-family: 'Lucida Handwriting', serif;text-shadow:1px 1px #000;">[ Services ]</font></h1><br>
                        <p class="text-justify">Full-service hotels often provide a wide array of guest services and on-site facilities. Commonly found amenities may include: on-site food and beverage (room service and restaurants), meeting and conference services and facilities, fitness center, and business center. Full-service hotels range in quality from mid-scale to luxury. This classification is based upon the quality of facilities and amenities offered by the hotel. [8] Examples include: Holiday Inn, Kimpton Hotels, Hilton, Marriott, and Hyatt Regency brands.</p>
                            </div>
                          </div><br><br>
                          <div class="row"align="center">
                          <!--map Start Here-->
                          <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
                              <a href="#" type="button" data-toggle="modal" data-target="#myModal"><img src="image/icon/icon-01.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
                          </div>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                <iframe class="frame"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.9012415990155!2d77.37085911440647!3d28.602739392180986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce57ca5ff4435%3A0x6de631b7a5bfdacb!2sUnion+Bank+Of+India!5e0!3m2!1sen!2sin!4v1555502551059!5m2!1sen!2sin" width="550"height="300" frameborder="0" style="border:1" allowfullscreen></iframe>
                              </div>
                            </div>
                          </div>
                        </div>      
                        <!--Map Close Here-->
                                <div class="col-sm-2">
                                  <h4><b>Address</b></h4>
                                  <b>Tudor,Mombasa</b>
                                </div>
                                <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
                                    <a href="#"><img src="image/icon/icon-02.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
                                </div>
                                 <div class="col-sm-2">
                                  <h4><b>Phone</b></h4>
                                      <b>+2547 406 40228</b>
                                </div>
                                <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
                                    <a href="#"><img src="image/icon/icon-03.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
                                </div>
                                 <div class="col-sm-2">
                                  <h4><b>Email-Id</b></h4>
                                      <b>princehotel@gmail.com</b>
                                </div>
                          </div><br><br>
                        </div>
                        </div>
                </div>
            </div>

            <div class="tm-bg-video">
                <div class="overlay">
                    <i class="fa fa-5x fa-play-circle tm-btn-play"></i>
                    <i class="fa fa-5x fa-pause-circle tm-btn-pause"></i>
                </div>
                <video controls loop class="tmVideo">
                    <source src="videos/video.mp4" type="video/mp4">
                    <source src="videos/video.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <div class="tm-section tm-section-pad tm-bg-img" id="tm-section-5">                                                        
                   
                    <div class="container">
                        <h2>Image Gallery</h2>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/1.jpg" target="_blank">
                                <img src="image/image gallery/1.jpg" alt="img1 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/2.jpg" target="_blank">
                                <img src="image/image gallery/2.jpg" alt="img2 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/3.jpg" target="_blank">
                                <img src="image/image gallery/3.jpg" alt="img3 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/Delux Room Single Bed Ac Room/img1.jpg" target="_blank">
                                <img src="image/Luxury Room/Luxury_img8.jpg" alt="img3 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/Delux Room Single Bed Ac Room/img3.jpg" target="_blank">
                                <img src="image/Luxury Room/Luxury_img9.jpg" alt="img3 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/Delux Room Single Bed Ac Room/img4.jpg" target="_blank">
                                <img src="image/Luxury Room/Luxury_img10.jpg" alt="img3 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/4.jpg" target="_blank">
                                <img src="image/image gallery/4.jpg" alt="img4 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/5.jpg" target="_blank">
                                <img src="image/image gallery/5.jpg" alt="img5 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/6.jpg" target="_blank">
                                <img src="image/image gallery/6.jpg" alt="img6 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/7.jpg" target="_blank">
                                <img src="image/image gallery/7.jpg" alt="img7 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/8.jpg" target="_blank">
                                <img src="image/image gallery/8.jpg" alt="img8 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/9.jpg" target="_blank">
                                <img src="image/image gallery/9.jpg" alt="img9 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/10.jpg" target="_blank">
                                <img src="image/image gallery/10.jpg" alt="img10 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/11.jpg" target="_blank">
                                <img src="image/image gallery/11.jpg" alt="img11 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/12.jpg" target="_blank">
                                <img src="image/image gallery/12.jpg" alt="img12 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/13.jpg" target="_blank">
                                <img src="image/image gallery/13.jpg" alt="img13 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/14.jpg" target="_blank">
                                <img src="image/image gallery/14.jpg" alt="img14 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="image/image gallery/15.jpg" target="_blank">
                                <img src="image/image gallery/15.jpg" alt="img15 Not Show" style="width:100%;height:160px;">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
            </div>           
            
            <div class="tm-section tm-section-pad tm-bg-img tm-position-relative" style="background-image: url('img/bg-img-3.jpg');">
                <div class="container ie-h-align-center-fix">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-7">
                            <div id="google-map"></div>        
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 mt-3 mt-md-0"> 
                        <div class="container"style=" border-radius: 5px; background-color: #87878a93; padding: 10px;">
                            <?php echo @$msg; ?>
                                <div style="text-align:center">
                                  <h2>Contact Us</h2>
                                  <p>Swing by for a tot of scotch, or leave us a message:</p>
                                </div>
                                <div class="row"style="content: ''; display: table; clear: both;">
                                  <div class="column"style=" float: left; width: 50%; margin-top: 10px; padding: 20px;">
                                    <img src="jasper.jpg" style="width:100%">
                                  </div>
                                  <div class="column"style=" float: left; width: 50%; margin-top: 10px; padding: 20px;">
                                    <form action="insert.php" method="POST">
                                      <label for="fname">First Name</label>
                                      <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                      <label for="lname">Last Name</label>
                                      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                      <label for="country">Country</label>
                                      <select id="country" name="country">
                                        <option value="kenya">Kenya</option>
                                        <option value="tanzania">Tanzania</option>
                                        <option value="uganda">Uganda</option>
                                        <option value="rwanda">Rwanda</option>
                                        <option value="burundi">Burundi</option>
                                      </select>
                                      <label for="message">Message</label>
                                      <textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>
                                      <input type="submit" value="Submit"style=" background-color: #e67c03; color: white; padding: 12px 20px; border: none; cursor: pointer; .hover:background-color: #45a049;">
                                    </form>
                                  </div>
                                </div>
                              </div> </p>
                    </div>        
                </div>
            </div>
            </div>
            
            <footer class="tm-bg-dark-blue">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                        Copyright &copy; <span class="tm-current-year">2019</span> Your Company
                        
                        - Design: RICHARD CORNEL</p>        
                    </div>
                </div>                
            </footer>
        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
        <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
        <script>

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(13.7567928,100.5653741),
                    scrollwheel: false
                };

                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
              });

                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
              });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            } 

            function setCarousel() {
                
                if ($('.tm-article-carousel').hasClass('slick-initialized')) {
                    $('.tm-article-carousel').slick('destroy');
                } 

                if($(window).width() < 438){
                    // Slick carousel
                    $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    });
                }
                else {
                 $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    });   
                }
            }

            function setPageNav(){
                if($(window).width() > 991) {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 79
                    });   
                }
                else {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 65
                    });   
                }
            }

            function togglePlayPause() {
                vid = $('.tmVideo').get(0);

                if(vid.paused) {
                    vid.play();
                    $('.tm-btn-play').hide();
                    $('.tm-btn-pause').show();
                }
                else {
                    vid.pause();
                    $('.tm-btn-play').show();
                    $('.tm-btn-pause').hide();   
                }  
            }
       
            $(document).ready(function(){

                $(window).on("scroll", function() {
                    if($(window).scrollTop() > 100) {
                        $(".tm-top-bar").addClass("active");
                    } else {
                        //remove the background property so it comes transparent again (defined in your css)
                       $(".tm-top-bar").removeClass("active");
                    }
                });      

                // Google Map
                loadGoogleMap();  

                // Date Picker
                const pickerCheckIn = datepicker('#inputCheckIn');
                const pickerCheckOut = datepicker('#inputCheckOut');
                
                // Slick carousel
                setCarousel();
                setPageNav();

                $(window).resize(function() {
                  setCarousel();
                  setPageNav();
                });

                // Close navbar after clicked
                $('.nav-link').click(function(){
                    $('#mainNav').removeClass('show');
                });

                // Control video
                $('.tm-btn-play').click(function() {
                    togglePlayPause();                                      
                });

                $('.tm-btn-pause').click(function() {
                    togglePlayPause();                                      
                });

                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());                           
            });

        </script>             

</body>
</html>

