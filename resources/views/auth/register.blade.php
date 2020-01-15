@include('layouts.frontend.header')
@yield('content')

<section class="ftco-section contact-section" style="background-image: url('/frontend/images/2.jpeg')" >
<div class="contaier">

<form method="POST" action="{{ route('register') }}" style="margin-top:50px;">
       @csrf
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-6">
                <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
             @endif
       
             </div>
        </div>
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
         

            <div class="col-md-6">
                <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
       
                </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Password">
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
               @endif
       
              </div>
        </div>

        <div class="form-group">
           
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control " name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>
        </div>

        <div class="form-group">
           
           
            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">
            </div>
       
        </div>

        <div class="form-group">
           
            <div class="col-md-6">
                <textarea id="address" class="form-control " name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Address"></textarea>
            </div>
       
        </div>

        <div class="form-group">
        <div class="col-md-6">
            <p>Male<input class="form-control"  type='radio' name='gender' value="1{{ old('gender') }}"/></p>
            <p>Female <input class="form-control" type='radio' name='gender' value="2{{ old('gender') }}"/></p>
           
        </div>
        </div>
        
            
        
        <div class="form-group">
            <div class="col-md-6">
                <select class="form-control"  name="role_id" id="role_id">
                    <option value="3" selected>User</option>        
                    
                </select>
            </div>
            </div>
         
        
            
          
            
            
            
        


        <div class="form-group">
            <div class="col-md-6">
                <button type="submit" style="float:right;" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
       
        </div>
        
      </form>
      
</div>
</section>

    
@include('layouts.frontend.footer')
