@extends('shop')

@section('content')

    <div class="row">
        @foreach($cars as $car)
            <div class="col-md-3 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p>{{ $car->model }}</p>
                        <p class="card-text"><strong>Price: </strong> ${{ $car->price }}</p>
                        <p class="btn-holder"><a href="{{ route('addcar.to.basket', $car->id) }}" class="btn btn-outline-danger">Add to Basket</a> </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
