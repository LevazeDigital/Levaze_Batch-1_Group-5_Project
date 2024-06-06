<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8508474099963509"
     crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog Website</title>
    
    <link rel="stylesheet" href="styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

            <!-- navbar -->


<body>
        <header>
            <nav class="navbar">
                <div class="navcontainer">
                    <a href="#" class="logo">TIMES IN MUMBAI</a>
                    <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="latest-news.html">Latest News</a></li>
                        <li><a href="sports.html">Sports</a></li>
                        <li><a href="companies.html">Economy</a></li>
                    <li><a href="education.html">Education</a></li>

                        <li><a href="signup.html">Login</a></li>
                        <li><a href="signin.html">Sign In</a></li>
                        <li><a href="#logout">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
                <!-- body -->
                <div id="floating-ad">
                    <a href="https://www.amazon.in/HP-i3-1215U-15-6-inch-Graphics-Speakers/dp/B0BP2M7CCS/ref=asc_df_B0BP2M7CCS/?tag=googleshopdes-21&linkCode=df0&hvadid=619830760757&hvpos=&hvnetw=g&hvrand=13010516322484198022&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1007785&hvtargid=pla-1933765556079&psc=1&mcid=f0692e5ea0ec3843b5ea2161cf8a26d1&gclid=Cj0KCQjwxeyxBhC7ARIsAC7dS3-v9aGhIobYqCnlurspemEd-hWKZbhWeFhc2qeuOBjOclX5j6PeeUIaApA2EALw_wcB">
                        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img24/desktops/bigbets/Variant_2_540x700.jpeg" alt="Advertisement">
                    </a>
                </div>
        <div class="containers container mt-5">
        <h1>Trending News</h1>

                <?php
                $con=new mysqli("localhost","root","sequelmysql","signUpForm");
                $que1="select * from p2index limit 1";
                $res1=$con->query($que1);
                while($row1=$res1->fetch_assoc())
                {
                ?>
        <div class="row my-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $row1['image_url'];?>" alt="">
                    <a href="companies.html">
                        <span class="badge rounded-pill bg-primary">COMPANIES </span>
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5  class="card-title"><?php echo $row1['content_name'];?></h5>
                        </a>
                        <p  class="card-text"><?php echo $row1['content_description'];?></p>
                        <p class="last-updated">Last Updated: <?php echo $row1['last_updated'];?></p>
                    </div>
                    
                </div>
            </div>
            <?php
                }
                ?>
            <div class="col-md-5">
                <div class="row">
            <?php
                $con=new mysqli("localhost","root","sequelmysql","signUpForm");
                $que2="select * from p2indext2 limit 1";
                $res2=$con->query($que2);
                while($row2=$res2->fetch_assoc())
                {
                ?>
                    <div class="col-md-6">
                        <div class="card">
                            <img src="<?php echo $row2['image_url'];?>" alt="">
                            <a href="latest-news.html">
                                <span class="badge rounded-pill bg-success">LATEST NEWS</span>
                            </a>
                            <div class="card-body">
                                <a href="#">
                                <h5  class="card-title"><?php echo $row2['content_name'];?></h5>
                                <p class="last-updated">Last Updated: <?php echo $row2['last_updated'];?></p>

                            </a>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                    <div class="col-md-6">
                    <?php 
                $con=new mysqli("localhost","root","sequelmysql","signUpForm");
                $que3="select * from p2indext3 limit 1";
                $res3=$con->query($que3);
                while($row3=$res3->fetch_assoc())
                {
                ?>
                        <div class="card">
                        <img src="<?php echo $row3['image_url'];?>" alt="">
                            <a href="sports.html">
                                <span class="badge rounded-pill bg-warning">SPORTS </span>
                            </a>
                            <div class="card-body">
                                <a href="#" class="">
                                <h5  class="card-title"><?php echo $row3['content_name'];?></h5>
                                <p class="last-updated">Last Updated: <?php echo $row3['last_updated'];?></p>

                                    </a>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                    <div class="col-md-6">
                    <?php
                $con=new mysqli("localhost","root","sequelmysql","signUpForm");
                $que4="select * from p2indext4 limit 1";
                $res4=$con->query($que4);
                while($row4=$res4->fetch_assoc())
                {
                ?>
                        <div class="card">
                        <img src="<?php echo $row4['image_url'];?>" alt="">
                            <a href="economy.html">
                                <span class="badge rounded-pill bg-danger">ECONOMY</span>
                            </a>
                            <div class="card-body">
                                <a href="#">
                                <h5  class="card-title"><?php echo $row4['content_name'];?></h5>
                                <p class="last-updated">Last Updated: <?php echo $row4['last_updated'];?></p>

                            </a>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                    <div class="col-md-6">
                    <?php
                $con=new mysqli("localhost","root","sequelmysql","signUpForm");
                $que5="select * from p2indext5 limit 1";
                $res5=$con->query($que5);
                while($row5=$res5->fetch_assoc())
                {
                ?>
                        <div class="card">
                        <img src="<?php echo $row5['image_url'];?>" alt="">
                            <a href="education.html">
                                <span class="badge rounded-pill bg-info">EDUCATION</span>
                            </a>
                            <div class="card-body">
                                <a href="#">
                                <h5  class="card-title"><?php echo $row5['content_name'];?></h5>
                                <p class="last-updated">Last Updated: <?php echo $row5['last_updated'];?></p>
</a>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
            <div class="col-md-3">
                <div class="row">
                    <div class="card">
                        <div class="card-body">   
                            <a href="#">
                        <h5 class="card-title">Air India, All Nippon Airways forge new Codeshare partnership, what does
                            the deal mean for passengers?</h5></a>
                        <a href="companies.html">
                            <span class="badge rounded-pill bg-info">COMPANIES</span>
                        </a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, quasi.</p>
                                <hr>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="#">
                            <h5 class="card-title">Air India, All Nippon Airways forge new Codeshare partnership, what
                                does the deal mean for passengers?</h5></a>
                            <a href="economy.html">
                                <span class="badge rounded-pill bg-info">ECONOMY</span>
                            </a>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, placeat.</p>
                                <hr>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="#">
                            <h5 class="card-title">Air India, All Nippon Airways forge new Codeshare partnership, what
                                does the deal mean for passengers?</h5></a>
                            <a href="sports.html">
                                <span class="badge rounded-pill bg-info">SPORTS</span>
                            </a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, asperiores?</p>
                                <hr>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
            <!-- footer -->

            <footer>
                <div class="footer-section">
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <p>Get connected with us on social networks:</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.google.com/"><i class="fab fa-google"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                   
                    <p>Maharashtra, Mumbai, pincode-400011</p>
                    <p>Email: info@example.com</p>
                    <p>Phone: +91 9321986967</p>
                </div>
            </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
       
        <script src="index.js"></script>

</body>

</html>