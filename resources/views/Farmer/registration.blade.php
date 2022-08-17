<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  .link{
    text-align:center;
  }
  </style>
</head>
<body>
  <br>
<section class="vh-100" >
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black w-50 m-auto" style="border-radius: 25px;">
          <div class="card-body p-md-5">

              <div class="col">


<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
  class="img-fluid" alt="Sample image">


                <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="{{route('farmersignUp')}}" method="post" name="form" enctype="multipart/form-data">
                {{csrf_field()}}

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
             <ul>
                 @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                 @endforeach
             </ul>
        </div>
 @endif


 @if (\Session::has('failed'))
 <div class="alert alert-danger alert-dismissible">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
{!! \Session::get('failed') !!}
</div>
@endif

@if (\Session::has('success'))
 <div class="alert alert-success alert-dismissible">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
{!! \Session::get('success') !!}
</div>
@endif

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" class="form-control" placeholder="Your name here"/>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" class="form-control" placeholder="Your email here"/>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="tel" name="phone" class="form-control" placeholder="Your phone number here"/>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="address" class="form-control" placeholder="Your address here"/>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="store" class="form-control" placeholder="Your store name here" />
                     
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" class="form-control" placeholder="Your password here"/>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="retypepass" class="form-control" placeholder="Repeat your password" />
                      
                    </div>
                  </div>


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" value="Register">
                  </div>
                  <p class='link'>Already registered? <a href="{{route('farmerlogin')}}">Login</a></p>
                </form>

              </div>
              
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>