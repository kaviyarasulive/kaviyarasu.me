<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>John Doe || Contact</title>
    <link
      rel="stylesheet"
      href="./fontawesome-free-5.12.1-web/css/all.min.css"
    />
    <!-- css -->
    <link rel="stylesheet" href="./css/styles.css" />
  </head>

  <body>
    <!-- navbar -->
    <nav class="nav" id="nav">
      <div class="nav-center">
        <!-- nav header -->
        <div class="nav-header">
          <img src="./images/logo.svg" class="nav-logo" alt="" />
          <button class="nav-btn" id="nav-btn">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <!-- nav links -->
        <ul class="nav-links">
          <li><a href="{{ url('/')}}">home</a></li>
          <li><a href="{{ url('/about') }}">about</a></li>
          <li><a href="{{ url('student/login')}}">Course</a></li>
          <li><a href="{{ url('/contact') }}">contact</a></li>
        </ul>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- sidebar -->
    <aside class="sidebar" id="sidebar">
      <div>
        <button id="close-btn" class="close-btn">
          <i class="fas fa-times"></i>
        </button>
   
        <ul class="social-icons">
          <!-- single item -->
          <li>
            <a href="#" class="social-icon">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <!-- end of single item -->
          <!-- single item -->
          <li>
            <a href="https://www.linkedin.com/in/kaviyarasu-k/" class="social-icon">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <!-- end of single item -->
          <!-- single item -->
          <li>
            <a href="https://twitter.com/KKaviyarasu12" class="social-icon">
              <i class="fab fa-squarespace"></i>
            </a>
          </li>
          <!-- end of single item -->
          <!-- single item -->
          <li>
            <a href="https://www.behance.net/charliekavi" class="social-icon">
              <i class="fab fa-behance"></i>
            </a>
          </li>
          <!-- end of single item -->
          <!-- single item -->
          <li>
            <a href="https://www.instagram.com/kaviiyarasu_k/?hl=en" class="social-icon">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <!-- end of single item -->
        </ul>
      </div>
    </aside>
    <!-- end of sidebar -->

    <!-- ############## -->
    <!-- ############## -->
    <!-- ############## -->
    <!-- ############## -->

    <section class="section single-page">
      <!-- section title -->
      <div class="section-title">
        <h1>contact</h1>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
      <div class="section-center page-info">
        <!-- contact page-->
        <p>
          If you are looking to get ahold of me, you can send me an email at
          <a href="mailto:kaviyarasumaran@email.com">@your_email</a>
        </p>
        <p>
          You can also reach me on Twitter at
          <a href="https://twitter.com/KKaviyarasu12">@your_social_media </a>
        </p>
      </div>
    </section>
    <!-- ############## -->
    <!-- ############## -->
    <!-- ############## -->
    <!-- ############## -->

    <!-- footer -->
    <footer class="footer">
      <!-- social icons -->
      <ul class="social-icons">
        <li>
          <a href="#" class="social-icon">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/kaviyarasu-k/" class="social-icon">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/KKaviyarasu12" class="social-icon">
            <i class="fab fa-squarespace"></i>
          </a>
        </li>
        <li>
          <a href="https://www.behance.net/charliekavi" class="social-icon">
            <i class="fab fa-behance"></i>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/kaviiyarasu_k/?hl=en" class="social-icon">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>

      <p>&copy; <span id="date"></span> Kaviyarasu Kasi. all rights reserved</p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>
