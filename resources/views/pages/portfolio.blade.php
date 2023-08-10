@extends('layouts.app')
@section('content')
<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>List of my recently accomlished projects.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Frontend</li>
            <li data-filter=".filter-card">Backend</li>
            <li data-filter=".filter-web">API</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/front1.png" class="img-fluid" alt="">
            <div class="portfolio-info">

              <p>Frontend</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/front1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Frontend 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/api1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">

              <p>API</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/api1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="api 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/front2.png" class="img-fluid" alt="">
            <div class="portfolio-info">

              <p>Frontend</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/front2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Frontend 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/backend1.png" class="img-fluid" alt="">
            <div class="portfolio-info">

              <p>Backend</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/backend1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/api2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">

              <p>API</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/api2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="API 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/fornt3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">

              <p>Frontend</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/fornt3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Frontend 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/backend2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">

              <p>Backend</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/backend2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/backend3.avif" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Backend</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/backend3.avif" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/api3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">

              <p>API</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/api3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="API 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
