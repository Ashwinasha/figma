@extends('layouts.app')

@section('content')



    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="height: 80vh; position: relative; z-index: 2;">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators-container">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/slide-1.jpg') }}" class="d-block w-100" alt="Slide 1" style="height: 80vh; object-fit: cover;">
                <div class="carousel-caption d-flex justify-content-center align-items-center" style="height: 80vh;">
                    <div class="text-center">
                        <h1>Hale Nature offers eco-friendly,<br> natural products</h1>
                        <a href="#" class="btn btn-dark rounded-pill mt-3">View Product</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slide-2.jpg') }}" class="d-block w-100" alt="Slide 2" style="height: 80vh; object-fit: cover;">
                <div class="carousel-caption d-flex justify-content-center align-items-center" style="height: 80vh;">
                    <div class="text-center">
                        <h1>Hale Nature offers eco-friendly,<br> natural products</h1>
                        <a href="#" class="btn btn-dark rounded-pill mt-3">View Product</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/cinnamon1.jpg') }}" class="d-block w-100" alt="Slide 3" style="height: 80vh; object-fit: cover;">
                <div class="carousel-caption d-flex justify-content-center align-items-center" style="height: 80vh;">
                    <div class="text-center">
                        <h1>Hale Nature offers eco-friendly,<br> natural products</h1>
                        <a href="#" class="btn btn-dark rounded-pill mt-3">View Product</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/cinnamon2.jpg') }}" class="d-block w-100" alt="Slide 4" style="height: 80vh; object-fit: cover;">
                <div class="carousel-caption d-flex justify-content-center align-items-center" style="height: 80vh;">
                    <div class="text-center">
                        <h1>Hale Nature offers eco-friendly,<br> natural products</h1>
                        <a href="#" class="btn btn-dark rounded-pill mt-3">View Product</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/cinnamon.jpg') }}" class="d-block w-100" alt="Slide 5" style="height: 80vh; object-fit: cover;">
                <div class="carousel-caption d-flex justify-content-center align-items-center" style="height: 80vh;">
                    <div class="text-center">
                        <h1>Hale Nature offers eco-friendly,<br> natural products</h1>
                        <a href="#" class="btn btn-dark rounded-pill mt-3">View Product</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


<section class="mt-5 my-5">
     
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Column -->
      <div class="col-lg-6 text-center">
        <h3>About Us</h3>
        <h2 class="font-weight-bold">Why Choose Hale Cinnamon?</h2>
        <p class="mt-4 text-justify">
          Welcome to Cinnamon Influence, where our passion for quality and flavor comes alive in every cup. We specialize in crafting the finest cinnamon tea, carefully blending premium cinnamon to create a beverage that is both soothing and invigorating. Each of our tea bags is designed for convenience and ease, allowing you to enjoy the rich, aromatic flavors of cinnamon by simply dipping it into hot water. At Cinnamon Influence, we believe in the power of natural ingredients. Our cinnamon is sourced from the best growers, ensuring that every sip is packed with natural goodness and a touch of warmth. Our commitment to excellence is reflected in the delightful taste and health benefits of our cinnamon tea.
        </p>
      </div>
      <!-- Right Column -->
      <div class="col-lg-6 d-flex justify-content-center mt-4 mt-lg-0 mt-5 my-5">
        <div class="about-image-container position-relative ">
          <img
            src="{{ asset('images/1l.jpg') }}"
            class="img-fluid"
            alt="Hand Image"
          />
        </div>
      </div>
    </div>
  </div>


</section>

<section>
    <div class="container mt-5 my-5">
        <div class="container-fluid text-center my-5 px-0 mt-3 my-5">
            <h6 class="text-muted">Categories</h6>
            <h2 class="fw-bold">Product Categories</h2>
            <div id="product-carousel" class="carousel slide mt-5 my-5">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center align-items-center g-5">
                            <div class="col-8 col-sm-6 col-md-4 col-lg-2">
                                <div class="card custom-card-height custom-card-width mx-auto">
                                    <div class="circle">
                                        <img src="{{ asset('images/1.jpg') }}" class="img-fluid rounded-circle" alt="Product Image 1">
                                    </div>
                                    <p class="mt-3">Product</p>
                                </div>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-2">
                                <div class="card custom-card-height custom-card-width mx-auto">
                                    <div class="circle">
                                        <img src="{{ asset('images/2.webp') }}" class="img-fluid rounded-circle" alt="Product Image 2">
                                    </div>
                                    <p class="mt-3">Product</p>
                                </div>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-2">
                                <div class="card custom-card-height custom-card-width mx-auto">
                                    <div class="circle">
                                        <img src="{{ asset('images/cp.png') }}" class="img-fluid rounded-circle" alt="Product Image 3">
                                    </div>
                                    <p class="mt-3">Product</p>
                                </div>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-2">
                                <div class="card custom-card-height custom-card-width mx-auto">
                                    <div class="circle">
                                        <img src="{{ asset('images/1.jpg') }}" class="img-fluid rounded-circle" alt="Product Image 4">
                                    </div>
                                    <p class="mt-3">Product</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center g-5">
                            <div class="col-8 col-sm-6 col-md-4 col-lg-2">
                                <div class="card custom-card-height custom-card-width mx-auto">
                                    <div class="circle">
                                        <img src="{{ asset('images/2.webp') }}" class="img-fluid rounded-circle" alt="Product Image 5">
                                    </div>
                                    <p class="mt-3">Product</p>
                                </div>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-2">
                                <div class="card custom-card-height custom-card-width mx-auto">
                                    <div class="circle">
                                        <img src="{{ asset('images/cp.png') }}" class="img-fluid rounded-circle" alt="Product Image 6">
                                    </div>
                                    <p class="mt-3">Product</p>
                                </div>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-2">
                                <div class="card custom-card-height custom-card-width mx-auto">
                                    <div class="circle">
                                        <img src="{{ asset('images/1.jpg') }}" class="img-fluid rounded-circle" alt="Product Image 7">
                                    </div>
                                    <p class="mt-3">Product</p>
                                </div>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-2">
                                <div class="card custom-card-height custom-card-width mx-auto">
                                    <div class="circle">
                                        <img src="{{ asset('images/2.webp') }}" class="img-fluid rounded-circle" alt="Product Image 8">
                                    </div>
                                    <p class="mt-3">Product</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel-items as needed -->
                </div>

                <button class="btn btn-custom-grey position-absolute top-50 start-0 translate-middle-y" type="button" data-bs-target="#product-carousel" data-bs-slide="prev">
                    &#10094;
                </button>
                <button class="btn btn-custom-grey position-absolute top-50 end-0 translate-middle-y" type="button" data-bs-target="#product-carousel" data-bs-slide="next">
                    &#10095;
                </button>
            </div>
        </div>
    </div>
</section>





<section>
  <div class="container mt-5">
    <div class="container-fluid text-center my-5 px-0 mt-3 my-5">
      <div class="text-center my-5">
        <h6 class="text-muted">Review</h6>
        <h2 class="fw-bold">Customer Reviews</h2>
      </div>
      <div id="testimonialCarousel" class="carousel slide">
        <div class="carousel-inner">
          <!-- First Item -->
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card fixed-size-card">
                  <div class="row g-0">
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="testimonial-image">
                        <img src="{{ asset('images/1.jpg') }}" alt="testimonial image" class="img-fluid rounded-circle">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <blockquote class="blockquote">
                          <p class="mb-4">
                            <i class="fas fa-quote-left"></i>
                            Hale Cinnamon receives positive customer reviews for its premium quality spices, appreciated for their rich aroma and authentic flavor. Customers highlight the freshness and consistent taste of the products, praising the brand for reliable service and eco-friendly packaging.
                            <i class="fas fa-quote-right"></i>
                          </p>
                        </blockquote>
                        <p class="testimonial-author">Varsha Adhikari</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Second Item -->
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card fixed-size-card">
                  <div class="row g-0">
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="testimonial-image">
                        <img src="{{ asset('images/2.webp') }}" alt="testimonial image" class="img-fluid rounded-circle">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <blockquote class="blockquote">
                          <p class="mb-4">
                            <i class="fas fa-quote-left"></i>
                            Hale Cinnamon receives positive customer latest and fast reviews for its premium quality spices, appreciated for their rich aroma and authentic flavor. Customers highlight the freshness and consistent taste of the products, praising the brand for reliable service and eco-friendly packaging.
                            <i class="fas fa-quote-right"></i>
                          </p>
                        </blockquote>
                        <p class="testimonial-author">Jane Doe</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Add more carousel-item blocks as needed -->
        </div>
        <button class="btn btn-custom-grey position-absolute top-50 start-0 translate-middle-y" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          &#10094; <!-- Left arrow -->
        </button>
        <button class="btn btn-custom-grey position-absolute top-50 end-0 translate-middle-y" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          &#10095; <!-- Right arrow -->
        </button>
      </div>
    </div>
  </div>
</section>












<section>
<div class="container text-center mt-5 my-5">
    <h6 class="text-muted text-center">certificate</h6>
    <h3 class="mb-4">Our Certification</h3>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="certificate-card h-100 shadow-sm g-5">
                <div class="card-body">
                    <img src="{{ asset('images/certificate-1.jpg') }}" class="img-fluid rounded mb-3" alt="Certificate Image">
                    <h5 class="card-title">Hale Cinnamon</h5>
                    <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="certificate-card h-100 shadow-sm g-5">
                <div class="card-body">
                    <img src="{{ asset('images/certificate-1.jpg') }}" class="img-fluid rounded mb-3" alt="Certificate Image">
                    <h5 class="card-title">Hale Cinnamon</h5>
                    <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="certificate-card h-100 shadow-sm g-5">
                <div class="card-body">
                    <img src="{{ asset('images/certificate-1.jpg') }}" class="img-fluid rounded mb-3" alt="Certificate Image">
                    <h5 class="card-title">Hale Cinnamon</h5>
                    <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="certificate-card h-100 shadow-sm g-5">
                <div class="card-body">
                    <img src="{{ asset('images/certificate-1.jpg') }}" class="img-fluid rounded mb-3" alt="Certificate Image">
                    <h5 class="card-title">Hale Cinnamon</h5>
                    <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="certificate-card h-100 shadow-sm g-5">
                <div class="card-body">
                    <img src="{{ asset('images/certificate-1.jpg') }}" class="img-fluid rounded mb-3" alt="Certificate Image">
                    <h5 class="card-title">Hale Cinnamon</h5>
                    <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="certificate-card h-100 shadow-sm g-5">
                <div class="card-body">
                    <img src="{{ asset('images/certificate-1.jpg') }}" class="img-fluid rounded mb-3" alt="Certificate Image">
                    <h5 class="card-title">Hale Cinnamon</h5>
                    <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                </div>
            </div>
        </div>
    </div>
</div>


</section>

<section>
    <div class="container text-center my-5">
        <h6 class="text-muted text-center">Certificate</h6>
        <h3 class="mb-4">Product</h3>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="product-card h-100 shadow-sm">
                    <div class="card-body">
                        <img src="{{ asset('images/cp.png') }}" class="img-fluid rounded mb-3" alt="Product Image">
                        <h5 class="card-title">Hale Cinnamon</h5>
                        <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-card h-100 shadow-sm">
                    <div class="card-body">
                        <img src="{{ asset('images/1.jpg') }}" class="img-fluid rounded mb-3" alt="Product Image">
                        <h5 class="card-title">Hale Cinnamon</h5>
                        <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-card h-100 shadow-sm">
                    <div class="card-body">
                        <img src="{{ asset('images/2.webp') }}" class="img-fluid rounded mb-3" alt="Product Image">
                        <h5 class="card-title">Hale Cinnamon</h5>
                        <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-card h-100 shadow-sm">
                    <div class="card-body">
                        <img src="{{ asset('images/1.jpg') }}" class="img-fluid rounded mb-3" alt="Product Image">
                        <h5 class="card-title">Hale Cinnamon</h5>
                        <p class="card-text">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
