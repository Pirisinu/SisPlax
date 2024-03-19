@extends('layouts.app')
@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <table class="table table-dark table-hover text-center fs-2 ">
            <thead>
                <tr class="py-2">
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Durata in mesi</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                        <tr class="mb-5 ">
                            <th scope="row">{{$service->id}}</th>
                            <td class="font-weight-bold">{{$service->name}}</td>
                            <td>{{$service->duration_in_month}}</td>
                            <td><strong>{{$service->price}}</strong><i class="fa-solid fa-euro-sign"></i> </td>
                            <td class="d-flex justify-content-center gap-3">

                                {{-- VIEW SERVICE --}}
                                <button class="btn btn-outline-success"><a class="text-light" href="{{route('admin.service.show',$service->id)}}"><i class="fa-solid fa-eye fs-2"></i></a></button>

                                {{-- EDIT SERVICE --}}
                                <button class="btn btn-outline-warning"><a class="text-light" href="{{route('admin.service.show',$service->id)}}"><i class="fa-solid fa-pencil fs-2"></i></a></button>

                                <form class="d-flex justify-content-center" action={{route("admin.service.destroy",$service->id)}} method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questo servizio?')">
                                    {{-- DELETE SERVICE --}}
                                    @csrf
                                    @method('DELETE')
                                    <button  type="submit" class="btn btn-outline-danger h-100"><i class="fa-solid fa-trash fs-2"></i></button>
                                </form>


                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection