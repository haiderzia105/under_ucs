@extends('main.frontend.web')
@section('content')
<div class="admission-wrapper mt-sm-5 mt-3">
    <div class="container g-0">
        <div class="row g-0">
            <h3 class="admission-head px-2 px-sm-0">Admission</h3>	
            <div class="col-md-8">
                <p class="px-2 px-sm-0">There are two phases for admission:</p>
                <div class="row g-0">
                <div class="col-md-8">
                    <h3 class="phase-one px-2 px-sm-0">Phase one</h3>	
                    <ul class="phase-points px-2 px-sm-0">
                        <li>Filling in the registration</li>
                        <li>Meeting of parents/guardians and a team of experts</li>
                        <li>Psychological testing and interview with the school psychologist in order to assess the student’s psychological and physical abilities and talents</li>
                        <li>Getting the students and parents familiar with International School’s academic, social and ethical code of conduct</li>
                        <li>Adjusting the terms of schooling with parents/guardians, as well as mutual expectations</li>
                    </ul>
                    <h3 class="phase-two px-2 px-sm-0">Phase Two</h3>	
                    <ul class="phase-points-two px-2 px-sm-0">
                        <li>Completed application for admission</li>
                        <li>Signed Agreement between International School and the student and the parents/guardians</li>
                        <li><b>Delivering the necessary documentation:</b></li>
                        <ul>
                        <li>Birth certificate / Passport</li>
                        <li>Medical certificate of intellectual and physical ability to attend school</li>
                        <li>Confirmation of settlement of the first instalment, semi-annual tuition or full tuition</li>
                        </ul>
                        <li><b>For enrolment into the requested primary school grade:</b></li>
                        <ul>
                        <li>certificate of completion for the 5th grade of primary school if the child attended a national programme, or</li>
                        <li>certificate of achievement for Year 6 if the child attended the Cambridge programme (preferably the Statement of result for Cambridge Primary), or</li>
                        <li>certificate of achievement for Year 5 if the child attended the K12 system</li>
                        </ul>
                        <li><b>For enrolment into the requested secondary school grade:</b></li>
                        <ul>
                         <li>certificate of completing primary school for enrolment into the 1st grade, or</li>   
                         <li>certificate of completing the previous secondary school grade for enrolment into higher grades</li>
                        </ul>
                        <li class="info-point">For more information, write us at:<a href="#"> admission@iss.edu.rs</a></li>
                    </ul>
                    <div class="enrollment my-4">
                        <div class="container">
                            <div class="d-flex">
                                <img src="{{asset('Main/frontend/images/ucs_logo.svg')}}" class="img-fluid">
                                <div class="d-inline ms-sm-3 mt-3">
                                    <h4>Enrollment for class 2023/24 is underway!</h4>
                                    <div class="d-flex">
                                    <a href="#">Click here to register</a>
                                    <i class="fa fa-forward ms-2 mt-2" aria-hidden="true" style="color: red"></i>	 
                                    </div>
                                </div>
                        </div>
                      </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="admission-group mx-2 my-2 my-md-0">
                    <img src="{{asset('Main/frontend/images/group-image.jpg')}}" class="img-fluid">
                    </div>
                </div>
                </div>
                
            </div>

  <div class="col-md-4">
  <div class="accordion accordion-flush" id="accordionAbout">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Admission
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
        <div class="accordion-body">
          <ul class="px-0">
          <li><a href=""><strong>Admission Process</strong></a></li>
          <li><a href=""><strong>Admission Office</strong></a></li>
          <li><a href=""><strong>Enrolment Benefits</strong></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          About the School
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionAbout">
        <div class="accordion-body">
          <ul class="px-0">
            <li><a href=""><strong>Accrediation</strong></a></li>
            <li><a href=""><strong>Mission and Vision</strong></a></li>
            <li><a href=""><strong>Policy and Regulations</strong></a></li>
            </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Jobs
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionAbout">
        <div class="accordion-body">
          <ul class="px-0">
            <li><a href=""><strong>The Diploma curriculum</strong></a></li>
            <li><a href=""><strong>Accountant</strong></a></li>
            <li><a href=""><strong>Math Teacher</strong></a></li>
            </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Upcoming Events
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionAbout">
        <div class="accordion-body">
          <ul class="px-0">
            <li><a href=""><strong>eLEARNING</strong></a></li>
            <li><a href=""><strong>Fun Fair</strong></a></li>
            <li><a href=""><strong>How to use the Platform for Students</strong></a></li>
            </ul>
        </div>
      </div>
    </div>

  </div>

  {{-- sign up form  --}}

  <form class="about-signup mx-3 px-2 py-4">
    <p class="text-center"><b>Sign up for the “The right school for a bright future” newsletter for free.</b></p>
    <div class="mb-3 mt-3">
      <label for="AboutEmail" class="form-label">Your Email</label>
      <input type="email" class="form-control" id="AboutEmail" placeholder="Email">
    </div>
    <div class="mb-3">
      <label for="AboutName" class="form-label">Your Name</label>
      <input type="name" class="form-control" id="AboutName" placeholder="Name">
    </div>
    <button type="submit" class="btn btn-primary">Subscribe</button>
  </form>

  <div class="admission-banner-group ">
  <div class="image my-3">
    <img src="{{asset('Main/frontend/images/enroll.jpg')}}" class="img-fluid px-5"> 
  </div>
  <div class="image-one my-3">
    <img src="{{asset('Main/frontend/images/about-banner-one.png')}}" class="img-fluid px-5"> 
  </div>
  <div class="image-two my-3">
    <img src="{{asset('Main/frontend/images/about-banner-two.png')}}" class="img-fluid px-5"> 
  </div>
  <div class="image-three my-3">
    <img src="{{asset('Main/frontend/images/about-banner-three.png')}}" class="img-fluid px-5"> 
  </div>
  </div>


</div>
        </div>
    </div>
</div>
@endsection