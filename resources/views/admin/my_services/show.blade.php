@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center h-100">
    <div class="card  glass-form w-75 h-50">
        <div class="card-header fs-1 text-light text-center">
            {{$service->name}}
        </div>
        <div class="card-body d-flex flex-column align-items-center">
          <h5 class="card-title">Descrizione</h5>

          <div class="my-5 w-100 d-flex gap-3">
                <div class="card w-50 fs-1">
                    <div class="card-header ">
                    Prezzo
                    </div>
                    <div class="card-body">
                    <h5 class="card-title fs-1">{{$service->price}}&euro;</h5>
                    </div>
                </div>
                <div class="card w-50 fs-1">
                    <div class="card-header">
                    Durata in mesi
                    </div>
                    <div class="card-body">
                    <h5 class="card-title fs-1">{{$service->duration_in_month}}</h5>
                    </div>
                </div>
          </div>

          <a href="{{route('admin.dashboard-services')}}" class="btn btn-primary ">Torna ai servizi</a>
        </div>
      </div>
</div>


@endsection
