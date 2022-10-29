@extends('Farmer.Layouts.dashboard.dashboard')
@section('content')

<body>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
    <div class="card-deck">
    @foreach($cards as $card)
      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card" style ="border-radius: 20px;">
          <div class="d-flex justify-content-center p-3">
          <h5 class="mb-0">{{$card->pname}}</h5>
            
          </div>
          <img src="img/{{$card->image}}"
            class="card-img-top"/>
          <div class="card-body">
            <div class="d-flex justify-content-between">
            @if($card->oprice != Null)
              <p>Price: </p>
              <p class="text-info">{{$card->oprice}} &nbsp;&nbsp;<span class="small text-danger"> <s>{{$card->pprice}}</s><span></p>
              @elseif($card->oprice == Null)
              <p>Price: </p>
              <p class="text-info">{{$card->pprice}}</p>
              @endif
            </div>
            
            <div class="d-flex justify-content-between mb-3">
            <p class="lead mb-0">{{$card->desc}}
            </p>
              
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">{{$card->quantity}}</span></p>
              <div class="ms-auto text-warning">
                    <span>{{$card->category}}</span>
              </div>
             
            </div>
            <br>
            <div class="d-flex justify-content-center">
            <a href="{{route('del',['id'=>$card->id])}}" class="btn btn-danger w-75" style="color:white"> Delete Product</a>
      </div>
          </div>
        </div>
      </div>
      @endforeach


</div>



    </div>
    <br><br>
            <div class="d-flex justify-content-center">
            {!! $cards->links() !!}
        </div>
  </div>
</section>
</body>
@endsection