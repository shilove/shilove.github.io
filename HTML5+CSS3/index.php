<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BW Template</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/js.js"></script>
</head>
<body>
    <section id="home">
        <nav>
            <ul>
                <li><a href="#home" class="navigationItems">Home</a></li>
                <li><a href="#years" class="navigationItems">About Us</a></li>
                <li><a href="#team" class="navigationItems">Team</a></li>
                <li class="classH"><a href="./index.html">H</a></li>
                <li><a href="#services" class="navigationItems">Services</a></li>
                <li><a href="#blog" class="navigationItems">Blog</a></li>
                <li><a href="#contact" class="navigationItems">Contact Us</a></li>
            </ul>
        </nav>
        <div class="logoText">
            <div class="we-build-it-with-passion">We build it with passion</div>
            <div class="just-to-be-clear-we-do-this-for-fun-not-for-you-just-kidding">Just to be clear, we do this for fun not for you, just kidding.</div>
            <div class="readMoreButton">
                <span class="readMore">READ MORE</span>
            </div>
        </div>
        <div class="dotting">
            <div class="el lipse1"></div>
            <div class="el lipse2"></div>
            <div class="el"></div>
        </div>
    </section>
    <section id="years">
        <div class="vh"></div>
        <div class="circle y2011"></div>
        <div class="circle y2012"></div>
        <div class="circle y2013"></div>
        <div class="circle y2014"></div>
        <div class="timeline tl2011">
            <div class="year">2011</div>
            <div class="lorem">Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus varius nec diam vitae hendrerit bigus mit.</div>
        </div>
        <div class="timeline tl2012">
            <div class="year">2012</div>
            <div class="lorem">Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus varius nec diam vitae hendrerit bigus mit. Begitus vit urna nulla.</div>
        </div>
        <div class="timeline tl2013">
            <div class="year">2013</div>
            <div class="lorem">Sed at auctor sem, nec tincidunt elit. Pellentesque enim turpis, porttitor ac orci in, ultrices efficitur nisl. Ut odio libero, sodales a tellus eleifend, suscipit dapibus mi.</div>
        </div>
        <div class="timeline tl2014">
            <div class="year">2014</div>
            <div class="lorem">Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus varius nec diam vitae hendrerit bigus mit.
Begitus vit urna nulla.</div>
        </div>
    </section>
    <section id="team">
        <div class="city">
            <img src="img/background-city.svg" class="Background-city">
            <img src="img/background-city-black.svg" class="Background-city-black">
        </div>
        <div>
            <div class="this-is">This is our team</div>
            <div class="we-are">We are small but effective and ...</div>
        </div>
        <div class="profile">
            <div class="photo"><img src="" alt=""></div>
            <div class="name">Mark Once</div>
            <div class="profession">Designer & Front-End Developer</div>
            <div class="social">
                <div class="twitter"></div>
                <div class="instagram"></div>
            </div>
        </div>
        <div class="profile">
            <div class="photo"><img src="" alt=""></div>
            <div class="name">Justin Twice</div>
            <div class="profession">Founder & CEO</div>
            <div class="social">
                <div class="twitter"></div>
                <div class="instagram"></div>
            </div>
        </div>
        <div class="profile">
            <div class="photo"><img src="" alt=""></div>
            <div class="name">Antonio Never</div>
            <div class="profession">Someone & Somewhere</div>
            <div class="social">
                <div class="twitter"></div>
                <div class="instagram"></div>
            </div>
        </div>
    </section>
    <section id="services">
       <div class="triangleWB"></div>
        <div>
            <div class="we-provide-you-everything">We provide you everything</div>
            <div class="maybe-not">Maybe not everything, but we provide you some stuff.</div>
        </div>
        <div>
            <div class="circleServicesPattern">
                <figure class="circleServices"><img src="" alt=""></figure>
                <div class="titleServices">Some Analytics</div>
                <div class="propServices">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</div>
            </div>
            <div class="circleServicesPattern">
                <figure class="circleServices"><img src="" alt=""></figure>
                <div class="titleServices">We provide you love</div>
                <div class="propServices">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</div>
            </div>
            <div class="circleServicesPattern">
                <figure class="circleServices"><img src="" alt=""></figure>
                <div class="titleServices">And Some Cloud</div>
                <div class="propServices">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</div>
            </div>
        </div>
    </section>
    <section id="blog">
        <div class="visitOurBlog">
            <span class="visitOurBlog">VISIT OUR BLOG</span>
        </div>
        <img src="" alt="">
       <div class="triangleBW"></div>
    </section>
    <section id="contact">
        <div>
            <div class="this-is">Contac Us</div>
            <div class="we-are">We know what we need to do</div>
        </div>
        <div class="contactPic">
           <div>
                <div><img src="" alt=""></div>
                <div class="phoneNumber">555-222-333</div>
           </div>
           <div>
                <div><img src="" alt=""></div>
                <div class="adress">Here is some address</div>
           </div>
           <div>
                <div><img src="" alt=""></div>
                <div class="email">somemail@hotmail.com</div>
           </div>
        </div>
        <div class="formFeedback">
            <input type="text" value="Full Name">
            <input type="email" value="Email">
            <input type="tel" value="Number">
            <textarea name="" id="" cols="30" rows="10">Write your Message here...</textarea>
            <input type="submit">
        </div>
        <footer class="copyright">Copyright © <time><?= date(Y); ?></time> Kenan Hamidic. All rights reserved.</footer>
    </section>
</body>
</html>