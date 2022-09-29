@extends('layouts.main');

@section('title', 'Homepage')

@section('main-scripts')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@endsection

@section('main-content')
    <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-center">

                    @forelse ($trains as $train)
                        <div class="card text-bg-light w-25 m-2">
                            <div class="card-header"> {{ $train->business_company }} </div>
                                <div class="card-body">
                                    <h5 class="card-title"> Parteza: {{ $train->departure_station }} </h5>
                                    <h5 class="card-title"> Arrivo: {{ $train->arrival_station }} </h5>
                                    <p class="card-text"> Orario partenza: {{ $train->departure_hour }} </p>
                                    <p class="card-text"> Orario arrivo: {{ $train->arrival_hour }} </p>
                                    <p class="card-text"> Binario: {{ $train->carriages }} </p>
                                    <p class="card-text"> {{ $train->on_time }} </p>
                                    <p class="card-text"> {{ $train->cancelled }} </p>
                                </div>
                        </div>
                    @empty
                        <p>
                            Ops - Empty Content
                        </p>
                    @endforelse       
                </div>
            </div>
        </div>
    </div>
@endsection