<?php
    include ('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css">
</head>

<body>
            <?php
            $query=mysqli_query($con,"select * from home");                   
            while($row=mysqli_fetch_assoc($query))
            {
            ?>
    <!--move to up bottom-->
    <div class="scroll-button">
        <a href="#home"><i class="fas fa-arrow-up"></i></a>
    </div>
    <!--navigation bar start-->
    <nav>
        <div class="navbar">
            <div class="logo"><a href="#"><?php echo $row['home_name'];?></a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <div class="cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
            </ul>
            <div class="media-icons">
                <a href="<?php echo $row['site_link_github'];?>"><i class="fab fa-github"></i></a>
                <a href="<?php echo $row['site_link_fb'];?>"><i class="fab fa-facebook"></i></a>
                <a href="<?php echo $row['site_link_ig'];?>"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
     <!--navigation bar end-->
    <!--home section start-->
    <section class="home" id="home">
        <div class="home-content">
            <div class="text">
           
                <div class="text-one">Hello,</div>
                <div class="text-two">I'am <?php echo $row['home_name'];?></div>
                <div class="text-three"><?php echo $row['home_job'];?></div>
                <div class="text-four">From <?php echo $row['home_country'];?></div>
                <?php 
                }
                ?>
            </div>
            <div class="button">
                <button>Hire Me</button>
            </div>
        </div>
    </section>
    <!--home section end-->
    <!--about section start-->
                <?php
                   $query=mysqli_query($con,"SELECT * from about");       
                   while($row=mysqli_fetch_assoc($query))
                {
                ?>
    <section class="about" id="about">
        <div class="content">
            <div class="title"><span>About Me</span></div>
            <div class="about-details">
                <div class="left">
                    <img src="<?php echo $row['about_img'];?>" alt="portfolio">
                </div>
                <div class="right">
                    <div class="topic"><?php echo $row['about_title'];?></div>
                    <p><?php echo $row['about_desc'];?></p>
                    <div class="button">
                        <button>Download CV</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
                 <?php 
                 }
                 ?>
    <!--about section end-->
    <!--Skills section start-->
    <section class="skills" id="skills">
        <div class="content">
            <div class="title"><span>My Skills</span></div>
            <div class="skills-details">
                <div class="text">
                    <div class="topic">Skills reflects our knowledge</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras faucibus leo in nisl egestas ornare. Aliquam mattis porttitor purus vel faucibus. Integer sodales venenatis erat, in porttitor tortor interdum sit amet. Aenean hendrerit
                        massa magna, feugiat vehicula justo tincidunt at. Mauris non sapien eu ipsum feugiat gravida. Morbi sodales lorem a mauris auctor fringilla. Fusce imperdiet vitae arcu id sodales. Curabitur dictum imperdiet feugiat. Integer vel
                        dictum nulla, sed congue sapien.</p>
                    <div class="experience">
                        <div class="num">10</div>
                        <div class="exp">Years Of</div>
                    </div>
                </div>
                <div class="boxes">
                    <div class="box">
                        <div class="topic">HTML</div>
                        <div class="per">Intermediate</div>
                    </div>
                    <div class="box">
                        <div class="topic">CSS</div>
                        <div class="per">Intermediate</div>
                    </div>
                    <div class="box">
                        <div class="topic">Javascript</div>
                        <div class="per">Beginner</div>
                    </div>
                    <div class="box">
                        <div class="topic">Bootstrap</div>
                        <div class="per">Beginner</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--skills section end-->                                 
    <!--service section start-->
    <section class="services" id="services">
        <div class="content">
            <div class="title"><span>My Services</span></div>
            <div class="boxes">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <div class="topic">Web Development</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere rem architecto voluptate error corrupti expedita, assumenda ex ab sint nostrum omnis facilis quibusdam repellat odio suscipit dolore? Laborum, ipsum?</p>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <div class="topic">Graphic Design</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere rem architecto voluptate error corrupti expedita, assumenda ex ab sint nostrum omnis facilis quibusdam repellat odio suscipit dolore? Laborum, ipsum?</p>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="topic">UI/UX</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere rem architecto voluptate error corrupti expedita, assumenda ex ab sint nostrum omnis facilis quibusdam repellat odio suscipit dolore? Laborum, ipsum?</p>
                </div>
            </div>
        </div>
    </section>
    <!--service section end-->                               
    <!--contact me section start-->
    <section class="contact" id="contact">
        <div class="content">
            <div class="title"><span>Contact Me</span></div>
            <div class="text">
                <div class="topic">Have any Projects?</div>
                <div class="contact-box">
                 <form>
                    <input type="text" class="input-field" id="name" placeholder="First Name">
                    <input type="text" class="input-field" id="name" placeholder="Last Name">
                    <input type="text" class="input-field" id="name" placeholder="Email">
                    <textarea type="text" class="input-field textarea-field" placeholder="Your message"></textarea>
                    <button type="button" class="btn">Send Message</button>
                 </form>                  
            </div>
        </div>
    </section>
    <!--contact me section end-->
<?php
    require 'footer.php';
?>
   
    <script src="script.js"></script>
</body>

</html>