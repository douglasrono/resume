@extends('layouts.app')

@section('content')
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <h3>Douglas Rono</h3>
            <p>
               Do you have any projects that you'd wish to discuss? Don't hesitate to reach out on me, I’ll try my best to get back to you!
            </p>
            <div class="social-links">
              <a href="https://twitter.com/itsdaglas" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/daglas.ronnie" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://github.com/douglasrono" class="instagram"><i class="bi bi-github"></i></a>
              <a href="https://www.linkedin.com/in/douglas-kiprono-ke/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>Nairobi, Kenya</p>
            </div>

            <div>
              <i class="ri-mail-send-line"></i>
              <p>dev@douglasrono.com</p>
            </div>

            <div>
              <i class="ri-phone-line"></i>
              <p>+254110666140</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
@endsection
