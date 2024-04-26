<?php  

session_start();
if(!isset($_SESSION['username'])){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Jual Beli</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body border-bottom sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link active" href="#"></a>
          <a class="nav-link" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Banner -->
  <section class="banner" id="home">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-5">17 Februari 2024, <br/> <img src="images/love.png" width="40px" alt=""> The Story Begins <img src="images/love.png" width="40px" alt=""> </h1>
          <p class="mt-3">"Tidak ada rintangan yang terlalu besar jika kita saling mendukung dan berusaha bersama. Bersama-sama, kita bisa mengatasi segala tantangan dan memperkuat hubungan ini menjadi lebih kokoh dan penuh makna. Percayalah, setiap momen yang kita lalui bersama adalah peluang untuk saling tumbuh dan menguatkan ikatan cinta kita."</p>
        </div>
        <div class="col-lg-6 text-center">
          <img src="images/banner.jpg" alt="Banner" width="350px" class="img-fluid mt-10">
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner -->

  <!-- Judul Kenangan -->
<div class="container text-center" style="margin-top:100px;">
  <h1 class="mt-5">Album</h1>
</div>

<!-- Start Kenangan -->
<section class="banner" id="home" style="margin-top:100px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center">
        <img src="images/gambar1.jpg" alt="Banner" width="600px" class="img-fluid mt-10">
      </div>
      <div class="col-lg-6">
        <h1 class="mt-5"><img src="images/love.png" width="40px" alt=""> The Story Begins <img src="images/love.png" width="40px" alt=""> </h1>
        <p class="mt-3">"Dalam setiap senyummu, aku menemukan kebahagiaan yang tak tergantikan. Tiap detik bersamamu, seperti bait puisi indah yang mengalir dari hatiku. Kamu adalah pelipur lara dalam badai hidupku, membawa ketenangan dalam setiap sorot matamu. Denganmu, aku merasa lengkap, seperti bagian dari puzzle yang akhirnya menemukan tempatnya."</p>
      </div>
    </div>
  </div>
</section>

<section class="banner" id="home" style="margin-top:100px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="mt-5"><img src="images/love.png" width="40px" alt=""> The Story Begins <img src="images/love.png" width="40px" alt=""> </h1>
        <p class="mt-3">"Denganmu, aku merasakan getaran cinta yang mengalir dalam nadiku, mengisi setiap ruang kosong dalam hatiku dengan hangat dan kedamaian. Tiap momen bersamamu seperti lukisan indah yang tak pernah pudar, mengabadikan kenangan manis yang kita bagi bersama. Kamu adalah nyala lilin dalam kegelapan malamku, membawa harapan dan keceriaan dalam setiap langkah hidupku. Dalam pelukanmu, aku menemukan rumah yang sejati, tempat di mana aku merasa benar-benar berada."</p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="images/gambar3.jpg" alt="Banner" width="600px" class="img-fluid mt-10">
      </div>
    </div>
  </div>
</section>

<section class="banner" id="home" style="margin-top:100px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center">
        <img src="images/gambar4.jpg" alt="Banner" width="600px" class="img-fluid mt-10">
      </div>
      <div class="col-lg-6">
        <h1 class="mt-5"><img src="images/love.png" width="40px" alt=""> The Story Begins <img src="images/love.png" width="40px" alt=""> </h1>
        <p class="mt-3">"Dalam setiap senyummu, aku menemukan kebahagiaan yang tak tergantikan. Tiap detik bersamamu, seperti bait puisi indah yang mengalir dari hatiku. Kamu adalah pelipur lara dalam badai hidupku, membawa ketenangan dalam setiap sorot matamu. Denganmu, aku merasa lengkap, seperti bagian dari puzzle yang akhirnya menemukan tempatnya."</p>
      </div>
    </div>
  </div>
</section>
<!-- End Kenangan -->



  <!-- Judul Kenangan -->
  <div class="container text-center" style="margin-top:100px;">
  <h1 class="mt-5">Foto Favorit</h1>
</div>

<div class="container"  style="margin-top:50px;">
  <div class="row">
    <div class="col-md-3">
      <img src="images/ipal1.jpg" class="img-fluid" alt="Foto 1" width="300" height="100">
    </div>
    <div class="col-md-3">
      <img src="images/ipal2.jpg" class="img-fluid" alt="Foto 2" width="300" height="200">
    </div>
    <div class="col-md-3">
      <img src="images/ipal3.jpg" class="img-fluid" alt="Foto 3" width="300" height="200">
    </div>
    <div class="col-md-3">
      <img src="images/ipal4.jpg" class="img-fluid" alt="Foto 4" width="300" height="200">
    </div>
  </div>
</div>

<div class="container" style="margin-top:50px;">
  <div class="row">
    <div class="col-md-3">
      <img src="images/ica1.jpg" class="img-fluid" alt="Foto 1" width="300" height="100">
    </div>
    <div class="col-md-3">
      <img src="images/ica2.jpg" class="img-fluid" alt="Foto 2" width="300" height="200">
    </div>
    <div class="col-md-3">
      <img src="images/ica3.jpg" class="img-fluid" alt="Foto 3" width="300" height="200">
    </div>
    <div class="col-md-3">
      <img src="images/ica4.jpg" class="img-fluid" alt="Foto 4" width="300" height="200">
    </div>
  </div>
</div>







<section class="banner" id="home" style="margin-top:100px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 ">
      <h1 class="mt-5 text-center"><img src="images/love.png" width="40px" alt=""> Pesan Icha <img src="images/love.png" width="40px" alt=""> </h1>
        <p class="mt-3">"hai ganteng,trimakasih banyak ya bertahan sampai sekarang,ayng hebat banget!!walau tahun in banyak nguras mental dan sllu di kelilingi rasa ingin menyerah tapi ayng bisa melewati itu semua dan tetap kuat bertahan sampai sekarang.ayng udah hebat banget loh,jangan pernah kecewa sama diri sendiri ya ganteng,apapun yang terjadi itu yang terbaik buat ayng,gpp kalo tahun ini ga baik buat ayng,semoga tahun seterusnya jauh lebih baik yaa ganteng!! I'm very proud of you being able to get through very tiring days"</p>
      </div>
      <div class="col-lg-6">
        <h1 class="mt-5  text-center"><img src="images/love.png" width="40px" alt=""> Pesan Hendra <img src="images/love.png" width="40px" alt=""> </h1>
        <p class="mt-3">"hai cantik,terimakasih udah mau nerima aku sebagai pasangan ayang dan terimakasih udah mau bertahan untuk selama ini, Tujuan ku sama ayang ituh jelas mau nikahin ayang mungkin ayang belum sepenuh nya yakin dengan kata-kata aku tapi aku bakalan buktiin ke ayang bahwa aku tuu serius dan tulus, pesan ku buat ayang tunggu aku datang untuk menikahi ayang dan jaga hati ayang buat aku, aku bakalan berusaha semampu aku buat bahagia in ayang."</p>
      </div>
    </div>
  </div>
</section>


<!-- Instagram -->
<div class="container text-center" style="margin-top:100px;">
  <h1 class="mt-5">- Instagram -</h1>
</div>

<!-- Start  -->
<section class="banner" id="home" >
  <div class="container">
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Instagram </th>
      <th scope="col">Nama Instagram</th>
      <th scope="col">Link Instagram</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Hendra</th>
      <td>xw.draa</td>
      <td> <button onclick="window.open('https:www.instagram.com/xw.draa')" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Kunjungi Profil Instagram</button></td>
    </tr>
    <tr>
      <th scope="row">Icha</th>
      <td>_cyposaid</td>
      <td> <button onclick="window.open('https:www.instagram.com/_cyposaid')" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Kunjungi Profil Instagram</button></td>
    </tr>
    <tr>
      <th scope="row">Hendra & Icha</th>
      <td>_hencha17</td>
      <td> <button onclick="window.open('https:www.instagram.com/_hencha17')" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Kunjungi Profil Instagram</button></td>
    </tr>
  </tbody>
</table>
  </div>
</section>
<!-- end -->







  <!-- Footer -->
  <footer class="footer">
      <p class="mt-3 mb-3 text-center">2024 Copyright by Hendra Jayasa. All rights reserved. </p>
    </div>
  </footer>
  <!-- End Footer -->

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
