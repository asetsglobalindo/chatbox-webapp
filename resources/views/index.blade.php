  @extends('layouts.main')

  @section('content')
      <main class="main">

          <!-- Hero Section -->
          <section id="hero" class="hero section">

              <div class="container" data-aos="fade-up" data-aos-delay="100">

                  <div class="row align-items-center">
                      <div class="col-lg-6">
                          <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                              <div class="company-badge mb-4">
                                  <i class="bi bi-gear-fill me-2"></i>
                                  Working for your success
                              </div>

                              <h1 class="mb-4">
                                  ChatBox <br>
                                  The Ultimate All-in-One <br>
                                  <span class="accent-text"> Consultation & Communication Platform</span>
                              </h1>

                              <p class="mb-4 mb-md-5">
                                  ChatBox is the ultimate all-in-one consultation platform designed to streamline
                                  interactions, protect conversations, and maximize business growth. <br>
                                  Whether you need secure chat management, latest powered customer engagement, or expert
                                  consultation in tech, entertainment, and beyond—ChatBox is your go-to solution.
                              </p>

                              <div class="hero-buttons">
                                  <a href="/dashboard" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                                  {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                      class="btn btn-link mt-2 mt-sm-0 glightbox">
                                      <i class="bi bi-play-circle me-1"></i>
                                      Play Video
                                  </a> --}}
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-6">
                          <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                              <img src="/assets2/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

                              <div class="customers-badge">
                                  <div class="customer-avatars">
                                      <img src="/assets2/img/avatar-1.webp" alt="Customer 1" class="avatar">
                                      <img src="/assets2/img/avatar-2.webp" alt="Customer 2" class="avatar">
                                      <img src="/assets2/img/avatar-3.webp" alt="Customer 3" class="avatar">
                                      <img src="/assets2/img/avatar-4.webp" alt="Customer 4" class="avatar">
                                      <img src="/assets2/img/avatar-5.webp" alt="Customer 5" class="avatar">
                                      <span class="avatar more">12+</span>
                                  </div>
                                  <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                      <div class="col-lg-3 col-md-6">
                          <div class="stat-item">
                              <div class="stat-icon">
                                  <i class="bi bi-trophy"></i>
                              </div>
                              <div class="stat-content">
                                  <h4>All-in-One Consultation</h4>
                                  <p class="mb-0"> From Tech to Entertainment & More</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <div class="stat-item">
                              <div class="stat-icon">
                                  <i class="bi bi-briefcase"></i>
                              </div>
                              <div class="stat-content">
                                  <h4>Secure & Protected Chat Channels</h4>
                                  <p class="mb-0">Built for Brand Needs</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <div class="stat-item">
                              <div class="stat-icon">
                                  <i class="bi bi-graph-up"></i>
                              </div>
                              <div class="stat-content">
                                  <h4>Unified Chat System</h4>
                                  <p class="mb-0">Manage Everything in One Dashboard</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <div class="stat-item">
                              <div class="stat-icon">
                                  <i class="bi bi-award"></i>
                              </div>
                              <div class="stat-content">
                                  <h4>White-Label & Scalable</h4>
                                  <p class="mb-0">Customizable for Any Business</p>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>

          </section><!-- /Hero Section -->


      </main>
  @endsection
