<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/menu.css" />
    <title>Menu</title>
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
        <a href="index.php">Home</a>
        <a href="#products">Menu Kami</a>
        <a href="#keranjang">Keranjang </a>
        
      </div>
    </nav>
    <!-- populer -->
    <section class="populer" id="populer">
      <div id="home" class="slider">
        <h1>Best <span>Seller</span></h1>
        <h4>Klik Disini Untuk Slide Gambar</h4>
        <input type="radio" name="choose" id="" class="choose_1" />
        <input type="radio" name="choose" id="" class="choose_2" />

        <div class="slides">
          <a href="" target="" rel="noopener noreferrer" class="slide s1">
            <img src="img/mie_goreng.jpg" alt="" />
          </a>
          <a href="" target="" rel="noopener noreferrer" class="slide s2">
            <img src="img/nasi_goreng.jpg" alt="" />
          </a>
        </div>
      </div>
    </section>
    <!-- produk -->
    <section class="products" id="products">
      <h1><span>Produk</span> Kami</h1>
      <h2>Makanan</h2>
      <div class="row">
        <div class="product-card">
          <div class="product-image">
            <img src="img/nasi_goreng.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Nasi Goreng</h3>

            <div class="product-price">Rp15000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Nasi Goreng', 15000)"
              >
                <i data-feather="shopping-cart"></i>
              </a>

              <a href="#popup-produk-nasi-goreng" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-produk-nasi-goreng">
            <div class="popup">
              <h2>Nasi Goreng</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Nasi Goreng Djalaran dimasak pelan di wajan hangat, diracik
                  dari bumbu sederhana yang menyimpan rasa pulang. satu piring,
                  satu cerita, teman setia di malam yang ingin dikenang.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/mie_goreng.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Mie Goreng</h3>

            <div class="product-price">Rp15000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Mie Goreng', 15000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-mie-goreng" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-mie-goreng">
            <div class="popup">
              <h2>Mie Goreng</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Mie Goreng Djalaran helai demi helai digoreng perlahan,
                  menyerap bumbu dan cerita malam. gurihnya sederhana, hangatnya
                  tinggal lama. sepiring mie, untuk mereka yang tak ingin pulang
                  terlalu cepat.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/nasi_telor.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Nasi Telor</h3>

            <div class="product-price">Rp15000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Nasi Telor', 15000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-nasi-telor" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-nasi-telor">
            <div class="popup">
              <h2>Nasi Telor</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Nasi Telor Djalaran nasi hangat dan telur sederhana, bertemu
                  di piring yang jujur. tanpa banyak kata, tapi selalu cukup
                  untuk mengisi malam yang lapar.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/nugget.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>nugget</h3>

            <div class="product-price">Rp8000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Nugget', 8000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-nugget" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-nugget">
            <div class="popup">
              <h2>nugget</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Nugget Djalaran renyah di luar, hangat di dalam. sederhana,
                  tapi setia menemani tawa dan obrolan malam.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/cireng.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>cireng</h3>

            <div class="product-price">Rp7000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Cireng', 7000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-cireng" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-cireng">
            <div class="popup">
              <h2>Cireng</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Cireng Djalaran renyah di gigitan pertama, kenyal di cerita
                  berikutnya. sederhana, tapi selalu pas untuk malam yang
                  santai.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/kentang.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Kentang Goreng</h3>

            <div class="product-price">Rp7000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Kentang Goreng', 7000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-kentang" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-kentang">
            <div class="popup">
              <h2>Kentang Goreng</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Kentang Goreng Djalaran digoreng hingga keemasan, renyahnya
                  pecah di sunyi malam. sederhana, tapi selalu cukup untuk teman
                  ngobrol dan tawa.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2>Minuman</h2>
      <div class="row">
        <div class="product-card">
          <div class="product-image">
            <img src="img/kopi_gayo.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Kopi Gayo</h3>

            <div class="product-price">Rp10000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Kopi Gayo', 10000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-gayo" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-gayo">
            <div class="popup">
              <h2>Kopi Gayo</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Kopi Gayo Djalaran diseduh pelan dari tanah tinggi, aromanya
                  membuka malam. pahit yang jujur, hangat yang tinggal lama,
                  seperti cerita yang tak ingin selesai.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/cappucino.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Cappuccino</h3>

            <div class="product-price">Rp20000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Cappucino', 20000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-cappucino" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-cappucino">
            <div class="popup">
              <h2>Cappuccino</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Cappuccino Djalaran busa lembut di atas rasa, kopi dan susu
                  berdamai. diseruput perlahan, menenangkan malam yang ingin
                  lebih lama.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/americano.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Americano</h3>

            <div class="product-price">Rp15000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Americano', 15000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-americano" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-americano">
            <div class="popup">
              <h2>Americano</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Americano Djalaran hitam dan jujur, tanpa hiasan berlebihan.
                  pahitnya tenang, menemani malam yang memilih diam.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/hazelnut.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Hazelnut</h3>

            <div class="product-price">Rp15000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Hazelnut', 15000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-Hazelnut" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-Hazelnut">
            <div class="popup">
              <h2>Hazelnut</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Hazelnut Djalaran aroma kacang yang lembut, menyelinap di
                  hangat kopi. manisnya halus, menemani malam yang ingin
                  dimanja.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/taro.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Taro</h3>

            <div class="product-price">Rp15000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Taro', 15000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-taro" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-taro">
            <div class="popup">
              <h2>Taro</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Taro Djalaran ungu lembut dalam gelas, manisnya pelan menyapa.
                  tenang dan hangat, menjadi jeda di malam yang panjang.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <img src="img/matcha.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Matcha</h3>

            <div class="product-price">Rp15000</div>
            <div class="product-icons">
              <a
                href="javascript:void(0)"
                onclick="tambahKeKeranjang('Matcha', 15000)"
                ><i data-feather="shopping-cart"></i
              ></a>
              <a href="#popup-matcha" class="item-detail-button"
                ><i data-feather="eye"></i
              ></a>
            </div>
          </div>
          <div class="overlay" id="popup-matcha">
            <div class="popup">
              <h2>Matcha</h2>
              <a class="close" href="#blank">&times;</a>
              <br />
              <div class="content">
                <p>
                  Matcha Djalaran hijau yang tenang, lembut di setiap seruput.
                  manisnya pelan, menenangkan malam yang ingin istirahat.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- KERANJANG BELANJA -->
    <section class="keranjang" id="keranjang">
      <div class="container-custom">
        <h2 class="judul-keranjang">Keranjang <span>Belanja</span></h2>
        <div class="table-wrapper">
          <table class="tabel-keranjang">
            <thead class="tabel-header">
              <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="cart-body">
              <tr>
                <td colspan="5">Keranjang masih kosong</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h4 class="total-belanja">
          Total Belanja: <span id="totalHarga">Rp 0</span>
        </h4>

        <div class="aksi-keranjang">
          <button class="btn-checkout" onclick="checkout()">Checkout</button>
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

    <script src="js/script.js"></script>
  </body>
</html>
