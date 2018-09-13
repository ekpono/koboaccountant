@extends('layouts.app')

@section('content')
<main id="main mt-5 pt-5">
    <section id="about">
        <div class="container">
    
          <header class="section-header mt-5 pt-2">
            <h3>About Us</h3>
            <p>Koboaccountant Services is a registered online Accounting business in Nigeria.
                Our main goal is to provide Professional Accounting Services (PAS) to Business Startups, Small and Medium scale enterprises who prior to now were not able to access this services (PAS) largely due to the affordability (cost of hiring an Accountant or a Financial Consultant). 
                We therefore structured our value added services with the aim of ensuring our Niche market (SMEs/Startups) have access to top notch financial services. Consequently, we hope to grow into the business that will shape Africa and indeed the world.</p>
          </header>
    
          <div class="row about-cols">
    
            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="img text-center">
                  <img src="https://res.cloudinary.com/syfon/image/upload/v1536857445/mission.jpg" alt="" class="img-fluid text-center" >
                </div>
                {{-- <h2 class="title"><a href="#">Our Mission</a></h2> --}}
                <p class="p">
                    To build long term relationships with our customers and clients and provide exceptional customer services by pursuing business through innovation and advanced technology.

                </p>
              </div>
            </div>
    
            <div class="col-md-4  wow fadeInUp text-center" data-wow-delay="0.5s">
                <div class="about-col">
                  <div class="img">

                    <img src="https://res.cloudinary.com/syfon/image/upload/v1536857500/vision.jpg" alt="" class="img-fluid pt-4">
                  </div>
                  {{-- <h2 class="title"><a href="#">Our Vision</a></h2> --}}
                  <p class="pt-4">
                    To be a leader and provide quality services that exceeds the expectations of our esteemed customers.
                  </p>
                </div>
              </div>

              <div class="col-md-4  wow fadeInUp text-center " data-wow-delay="0.3s">
                <div class="about-col">
                  <div class="img">
                    <img src="https://res.cloudinary.com/syfon/image/upload/v1536857466/core.png" alt="" class="img-fluid pt-4" style="height: 280px;">
                  </div>
                  
                </div>
              </div>
 
              </div>
      
            </div>
       </section>
    
  <!--==========================
      How It works
    ============================-->
    <section id=""  class="section-bg" >
        <div class="container">
  
          <header class="section-header">
            <h3 class="section-title pt-5">How It Works</h3>
          </header>
  
        
          <div class="row portfolio-container text-center">
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://res.cloudinary.com/syfon/image/upload/v1536857534/app1.jpg" class="img-fluid rounded-circle" alt="" style="width:150px; height:150px;">
                
                </figure>
  
                <div class="portfolio-info">
                  <h5 class="h5"> YOU </h5>
                   <p> Simply signup and update your daily transactions via online data sheets that would be provided to you.</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://res.cloudinary.com/syfon/image/upload/v1536857575/web3.jpg" class="img-fluid rounded-circle" alt="" style="width:150px; height:150px;">
                 
                </figure>
  
                <div class="portfolio-info">
                  <h5 class="h5">US</h5> 
                  <p>  We assign you a personal accountant and ensure he gets the job done. </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.3s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://res.cloudinary.com/syfon/image/upload/v1536857542/app2.jpg" class="img-fluid rounded-circle" alt="" style="width:150px; height:150px;">

                </figure>
  
                <div class="portfolio-info">
                  <h5 class="h5">US</h5>
                   <p>  We send you monthly reports (Profit/Loss, Balance sheets, Cash flow statements)</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://res.cloudinary.com/syfon/image/upload/v1536857565/web2.jpg" class="img-fluid rounded-circle" alt="" style="width:150px; height:150px;">
            
                </figure>
  
                <div class="portfolio-info">
                  <h5 class="h5">US</h5>
                  <p>  We advice, make recommendations based on what we observe. We basically become your partner.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
 
      <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
          <div class="section-header wow fadeInUp text-center">
            <h3>Team</h3>
            <h4 class="h4">The question is , “Why are we the ones to solve the problem we identified?”
            </h4>
          </div>
  
          <div class="row">
  
            <div class="col-md-4 wow fadeInUp">
              <div class="member">
                <img src="https://res.cloudinary.com/syfon/image/upload/c_scale,w_597/v1536857330/team1.jpg" class="img-fluid" alt="" style="height:300px;">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>David Ita</h4>
                    <span>CEO/Founder</span>
                    <div class="social">
                      {{-- <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
              <div class="member">
                <img src="https://res.cloudinary.com/syfon/image/upload/v1536857337/team2.jpg" class="img-fluid" alt="" style="height:300px;">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Toluwaloju Duro’Bello</h4>
                    <span>Chief Operating Officer/CoFounder</span>
                    <div class="social">
                      {{-- <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="member">
                <img src={{asset("img/team3.jpg")}} class="img-fluid" alt="" style="height:300px;">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Dapo Eniola Martins</h4>
                    <span>Business Development/CoFounder</span>
                    <div class="social">
                      {{-- <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
           
          </div>

          <div class="row">
  
              <div class="col-md-4 col-6 wow fadeInUp">
                <div class="member">
                  <img src="https://res.cloudinary.com/syfon/image/upload/v1536857352/team4.jpg" class="img-fluid" alt="" style="height:250px;">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Patricia Ebong</h4>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-md-4  col-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="member">
                  <img src="https://res.cloudinary.com/syfon/image/upload/v1536857377/team5.jpg" class="img-fluid" alt="" style="height:250px;">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Henrietta Arthur</h4>
                    </div>
                  </div>
                </div>
              </div>
    
             
              <div class="col-md-4 col-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="member">
                  <img src="https://res.cloudinary.com/syfon/image/upload/v1536857389/team7.jpg" class="img-fluid" alt="" style="height:250px;">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Chisom Blessing</h4>
                    </div>
                  </div>
                </div>
              </div>

                 
                
  
    
            </div>
  
        </div>
      </section> 

  </main>



@endsection