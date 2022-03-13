@extends('layouts.app')

@section('content')
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" 
              style="background-image: url('{{ asset('assets/img/illustrations/illustration-signin.jpg')}}'); background-size: cover;"></div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">

                <div class="card card-plain">

<form method="POST" action="{{ route('login') }}"> 
    @csrf                   

<!-------------------------------->                    
                <div class="text-center">
                    <a href="{{ url('/') }}">
                      <img alt="Citro jugo" class="p-1" src="{{ asset('assets/img/logo-citrojugo-2021.png')}}">
                    </a>                    
                  </div>  

                <div class="card-header text-center">
                  <h4 class="font-weight-bolder">Iniciar sesión</h4>
                  <p class="mb-0">Ingrese su correo electrónico y contraseña para iniciar sesión</p>
                </div>
                <div class="card-body mt-2">
               
<!-------------------------------->                    
                    <div class="input-group input-group-outline mb-3">
                        
                      <label class="form-label">{{ _('Correo electrónico')}}</label>

                      <input id="email" type="email"  
                        class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" 
                        required autocomplete="off" 
                        autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    </div>
<!-------------------------------->                    
                    <div class="input-group input-group-outline mb-3">


                      <label class="form-label">{{ _('Contraseña')}}</label>
                      <input id="password" type="password" 
                        class="form-control @error('password') is-invalid @enderror" 
                        name="password" 
                        required autocomplete="off">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                        


                    </div>
<!-------------------------------->                    
                    <div class="form-check form-switch d-flex align-items-center mb-3">


                      <input class="form-check-input" type="checkbox" 
                        name="remember" 
                        id="remember" 
                        {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label mb-0 ms-3" for="remember">{{ _('Recuérdame')}}</label>
                    
                    </div>
<!-------------------------------->
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">{{ _('Iniciar sesión')}}</button>
                    </div>
<!-------------------------------->                  
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>

</form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
