<?php 
  session_start();
  if(!$_SESSION['status_login']){
      header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laundry web</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="queries.css" />
  </head>
  <body>
 
    <button id="scroll-top">
      <i class="fas fa-arrow-up"></i>
    </button>

    <header>
      <nav>
        <a href="#home" id="logo">Laundry Alohanul</a>
        <i class="fas fa-bars" id="ham-menu"></i>
        <ul id="nav-bar">
          <li>
            <a class="nav-link" aria-current="page" href="dashboard.php">Paket Laundry</a>
          </li>

          <?php
            if($_SESSION['role']=='admin'){
          ?>
          <li>
            <a class="nav-link" aria-current="page" href="tampil_member.php">Member</a>
          </li>
          <?php
            }
          ?>

          <?php
            if($_SESSION['role']=='admin'){
          ?>
          <li>
            <a class="nav-link" aria-current="page" href="tampil_user.php">Staff</a>
          </li>
          <?php
            }
          ?>

          <?php
              if($_SESSION['role']=='admin'){
            ?>
            <li>
              <a class="nav-link" aria-current="page" href="histori_transaksi.php">History</a>
            </li>
          <?php
            }

          ?>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>

        </ul>
      </nav>
    </header>
  

    <section class="hero" id="home">
      <img src="header-shape.svg" id="header-shape" />
      <div class="hero-content">
        <h1>Let's wash your stuff</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nihil
          eum culpa, quisquam dolores porro voluptate expedita illo doloribus
          nulla. Corporis fugiat sed excepturi odio, odit nam officia sequi at.
        </p>
        <div class="btn-container">
          <button class="primary-btn btn">Wash stuff</button>
          <button class="secondary-btn btn">Explore More</button>
        </div>
      </div>
      <div class="hero-img">
        <img src="./html/laundry.svg" />
      </div>
    </section>
    
    <section class="features" id="features">
      <h2>Why Choose Us</h2>
      <p class="section-desc">
        We at study smart provide you with engaging video lessons taught by the
        top educators using smart techniques.
      </p>
      <div class="row">
        <div class="column">
          <i class="fas fa-star"></i>
          <h3>Cepat</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel veniam
            voluptatibus nobis id perspiciatis ratione reiciendis quisquam
            assumenda minima. Facere.
          </p>
        </div>
        <div class="column">
          <i class="fas fa-thumbs-up"></i>
          <h3>Bersih</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque
            nesciunt harum ducimus eum esse dolore debitis! Officiis autem est
            dolor.
          </p>
        </div>
        <div class="column">
          <i class="fas fa-graduation-cap"></i>
          <h3>Terjangkau</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
            eveniet quasi aut quibusdam incidunt debitis voluptas qui enim modi
            rem!
          </p>
        </div>
      </div>
    </section>


    <section class="courses" id="courses">
      <h2>Our Popular Chooses</h2>
      <p class="section-desc">
        With over 30,000 courses to choose from, check out out most popular
        courses.
      </p>
      <div class="row">
        <?php
          include "connect.php";
          $query_produk = mysqli_query($connect, "SELECT * from paket");
          while ($data_paket = mysqli_fetch_array($query_produk)){
            ?>
            <div class="column">
          <img src="img/<?=($data_paket['gambar'])?>" >
          <h3><?=$data_paket['nama_paket']?></h3>
          <p>
          <?=$data_paket['deskripsi']?>
          </p>

          <div class="courses-btn">
            <a href="buy.php?id_paket=<?=$data_paket['id_paket']?>" class="btn secondary-btn">Pilih paket</a>
          </div>
          </div>
        <?php
      }
        ?>
      </div>
    </section>


    <section class="testimonial" id="testimonial">
      <h2>What Our Customer Say</h2>
      <p class="section-desc">
        Mencuci di laundry alohanul sangatlah cepat dan memuaskan
      </p>

      <div class="row">
        <div class="column">
          <div class="testimonial-image">
            <img src="./img/person-1.jpg" />
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est alias
            eligendi quia explicabo dolorem dignissimos nisi consequatur nobis
            quaerat quas iure nostrum laudantium similique ea iste sequi tempore
            natus, repellat quae deleniti. Veritatis sit deserunt rerum cum
            consectetur voluptate nisi.
          </p>
          <h3>Mark King</h3>
        </div>
        
        <div class="column">
          <div class="testimonial-image">
            <img src="./img/person-2.jpg" />
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
            exercitationem, deleniti illo modi voluptatibus, voluptatem totam ea
            consequuntur sint, sit voluptas laboriosam? Aperiam, iure sequi sunt
            assumenda molestiae recusandae, harum id aliquam ipsam eveniet
            ratione cupiditate libero quasi nobis nulla.
          </p>
          <h3>Rose Smith</h3>
        </div>

      </div>
    </section>

    <section class="download-app" id="download-app">
      <h2>Download Our App</h2>
      <p class="section-desc">
        Unloack all new amazing features with our mobile app.
      </p>
      <div class="row">
        <div class="column">
          <img src="./img/download-app.png" />
        </div>
        <div class="column">
          <div class="app-feature">
            <div>
              <i class="fas fa-star"></i>
              <h3>Set Reminders</h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Excepturi autem accusamus accusantium officia?
            </p>
          </div>
          <div class="app-feature">
            <div>
              <i class="fas fa-star"></i>
              <h3>Download Lectures</h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Excepturi autem accusamus accusantium officia?
            </p>
          </div>
          <div class="app-feature">
            <div>
              <i class="fas fa-star"></i>
              <h3>30,000+ Lectures</h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Excepturi autem accusamus accusantium officia?
            </p>
          </div>
          <div class="download-btns">
            <a href="#google-play">
              <img src="./img/google-play.png" />
            </a>
            <a href="#app-store">
              <img src="./img/app-store.png" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="row footer-about">
        <h3>Laundry Alohanul</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus
          sunt reprehenderit quaerat esse unde, fuga quisquam quibusdam, in
          distinctio necessitatibus nam, quae non tempore illo perferendis
          facere inventore. Blanditiis, reiciendis.
        </p>
        <div class="social-links">
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
      <div class="row footer-contact">
        <div class="column">
          <h4>Phone No</h4>
          <p>+12 123456</p>
        </div>
        <div class="column">
          <h4>Email</h4>
          <p>alohanul@domain.com</p>
        </div>
      </div>
      <p class="footer-copyright">
        Copyright &copy; 2023 Alohanul. All rights reserved.
      </p>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
