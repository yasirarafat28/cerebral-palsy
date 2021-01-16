
@extends('layouts.inner-page')

@section('content')


<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Happy Patients</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Happy Patients</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Patients</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">


        @for ($i = 0; $i < 10; $i++)

        <div class="col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="row">
                  <div class="member-img col-md-6">
                      <img src="/front/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                      {{-- <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                      </div> --}}
                      <p class="text-info text-center">Before</p>
                    </div>

                    <div class="member-img col-md-6">
                      <img src="/front/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                      {{-- <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                      </div> --}}
                      <p class="text-info text-center">After</p>
                    </div>
              </div>
              <div class="member-info">
                <h4>Jon Doe</h4>
                <span>Dhaka, Bangladesh</span>
              </div>
            </div>
          </div>


        @endfor





      </div>

    </div>
  </section><!-- End Doctors Section -->


  <section id="testimonials" class="testimonials">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="owl-carousel testimonials-carousel owl-loaded owl-drag aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">











      <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2220px, 0px, 0px); transition: all 0.25s ease 0s; width: 4070px;"><div class="owl-item cloned" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
        </div></div><div class="owl-item cloned" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3>Matt Brandon</h3>
          <h4>Freelancer</h4>
        </div></div><div class="owl-item cloned" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
          <h3>John Larson</h3>
          <h4>Entrepreneur</h4>
        </div></div><div class="owl-item" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>Saul Goodman</h3>
          <h4>Ceo &amp; Founder</h4>
        </div></div><div class="owl-item" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
        </div></div><div class="owl-item" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
        </div></div><div class="owl-item active" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3>Matt Brandon</h3>
          <h4>Freelancer</h4>
        </div></div><div class="owl-item active" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
          <h3>John Larson</h3>
          <h4>Entrepreneur</h4>
        </div></div><div class="owl-item cloned active" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>Saul Goodman</h3>
          <h4>Ceo &amp; Founder</h4>
        </div></div><div class="owl-item cloned" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
        </div></div><div class="owl-item cloned" style="width: 370px;"><div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="/front/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>

    </div>
  </section>
@endsection
