@extends('layouts.app')

@section('content')
<main id="main mt-5 pt-5">
    <section id="about">
        <div class="container">
    
          <header class="section-header mt-5 pt-2">
            <h3>About Us</h3>
            <p>Koboaccountant Services is a registered online Accounting business in Nigeria.
                Our business model is designed  to enable us service our identified Niche efficiently and profitably. Our main goal is to provide Professional Accounting Services (PAS) to Business Startups, Small and Medium scale enterprises who prior to now weren’t able to access this services (PAS) largely due to the affordability (cost of hiring an Accountant or a Financial Consultant). 
                We therefore structured our value added services with the aim of ensuring our Niche market (SMEs/Startups) have access to top notch accounting which entails; Keeping proper financial records and access to Professional advice. Consequently, we hope to grow into the business that will shape Africa and indeed the world.</p>
          </header>
    
          <div class="row about-cols">
    
            <div class="col-md-6 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="img/about-mission.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Our Mission</a></h2>
                <ul>
                    <li> To provide MSMEs with support that would give their business the needed tools to be successful.</li>
                    <li> To make accounting fun, easy and as useable as it can be without compromising on quality.</li>
                    <li> To expand our services to include Accounting for Individuals overtime.</li>
                    <li> To create employment for at least 500 Accountants.</li>
                </ul>
              </div>
            </div>
    
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="about-col">
                  <div class="img">
                    <img src="img/about-vision.jpg" alt="" class="img-fluid">
                    <!-- <div class="icon"><i class="ion-ios-eye-outline"></i></div> -->
                  </div>
                  <h2 class="title"><a href="#">Our Vision</a></h2>
                  <p>
                      To provide startups & small and medium scale business access to affordable professional accounting services through simplified, easy-to-use platforms and consequently, build businesses that will rank among the best in the Africa
                  </p>
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
  
        
          <div class="row portfolio-container">
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/app1.jpg" class="img-fluid rounded-circle" alt="" style="width:150px; height:150px;">
                
                </figure>
  
                <div class="portfolio-info">
                  <p> YOU’ simply signup and update your daily transactions via online data sheets that would be provided to you.</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/web3.jpg" class="img-fluid rounded-circle" alt="" style="width:150px; height:150px;">
                 
                </figure>
  
                <div class="portfolio-info">
                  <p>US’ we assign you a personal accountant and ensure he gets the job done. </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.3s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/app2.jpg" class="img-fluid rounded-circle" alt="" style="width:150px; height:150px;">

                </figure>
  
                <div class="portfolio-info">
                  <p>US’ we send you monthly reports. Reports include: Profit/Loss, Balance sheets, Cash flow statements. (Note that your Online data sheet contains Financial reports like your Profit/Loss statements, Debtors and Creditors summary, Cash and Bank balances).</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/card2.jpg" class="img-fluid rounded-circle" alt="" style="width:150px; height:150px;">
            
                </figure>
  
                <div class="portfolio-info">
                  <p>US’we advice. Make recommendations based on what we observe. We basically become your partner.</p>
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
          <div class="section-header wow fadeInUp">
            <h3>Team</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6 wow fadeInUp">
              <div class="member">
                <img src="img/team-1.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="member">
                <img src="img/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="member">
                <img src="img/team-3.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="member">
                <img src="img/team-4.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section> 

  </main>



@endsection