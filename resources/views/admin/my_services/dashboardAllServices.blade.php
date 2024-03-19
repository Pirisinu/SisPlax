@extends('layouts.app')
@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        @if (session('success'))
        <div class="display-none" id="successDelete"></div>
        <div class="modal fade opacity-100 top-50 overflow-visible " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5 text-black " id="exampleModalLabel">Eliminazione Servizio</h1>
                <button type="button" class="btn-close" onclick="closeModal()" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-black "> {{ session('success') }} </p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()" id="closeButton" data-bs-dismiss="modal">Chiudi</button>

                </div>
            </div>
            </div>
        </div>

    @endif
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

    <script>
        let deleteFlag = document.getElementById('successDelete');
        let closeButton = document.getElementById('closeButton');

        if (deleteFlag) {
            exampleModal.classList.add('d-block');
        }


        function closeModal() {
            exampleModal.classList.remove('d-block');
            exampleModal.classList.add('d-none');
        }

    </script>
@endsection
