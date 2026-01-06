<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kedai Djalaran</title>
    <link rel="stylesheet" href="css/style.css" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&family=Montserrat:wght@700&display=swap"
      rel="stylesheet"
    />

    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>

  <body>
    <!-- navbar -->
    <nav class="navbar">
      <a href="#home" class="navbar-logo"> Kedai<span>Djalaran</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="menu.php">Menu</a>
        <a href="#contact">Kontak</a>
      </div>
    </nav>

    <!-- hero section -->

    <section class="hero" id="home">
      <div class="video-background">
        <video autoplay loop muted playsinline>
          <source src="img/video_bg.mp4" type="video/mp4" />
        </video>
      </div>
      <main class="content">
        <h1>Kedai <span>Djalaran</span></h1>
        <p>
          bukan cuma kedai: dia adalah persinggahan bagi mereka yang mencari
          tenang, meski cuma sebentar
        </p>

        <a class="btn" href="#">Beli</a>
      </main>
    </section>

    <!-- about section -->
    <section class="about" id="about">
      <h1><span>Tentang </span>Kami</h1>
      <div class="card">
        <div class="card-content">
          <div class="map-side">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.3432421937687!2d112.2787245!3d-7.5374929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786b5df43c753f%3A0x6f96f104dd64bd82!2sKEDAI%20KOPI%20DJALARAN!5e0!3m2!1sid!2sid!4v1766587431946!5m2!1sid!2sid"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

          <div class="text-side">
            <p>
              <span>Kedai Djalaran</span> Kedai Kopi Djalaran lahir dari
              kebiasaan sederhana: ngopi dan berbagi cerita. Terinspirasi dari
              sebuah jalan kecil yang sering jadi tempat singgah, Djalaran
              dibangun sebagai ruang tenang untuk siapa pun yang ingin berhenti
              sejenak.
            </p>
            <p>
              Tanpa kemewahan, Djalaran mengutamakan rasa kopi yang jujur dan
              suasana yang hangat. Dari obrolan ringan, bekerja, sampai diam
              menikmati waktu, semua punya tempat di sini.
            </p>
            <p>
              Pelan-pelan, Djalaran tumbuh menjadi ruang berkumpul yang akrab
              dan apa adanya. Bagi banyak orang, Djalaran adalah tempat pulang
              sebentar sebelum melanjutkan perjalanan. Djalaran bukan cuma
              kedai, tapi persinggahan bagi mereka yang mencari tenang, meski
              cuma sebentar.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- footer section -->
    <section class="contact" id="contact">
      <footer class="footer">
        <div class="socials">
          <a
            href="https://www.instagram.com/kedai.djalaran?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
            ><i data-feather="instagram"> </i
          ></a>
        </div>
        <div class="links">
          <p>Open Everyday 08.00 - 4.00</p>
        </div>
        <div class="credit">
          <p>Created by <a href="">ArilKnalpot</a>. | &copy; 2025.</p>
        </div>
      </footer>
    </section>

    <!-- icons -->

    <script>
      feather.replace();
    </script>
    <script src="script.js"></script>
  </body>
</html>
