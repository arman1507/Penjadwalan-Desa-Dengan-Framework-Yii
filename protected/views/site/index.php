<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/singlePageTemplate.css">

<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../testyii/images/desa1.jpg" style="width:100%">
    <div class="text">Kegiatan Gotong Royong</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../testyii/images/desa2.jpg" style="width:100%">
    <div class="text">Kegiatan Pemberdayaan</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../testyii/images/desa3.jpg" style="width:100%">
    <div class="text">Kegiatan Gotong Royong</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
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
</script>
<article class="footer_column">
      
      <img src="../testyii/images/vISI.png" alt="" width="400" height="200" class="cards"/>
      <ol><li>Meningkatkan kualitas kehidupan beragama dalam mewujudkan masyarakat Kodasari yang beriman dan bertaqwa</li>
<li>Meningkatkan sistem keamanan swakarsa dalam upaya terciptanya rasa aman di masyarakat Kodasari</li>
<li>Mewujudkan harmonisasi antar kelembagaan yang ada di Desa Kodasari sehingga terjalin sinergitas kinerja yang optimal</li>
<li>Mengembangkan kecakapan dan ketrampilan masyarakat Kodasari menuju kemajuan dan peningkatan  kesejahtraan</li>
<li>Optimalisasi pelayanan umum yang berkeadilan bagi seluruh masyarakat Desa Kodasari</li>
<li>Meningkatkan pemberdayaan masyarakat menuju tertibnya partisipasi dan peranserta masyarakat dalam seluruh aspek pembangunan di Desa Kodasari</li></ol>
    </article>
    <article class="footer_column">
      
      <img src="../testyii/images/MISI.PNG" alt="" width="400" height="200" class="cards"/>
      <ol><li>Meningkatkan kualitas kehidupan beragama dalam mewujudkan masyarakat Majalengka beriman dan bertaqwa.</li>
<li>Meningkatkan kualitas pendidikan dan kesehatan yang merata dan terjangkau.</li>
<li>Meningkatkan ekonomi kerakyatan yang berbasis agribisnis.</li>
<li>Meningkatkan pelayanan aparatur desa bagi pemenuhan pelayanan publik.</li>
<li>Optimalisasi Otonomi Desa melalui Pemberdayaan masyarakat</li>
<li>Meningkatkan Pembangunan Infrastruktur yang Proporsional, berkualitas dan berkelanjutan</li></ol>
    </article>
