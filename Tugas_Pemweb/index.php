
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts  and Icons-->
    <script
      src="https://kit.fontawesome.com/dfd16fe9b0.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico" />
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link href="./assets/js/aos-master/dist/aos.css" rel="stylesheet" />
    <script src="./assets/js/aos-master/dist/aos.js"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>National Geographic | Live Curious</title>
    <!-- Parallax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./assets/js/parallax/parallax.js"></script>
  </head>
  <body>
    <script>
      AOS.init();
    </script>
    <!-- Navigasi -->
    <header
      class="parallax-window"
      data-parallax="scroll"
      data-image-src="./assets/images/image.jpg"
    >
      <nav>
        <h1 class="logo">
          <img src="./assets/images/logo.png" width="90vw" alt="" />
        </h1>
        <button class="btn-login btn-lg">
          <a href="login.php">Login</a>
        </button>
      </nav>
      <div data-aos="zoom-in-up" class="header-title">
        National <br />
        Geographic
      </div>
      <div class="header-bottom">
        <p class="today-date">23/12</p>

        <ul class="social-media" style="gap:5px;">
          <li><a href="pegawai.php">Pegawai</a></li>
          <li><a href="#">Youtube</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ul>
      </div>
    </header>
    <!-- End Of Header -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="img-gallery">
          <div data-aos="fade-up-right" class="image-box">
            <img src="./assets/images/N.jpg" alt="image" />
            <h2 class="nat">N</h2>
          </div>
          <div data-aos="fade-up-right" class="image-box">
            <img src="./assets/images/wkwk.jpg" alt="image" />
            <h2 class="nat">A</h2>
          </div>
          <div data-aos="fade-up-left" class="image-box">
            <img src="./assets/images/heroimage.png" alt="image" />
            <h2 class="nat">T</h2>
          </div>
          <div data-aos="fade-up-left" class="image-box">
            <img src="./assets/images/g.jpg" alt="image" />
            <h2 class="nat">G</h2>
          </div>
        </div>
        <div data-aos="zoom-out" class="about-info">
          <h2 class>About <span class="natgeo">Nat Geo.</span></h2>
          <h3>
            The National Geographic Society uses the power of science,
            exploration, education and storytelling to illuminate and protect
            the wonder of our world.
          </h3>
          <hr />
          <p class="text-justify">
            Since 1888, the National Geographic Society has driven impact by
            identifying and investing in an international community of
            Explorers: leading scientists, educators, storytellers,
            conservationists, technologists, and many other changemakers who
            help us define some of the critical challenges of our time, drive
            new knowledge, advance new solutions, and inspire positive
            transformative change.
            <br />
            <br />
            Since awarding our first grant in 1890, we have provided more than
            14,000 grants for work across all seven continents. This includes
            the most comprehensive scientific expedition to Mount Everest,
            working to better understand human-carnivore conflict in Gorongosa,
            telling stories that help explain the world and all that’s in it,
            and groundbreaking work that has transformed our understanding of
            the great apes and what it means to be human.
            <br />

            We also engage audiences around the globe through signature
            experiences, stories, and content, including the National Geographic
            Museum at our headquarters in Washington, D.C.
          </p>
        </div>
      </div>
    </section>
    <section
      id="geonext"
      class="parallax-window mb-5"
      data-parallax="scroll"
      data-image-src="./assets/images/ocean.jpg"
    >
      <div data-aos="zoom-out-up" class="container-fluid geonext">
        <div class="row">
          <div class="col-lg-12 mx-auto my-auto">
            <img src="./assets/images/geonext.png" width="80%" alt="" />
            <p class="text-left">
              NG Next is the culmination of 10 months of extensive work,
              reflecting the passion, dedication, creativity, and collective
              feedback of hundreds of individuals in our global community.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="tv">
      <div data-aos="fade-right" class="container mx-auto my-auto">
        <section id="slider">
          <h1 class="text-start pb-5"><span class="natgeo">NatGeo</span>TV</h1>
          <p>
            Stream full episodes* of your favorite series and amazing
            documentaries including Genius: Aretha, Secrets of the Zoo: Down
            Under, Alaska Animal Rescue, Wicked Tuna, Dr. Oakley, To Catch a
            Smuggler, Life Below Zero Next Generation, Race to the Center of the
            Earth, Running Wild with Bear Grylls, and more.
          </p>
          <div class="container">
            <div class="row">
              <div class="col">
                <div
                  id="carouselExampleIndicators"
                  class="carousel slide"
                  data-ride="carousel"
                >
                  <ol class="carousel-indicators">
                    <li
                      data-target="#carouselExampleIndicators"
                      data-slide-to="0"
                      class="active"
                    ></li>
                    <li
                      data-target="#carouselExampleIndicators"
                      data-slide-to="1"
                    ></li>
                    <li
                      data-target="#carouselExampleIndicators"
                      data-slide-to="2"
                    ></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img
                        class="d-block w-100"
                        src="./assets/images/tv1.jpg"
                        alt="First slide"
                      />
                    </div>
                    <div class="carousel-item">
                      <img
                        class="d-block w-100"
                        src="./assets/images/tv2.jpg"
                        alt="Second slide"
                      />
                    </div>
                    <div class="carousel-item">
                      <img
                        class="d-block w-100"
                        src="./assets/images/tv3.jpg"
                        alt="Third slide"
                      />
                    </div>
                  </div>
                  <a
                    class="carousel-control-prev"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="prev"
                  >
                    <span
                      class="carousel-control-prev-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a
                    class="carousel-control-next"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="next"
                  >
                    <span
                      class="carousel-control-next-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
  </body>
  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h3 style="color: white">
            About <span class="natgeo">NatGeo.</span>
          </h3>
          <p class="text-justify">
            National Geographic is a popular American monthly magazine published
            by National Geographic Partners. Known for its photojournalism, it
            is one of the most widely read magazines of all time. The magazine
            was founded in 1888 as a scholarly journal, nine months after the
            establishment of the society, but is now a popular magazine.
          </p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="#">Wild</a></li>
            <li>
              <a href="#">Culture</a>
            </li>
            <li>
              <a href="#">Animal</a>
            </li>
            <li>
              <a href="#">Astronomy</a>
            </li>
            <li>
              <a href="#">Science</a>
            </li>
            <li>
              <a href="#">Fiction</a>
            </li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li>
              <a href="#">GeoNext</a>
            </li>
            <li>
              <a href="#">GeoNatTv</a>
            </li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2022 Harry & Habel</p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li>
              <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
            </li>
            <li>
              <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</html>
