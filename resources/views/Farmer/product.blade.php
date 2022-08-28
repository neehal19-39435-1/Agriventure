@extends('Layouts.dashboard.dashboard')
@section('content')

<body>
<div class="container">
    <h2 class="text-center">Create sell posts</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form class="mx-1 mx-md-4" action="{{route('product')}}" method="post" name="form" enctype="multipart/form-data">
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
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
              
                                    <p class="m-0">Fill up the blanks below:</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-leaf" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="product" name="pname" placeholder="Enter the product title" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-usd" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="price" name="pprice" placeholder="Enter the product price" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-balance-scale" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="qnty" name="quantity" placeholder="Enter the product quantity " >
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comments" aria-hidden="true"></i></div>
                                        </div>
                                        <textarea class="form-control" name="desc" placeholder="Description" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-venus-mars"></i> </span>
                            </div>
                                <select class="custom-select" name="category">
                                <option selected="">Select your category</option>
                                <option value="Balcony">Balcony</option>
                                <option value="Rooftop">Rooftop</option>
                                <option value="Money-plant">Money-plant</option>
                                <option value="Agricultural equipments">Agricultural equipments</option>
                            </select>
                        </div>
                                 <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-usd" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/png, image/gif, image/jpeg, image/jpg">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Create" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
	</div>
</div>
</body>
@endsection