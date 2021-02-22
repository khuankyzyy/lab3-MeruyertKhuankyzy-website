<!DOCTYPE html>
<html>
<head>
<title>Welcome to my Portfolio</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="Portfolio.css"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
<div data-aos="fade-up">
<div class="header">
<div class="headers"><a href="#">MAIN</a></div>
<div class="headers" id="aboutme"><a href="{{route('about')}}">ABOUT ME</a></div>
<div class="headers" id="hobbys"><a href="{{route('hobby')}}">MY HOBBY</a></div>
<div class="headers" id="fav"><a href="{{route('favorite')}}">FAVORITES</a></div>
<div class="headers" id="ccc">CONTACT ME</div>
</div>
</div>
<div data-aos="flip-right">
<div class="first">
<div><img src="img/Portrait183a-1280x640.jpg" style="width:100%;height:90vh;"/></div>
<div class="name">
<div data-aos="slide-up"><h1>Meruyert Khuankyzy</h1></div>
<div data-aos="zoom-in"><button class="see">SEE</button></div>
</div>
</div>
</div>




<div class="about" id="cccc">
<h1 class="abme">
Contact
</h1>
</div>
<div data-aos="zoom-in">
<div class="contacting">

<div><i class="fas fa-phone" id="ttt"></i><p>+7-708-173-45-22</p></div>
<div><i class="fab fa-whatsapp" id="ttt"></i><p>+7-707-939-22-45</p></div>
<div><i class="fab fa-telegram-plane" id="ttt"></i><p>+7-708-653-06-11</p></div>

</div>
</div>
<script src="Portfolio.js"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>