@include('layouts.frontend.header')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/frontend/images/12.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Car Registration</h1>
        </div>
      </div>
    </div>
  </section>
<div class="container">
  <div class="content mt-3">
      <div class="animated fadeIn">
          <div class="row"><!-- div class=row one start -->
              @if (session('success'))
                  <div class="flash-message col-md-12">
                  <div class="alert alert-fail ">
                      <p class="text-danger">{{session('success')}}</p>
                  </div>
                  </div>
              @endif
          </div>
      </div>
  </div>
  
  @if (count($errors) > 0)
  <div class="content mt-3"><!-- div class=row content start -->
      <div class="animated fadeIn"><!-- div class=FadeIn start -->
          <div class="card"><!-- card start -->
      
              <div class="card-body">  <!-- card-body start -->
  
                  
                      <div class="row"><!-- div class=row One start -->
                          @foreach ($errors->all() as $error)
                              <div class="col-md-12"><!-- div class=col 12 One start -->
                                  <p class="text-danger">* {{ $error }}</p> 
                              </div><!-- div class=col 12 One end -->
                          @endforeach
                      </div><!-- div class=row One end -->
                  
  
              </div> <!-- card-body end -->
  
          </div><!-- card end -->
      </div><!-- div class=FadeIn start -->
  </div><!-- div class=row content end -->
  @endif
</div>
  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12">
        
    <form action="/registration/store" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    
            <div class="form-group">
                <select class="form-control" name="car_id" id="car_id">
                    <!-- <option value="" selected disabled>Select Course Name</option> -->
                    {{-- dynamic looping--}} 
                    @foreach($car as $car)
                <option value="{{$car->id}}">{{$car->name}} ==> {{$car->price}} - KS ==> {{$car->car_no}}<option>
                    @endforeach
                </select>
             
            </div>
            
            <div class="form-group">
              <label>Select your start date</label>
                <input type="date" name="start_date" class="form-control">
            </div>
            <div class="form-group">
                <label>Select your end date</label>
               <input type="date" name="end_date" class="form-control">
            </div>
            <div class="form-group">
              <select class="form-control" name="payment">
                  
              
                <option value="1">KBZ Pay<option>
                <option value="2">VISA<option>
                <option value="3">Credit Card<option>
                <option value="4">Cash Down<option>
                 
              </select>
          </div>
              <div class="form-group">
              <input type="submit" onclick="return myFunction();" value="Register" class="btn btn-warning py-3 px-5">
            </div>
          </form>
        
        </div>
      </div>
       </div>
  </div>
</section>

<script>
    function myFunction() {
    if(!confirm("Are You Sure to do this ?"))
    event.preventDefault();
    }
    </script>
    

@include('layouts.frontend.footer')