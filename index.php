<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRV</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/913793299b.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <div class="left">
                <h4>NRV</h4>
            </div>
            <div class="right">
                <ul>
                    <a href="index.html"><li>HOME</li></a>
                    <a href="#about"><li>ABOUT</li></a>
                    <a href="#projects"><li>PROJECTS</li></a>
                    <a href="#resume"><li>RESUME</li></a>
                    <a href="#contact"><li>CONTACT</li></a>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="banner">

            </div>
            <div class="hr-top" id="about">
            <hr>
            <div class="content">
                <h3>ABOUT</h3>
                <p class="about-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro natus, laboriosam quaerat eos fugit distinctio quas quia et ullam soluta consequatur sed suscipit architecto, maxime aliquam! Quo, consequatur dolores.</p>
            </div>
            </div>
            <div class="hr-top" id="projects">
            <hr>
            <div class="content">
                <h3>PROJECTS</h3>
                <div class="pro-container">
                    <div class="project">
                        <div class="box">
                            <!--image-->
                        </div>
                        <div class="pro-content">
                            <hr>
                            <h5>Project Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolore mollitia saepe voluptate quos maiores qui perspiciatis ipsam quas ex corrupti, est labore rerum sed asperiores provident blanditiis molestiae alias?</p>
                            <div class="pro-launch">
                                <a href="#">Launch Project</a> <i class="fas fa-angle-double-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-container">
                    <div class="project">
                        <div class="pro-content">
                            <hr>
                            <h5>Project Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolore mollitia saepe voluptate quos maiores qui perspiciatis ipsam quas ex corrupti, est labore rerum sed asperiores provident blanditiis molestiae alias?</p>
                            <div class="pro-launch">
                                <a href="#">Launch Project</a> <i class="fas fa-angle-double-right"></i>
                            </div>
                        </div>
                        <div class="box">
                            <!--image-->
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="hr-top" id="resume">
            <hr>
            <div class="content">
                <h3>RESUME</h3>
                <div class="btn">
                    <a href="resume/nilesh.pdf" target="_blank" class="btn-primary"><i class="fas fa-file-download"></i> DOWNLOAD NILESH.PDF</a>
                </div>
            </div>
            </div>
            <div class="hr-top" id="contact">
            <hr>
            <div class="content">
                <h3>CONTACT</h3>
                <div class="contact">
                    <div class="position">
                        <div class="contact-form">
                            <form action="mail.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="name" class="control-form" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="control-form" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea cols="22" rows="3" name="message" class="control-form" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-send"><i class="far fa-paper-plane"></i> Send</button>
                                </div>    
                            </form>
                            <?php
                                $msg = "";
                                if(isset($_GET['error']))
                                {
                                    $msg = "Please fill the required field";
                                    echo '<h4 class="danger">'.$msg.'</h4>';
                                }
                                if(isset($_GET['success']))
                                {
                                    $msg = "Message sent successful";
                                    echo '<h4 class="success">'.$msg.'</h4>';
                                }
                            ?>
                        </div>
                        <div class="social-links">
                            <h4>Social Links</h4>
                            <ul>
                                <li><a href="#"><i class="fab fa-github"></i> GitHub</a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
                                <li><a href="#"><i class="fas fa-phone-alt"></i> +91 9137172872</a></li>
                                <li><a href="#"><i class="far fa-envelope"></i> nileshvishr@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="copyright">
            <span>copyright &copy; 2021. Designed with <i class="fas fa-heart"></i> by <a href="#">Nilesh Vishwakarma.</a></span>
        </div>
    </footer>
</body>
</html>