@extends('layout.main')

@section('content')

  <div class="jumbotron-style"></div>

	<div class="bg-color-black">

		<!-- in questo container stampo le carte -->
		<div class="container pb-3">

			<div class="card-container d-flex flex-wrap py-5 align-content-center h-100 position-relative">

				<div class="label-for-coimics position-absolute">
					<h3>CURRENT SERIES</h3>
				</div>

				{{-- singola card --}}
				@foreach ($comics as $comic)
					<div class="card card-w ">
						<div class="card no-bg">
							<div class="card-top overflow-hidden">
									<img src="{{ $comic->image }}" class="card-img-top" alt="{{ $comic->title }}">
							</div>

							<div class="card-body">
									<h6 class="card-title">{{ $comic->title }}</h6>
							</div>
						</div>
					</div>
				@endforeach


				{{-- fine card --}}
			</div>
			<div class=" m-auto w-mc">
				<button class="btn ds-btn"> LOAD MORE </button>
			</div>


		</div>
		{{-- fine container cards --}}

		{{-- sezione shop --}}
		<div class="shop-comp">
			<div class="background-primary-light">

				<div class="container py-5 z-index">

					<ul class="d-flex flex-wrap align-items-center p-0 justify-content-between">
						<li class="d-flex align-items-center">
							<img src="" alt="">
							<a href="#"></a>
						</li>
						<li class="d-flex align-items-center">
							<img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
							<a href="#">DIGITAL COMICS</a>
						</li>
						<li class="d-flex align-items-center">
							<img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
							<a href="#">DC MERCHANDISE</a>
						</li>
						<li class="d-flex align-items-center">
							<img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
							<a href="#">SUBSCRIPTION</a>
						</li>
						<li class="d-flex align-items-center">
							<img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
							<a href="#">COMIC SHOP LOCATOR</a>
						</li>
						<li class="d-flex align-items-center">
							<img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
							<a href="#">DC POWER VISA</a>
						</li>
					</ul>

				</div>


			</div>
		</div>
		{{-- fine sezione shop --}}


	</div>
@endsection


