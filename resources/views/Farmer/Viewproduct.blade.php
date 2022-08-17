<head>
 <meta charset="UTF-8">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
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