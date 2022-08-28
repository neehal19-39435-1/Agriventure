@extends('Layouts.dashboard.dashboard')
@section('content')

<head>
<style>

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8;

}
.upload-btns-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}


.upload-btns-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>
</head>
<body>
<div class="container rounded bg-white mt-5 mb-5">
	<form action="{{route('productInfoUp')}}" method="post" name="form" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="row">
    	
        <div class="col-md-3 border-right align-self-center">

            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="mt-3 border border-secondary p-2 mb-3 bg-white" width="250px" height="200px" src="../img/{{$card->image}}">
            <div class="upload-btns-wrapper"> 
            <button class="btn btn-outline-warning">Update Picture</button>
            <input type="file"  name="image" id="image" value="../img/{{$card->image}}">
            </div>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Product Info Update</h4>
                </div>
                <div class="row mt-3">              
        <input type="text" name="pid" class="form-control" value ="{{$card->id}}" hidden>
        <input type="text" name="pname" class="form-control" placeholder="Enter Product Name" value ="{{$card->pname}}"><br><br>
        <input type="text" name="pprice" class="form-control" placeholder="Enter Product Price" value ="{{$card->pprice}}"><br><br>
        <input type="text" name="quantity" class="form-control" placeholder="Enter Product Quantity" value ="{{$card->quantity}}"><br><br>
        <textarea name="desc" class="form-control" placeholder="Enter Product description" value = "{{$card->desc}}">{{$card->desc}}</textarea>
        <p></p><input name="category" class="form-control" placeholder="Enter Product Category" type="text" value ="{{$card->category}}"><br><br>
         <div class="d-flex justify-content-center">
            <a href='#' class="btn btn-success w-75" id="offer" style="color:white"> Add offer?</a>
      </div> <br>
      <div id="oprice" style="display: none;"> 
      <input type="text" name="oprice" class="form-control" placeholder="Enter Offer Price"><br><br>
</div>
    <div class="form-group"><br>
        <input type="submit" class="btn btn-primary btn-block" value="Update">
    </div>
             </div>
            </div>
        </div>

        <div class="col-md-4 border-right align-self-center">
                      <div class="p-3 py-5">
            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
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
                    </div>
        </div>

    </div>
</form>
</div>
</body>
<script>
document.getElementById("offer").onclick = function() {
document.getElementById("oprice").style.display = "block";
}
</script>
@endsection