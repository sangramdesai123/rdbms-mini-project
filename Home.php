<?php 
	include_once 'header.php'
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="animate.css">
<style>
* {box-sizing: border-box}
.mySlides {display: none}

img{
  height: 500px;
}
/* Slideshow container */
.slideshow-container {
  width: 100%;
  position: relative;
  margin: auto;
  background-color: #353530;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 23px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 18px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 18px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 12px;
  width: 12px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.dotbar{
  padding: 10px;
  background-color: #353534;
}
.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.small{
  position: relative;
  width: 500px;
  height: 250px;
  display: block;
  box-shadow:2px 5px 5px 5px grey;
}
.small .Slides{
  height: 250px;
}
.mm{
  background-color: white;
  padding: 5px;
  position: relative;
  border:solid black 2px ;
}
.m{
  position: relative;
  left: 550px;
  width: 450px;
  top: -250px;
  position: relative;
  letter-spacing: 2px;
}
</style>
</head>
<body>
  
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/img.jpg" style="width:100%">
  <div class="text"><h1 class="bounceInDown"> 3D Movies </h1><br><h1> Get New Experience !!</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/i1.jpg" style="width:100%">
  <div class="text"><h1> Movie Theaters </h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/i2.jpg" style="width:100%">
  <div class="text"><h1> Virtual Experience !! </h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/i3.jpg" style="width:100%">
  <div class="text"><h1> Movie Theaters Screen </h1></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div style="text-align:center" class="dotbar">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
  <section class="main-container">
    <div class="main-wrapper">
    <h2>Home</h2>
    <div class="mm">
      <div class="small">
          <img class="Slides" src="images/in.jpg" style="width:100%">
          <img class="Slides" src="images/in2.jpg" style="width:100%">
          <img class="Slides" src="images/in3.jpg" style="width:100%">
    </div>
      <div class="m">
         <strong style="color: #49ba8e">Avengers: Infinity War </strong>
         <br><br><br>
          <p>
            As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.
        </p>
      </div>
      <marquee>
        <h3>***  Showtimes for Avengers: Infinity War Date : Fri, 27 Apr 9:45am 1:00pm 4:15pm 7:30pm  10:45pm 
        Book Ticket Now And Save World From Thanos ! ***** </h3>
      </marquee>
      <hr>
    </div>
    
         
    
      
    </p>
        
    </div>
      
  </section>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("Slides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 


<?php 
	include_once 'footer.php'
 ?>