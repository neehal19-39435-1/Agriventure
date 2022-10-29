
<div class="accordion mb-2" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="mb-0">									
							<a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<span><i class="fas fa-leaf"></i> Products</span>
								<i class="fa fa-chevron-down toggle"></i>
							</a>
						</h2>
					</div>
					<div id="collapseOne"  aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item"><a href="{{route('product')}}"><i class="fas fa-plus"></i> Add products</a></li>
								<li class="list-group-item"><a href="{{route('UpdateProduct')}}"><i class="fas fa-pen"></i> Update products</a></li>
								<li class="list-group-item"><a href="{{route('viewproduct')}}"><i class="fas fa-eye"></i> View all products</a></li>
								<li class="list-group-item"><a href="{{route('delete')}}"><i class="fas fa-minus-square"></i> Remove Products</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">									
							<a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<span><i class="fas fa-list"></i></i> Category</span>
								<i class="fa fa-chevron-down toggle"></i>
							</a>
						</h2>
					</div>
					<div id="collapseThree"  aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">										
								<li class="list-group-item"><a href="{{route('balcony')}}"><i class="fas fa-leaf"></i> Balcony</a></li>
								<li class="list-group-item"><a href="{{route('rooftop')}}"><i class="fas fa-seedling"></i> Rooftop</a></li>
								<li class="list-group-item"><a href="{{route('moneyplant')}}"><i class="fab fa-pagelines"></i> Money-plants</a></li>
								<li class="list-group-item"><a href="{{route('equipments')}}"><i class="fas fa-wrench"></i> Gardening equipments</a></li>		
							</ul>
						</div>
					</div>
				</div>

			</div>
