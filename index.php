<?php

    //$Servername ="UNITY OF INDONESIA ROLEPLAY";

    $ip = "18.141.213.171";

    $port = 7777;

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>DEWATA ROLEPLAY INDONESIA</title>
<meta name="description" content="DEWATA ROLEPLAY merupakan komunitas game online dari GTA SA modifikask untuk bermain roleplay">
<meta name="keywords" content="dewatarp, dewata roleplay, dewata">
<link rel="shortcut icon" href="favicon.ico">

<meta property="og:site_name" content="DEWATA ROLEPLAY">
<meta property="og:url" content="http://dewatarp.xyz/">
<meta property="og:site_name" content="DEWATA ROLEPLAY">
<meta property="og:type" content="webiste">
<meta property="og:title" content="DEWATA ROLEPLAY INDONESIA">
<meta property="og:description" content="DEWATA ROLEPLAY INDONESIA merupakan komunitas game online dari GTA SA modifikasi untuk bermain roleplay">
<meta property="og:image" content="https://dewatarp.xyz/DEWATA.png">

<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<style>
  .wow:first-child{
    visibility: hidden;
  }
</style>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<?php
require("SampQueryAPI.php");
$query = new SampQueryAPI($ip, $port);
$isOnline = $query->isOnline();
$info = $query->getInfo();
include 'time_since.php';
?>
<body>
<header>
<nav class="navbar navbar-expand-md navbar-dark back-black">
<div class="container">
<a class="navbar-brand" href="#"><img src="DEWATA.png" height="30" alt="dewatarp" loading="lazy"></a>
<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
<i class="fas fa-bars"></i>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
<ul class="navbar-nav ms-auto">
<li class="nav-item popo">
<a class="nav-link active" href="#beranda">BERANDA</a>
</li>
<li class="nav-item popo">
<a class="nav-link" href="#statistik">STATISTIK</a>
</li>
<li class="nav-item popo">
<a class="nav-link" href="#sistem">SYSTEM REQUIREMENTS</a>
</li>
<li class="nav-item popo">
<a class="nav-link" href="#carabermain">CARA BERMAIN</a>
</li>
<li class="nav-item popo">
<a class="nav-link" href="/donasi" target="_blank">DONASI</a>
</li>
</li>
<li class="nav-item popo">
<a class="nav-link" href="/peraturan" target="_blank">PERATURAN</a>
</li>
<li class="nav-item popo">
<a class="nav-link" href="/download" target="_blank">DOWNLOAD</a>
</li>
</ul>
</div>
</div>
</nav>
</header>
<div class="container">
<h1 class="popo ungu tebal wow fadeInLeft" data-wow-delay="2.8s" id="beranda">DEWATA <span class="putih">ROLEPLAY</span></h1>
<p class="popo putih wow fadeInLeft" data-wow-delay="2.8s">Merupakan komunitas game online dari GTA SA modifikasi untuk bermain roleplay.</p>
<p class="popo putih wow fadeInLeft" data-wow-delay="2.8s">ROLEPLAY Merupakan permainana fiktif dimana kalian akan mengendalikan karakter dan kalian akan bertemu dengan player lain untuk menjalankan kehidupan sosial layaknya di dunia nyata. Semua sifat karakter gaya bicara karakter kalian tentukan sendiri dengan bebas tanpa batasan.</p>
<p class="popo putih wow fadeInLeft" data-wow-delay="2.8s">ROLEPLAY Merupakan permainan fiktif semua dan apapun yang terjadi di dalam game tidak memiliki hubungan serta timbal balik di dunia nyata.</p>
<a class="btn btnPurple popo tebal wow bounceIn" data-wow-delay="3.3s" role="button" aria-pressed="true" href="https://discord.gg/vZdP6zdzfw">DISCORD</a> <a class="btn btnWhite popo text-uppercase wow bounceIn" data-wow-delay="3s" href="dl/DEWATA.exe">LAUNCHER</a>
<div class="wow fadeInLeft" data-wow-delay="3.5s">
<img src="DEWATA.png" class="img-fluid" alt="dewatarp">
</div>
<hr>
<h1 class="popo ungu tebal wow fadeInLeft" data-wow-delay="3.5s" id="statistik">LIVE STATS</h1>
<div class="card bg-dark wow fadeIn">
<img src="DEWATA.png" class="card-img-top" alt="dewatarp">
<div class="card-body">
<div id="pemain" class="popo putih text-center"><h1><?php echo $info['players'];?>/<?php echo $info['maxplayers'];?></h1></div>
<progress style="width: 100%;" value="0" max="100" class="progress"></progress>
</div></div>
<hr>
<h1 class="popo ungu teba wow fadeInLeft" data-wow-delay="2.8s" id="sistem">SYSTEM REQUIREMENTS</h1>
<div class="wow fadeInLeft" data-wow-delay="3.0s">
<p class="popo putih"><span class="popo ungu">Minimum:</span><br>
OS:Microsoft® Windows® 2000/XP<br>
CPU:1Ghz Pentium III or AMD Athlon Processor<br>
RAM:256MB<br>
VGA:64MB Video card(Geforce 3 or better)<br>
HDD:3.6GB Free space</p>
<p class="popo putih"><span class="popo ungu">Recommended:<br></span>
OS:Microsoft® Windows® 2000/XP<br>
CPU:Intel Pentium 4 or AMD Athlon XP Processor<br>
RAM:384MB<br>
VGA:128MB (Geforce 6 Recommended)<br>
HDD:4.7GB</p>
</div>
<hr>
<h1 class="popo ungu tebal wow fadeInLeft" data-wow-delay="2.8s" id="carabermain">CARA BERMAIN</h1>
<p class="popo putih wow fadeInLeft" data-wow-delay="2.9s"><span class="popo ungu">Android:</span><br>
[1] Silahkan download APK dan Data melalui halaman <a href="/download">download</a><br>
[2] Setelah selesai didownload ekstark file ZIP tadi menggunakan Zarchiver atau alat pengekstark lainnya<br>
[3] Setelah diekstrak pindahkan com.rockstargames.gtasa ke Android/data<br>
[4] Lalu pasang APK seperti biasa</p>

<p class="popo putih wow fadeInLeft" data-wow-delay="2.9s"><span class="popo ungu">PC:</span><br>
[1] Silahkan menuju ke laman <a href="/download">download</a><br>
[2] Silahakn pilih untuk connect menggunakan launcher atau direct connect<br>
[3] Alternatif connect:<br>
- s1.dewatarp.xyz:7777<br>
- s2.dewatarp.xyz:7777<br>
- s3.dewatarp.xyz:7777<br>
- s4.dewatarp.xyz:7777<br>
- s5.dewatarp.xyz:7777<br>
- s6.dewatarp.xyz:7777<br>
*Silahkan pilih dari salah satu ke enam server untuk connect.</p>
<hr>
<h1 class="popo ungu tebal wow fadeInLeft" data-wow-delay="1.7s">NEWS & <span class="popo putih">UPDATE</span></h1>
<div class="card-group">
<div class="card bg-dark wow fadeIn">
<img src="DEWATA.png" class="card-img-top" alt="dewatarp">
<div class="card-body">
<h5 class="popo ungu card-title">#DEWATARP UPDATE 04/04/2021</h5>
<p class="popo putih card-text">- DYNAMIC WEATHER<br>
- CUACA AKAN MEREFRESH SETIAP 15 MENIT SEKALI</p></div>
<div class="card-footer text-muted">Uploaded <?php echo time_since(strtotime('2021-04-05 15:33:00')); ?></div>
</div>
<div class="card bg-dark wow fadeIn">
<img src="DEWATA.png" class="card-img-top" alt="dewatarp">
<div class="card-body">
<h5 class="popo ungu card-title">#DEWATARP UPDATE 08/04/2021</h5>
<p class="popo putih card-text">- ADD ATTACHED OBJECT TO FISHING AND ANIMATION<br>
- BLACK MARKET (BETA)<br>
- INCREASE SELL FISH PRICE</p>
<div class="card-footer text-muted">Uploaded <?php echo time_since(strtotime('2021-04-09 07:28:00')); ?></div>
</div>
</div>
</div>
</div>
<br>
<footer class="bg-dark text-white popo">
<div class="container p-4 pb-0 wow fadeIn">
<h1 class="popo ungu tebal">DEWATA ROLEPLAY</h1>
<p class="popo putih">Merupakan komunitas game online dari GTA SA modifikasi untuk bermain roleplay.</p>
<a class="btn btn-dark btn-floating m-1" href="/discord" target="_blank"><i class="fab fa-discord"></i></a>
<a class="btn btn-dark btn-floating m-1" href="https://fb.me/dewatarp" target="_blank"><i class="fab fa-facebook"></i></a>
</div>
<br>
<div class="text-center p-3 text-white" style="background-color: #121212">© <a class="text-white" href="#">DEWATA ROLEPLAY</a> 2021</div>
</footer>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/wow.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
</script>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v10.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/id_ID/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  $('.progress').val(<?php echo $info['players'];?>);
});
</script>
<script type="text/javascript">
var auto_refresh = setInterval(
  function(){
    $('#pemain').html("<?php echo $info['players'];?>/<?php echo $info['maxplayers'];?>");load('SampQueryAPI.php');
  },10000);
</script>
<div class="fb-customerchat" attribution="setup_tool" page_id="111176217737201"></div>
</body>
</html>