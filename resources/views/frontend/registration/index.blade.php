@include('layouts.frontend.header')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/frontend/images/6.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Registered Car</h1>
        </div>
      </div>
    </div>
  </section>

<div class="container">
  <div class="row">
        <div class="col-md-12">
            
                

                @if (session('success'))
                <div class="flash-message col-md-12">
                    <div class="alert alert-success ">
                        {{session('success')}}
                    </div>
                </div>
                @endif
                
                <!-- Main content -->
                
                                
                
                        <table class='table' style="margin-top:20px;margin-bottom:20px;">
                
                                <thead class="thead">
                                    <tr>
                                        <th class="bg-dark heading" style="color:white;text-align:center;">User-Name</th> 
                                        <th class="bg-dark heading" style="color:white;text-align:center;">Car-Name</th>
                                        <th class="bg-dark heading" style="color:white;text-align:center;">Price</th>
                                        <th class="bg-dark heading" style="color:white;text-align:center;">Car-NO</th>
                                        <th class="bg-dark heading" style="color:white;text-align:center;">Start-date</th>
                                        <th class="bg-dark heading" style="color:white;text-align:center;">End-date</th>
                                        <th class="bg-dark heading" style="color:white;text-align:center;">Payment</th>
                                        <th class="bg-dark heading" style="color:white;text-align:center;">Status</th>
                                        <th class="bg-dark heading" style="color:white;text-align:center;">Total-amount</th>
                                        <th class="bg-dark heading" style="color:white;text-align:center;">Registered_at</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                
                                    @foreach ($registrations as $registration)
                                    <tr>
                                        <td style="text-align:center;">{{ $registration->user_name }}</td>
                                        <td style="text-align:center;">{{ $registration->car_name }}</td>
                                        <td style="text-align:center;">{{ $registration->price }}</td>
                                        <td style="text-align:center;">{{ $registration->car_no }}</td>
                                        <td style="text-align:center;">{{ $registration->start_date }}</td>
                                        <td style="text-align:center;">{{ $registration->end_date }}</td>
                                        <td style="text-align:center;">                            
                                          @if($registration->payment == 1)
                                              <b><span class="flaticon-handshake"></span><p class="text-success">KBZ Pay</p></b>
                                          @elseif($registration->payment == 2)
                                              <b><span class="flaticon-handshake"></span><p class="text-success">VISA</p></b>
                                          @elseif($registration->payment == 3)
                                              <b><span class="flaticon-handshake"></span><p class="text-success">Credit Card</p></b>
                                          @else
                                          <b><span class="flaticon-handshake"></span><p class="text-success">Cash Down</p></b>
                                          @endif
                                        </td>
                                        <td style="text-align:center;">                            
                                          @if($registration->status == 1)
                                              <b><span class="ion-ios-information"></span><p class="text-info">Pending</p></b>
                                          @elseif($registration->status == 2)
                                              <b><span class="ion-ios-checkmark"></span><p class="text-success">Confirmed</p></b>
                                          @else
                                          <b><span class="ion-ios-close"></span><p class="text-danger">Denied</p></b>
                                          @endif
                                          
                                      </td>
                                      <td style="text-align:center;">{{ $registration->total_amount }}</td>
                                     
                                      <td style="text-align:center;">{{ $registration->created_at }}</td>
                                    </tr>
                                    @endforeach
              
                                </tbody>
                        </table>
                
                 
        </div>
    </div>
</div>
<script>
        function myFunction() {
            if(!confirm("Are You Sure to update this ?"))
            event.preventDefault();
        }
        
        //  function myFunction1() {
        //      if(!confirm("Are You Sure to delete this ?"))
        //      event.preventDefault();
        //  }
        //</script>
@include('layouts.frontend.footer')

