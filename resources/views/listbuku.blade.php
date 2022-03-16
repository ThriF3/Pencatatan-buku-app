@extends('layouts.main')
@section('list-container')

@if (session('success'))
        <div class="alert-success">
            <p>{{ session('success') }}</p>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
<div class="container">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-10"><h3>List Buku :</h3></div>
            <div class="col-lg-2 position-relative">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Buku</button>
                
                <!-- Modal -->
                @include('tambahbuku')
            </div>
            <div class="modal" tabindex="-1">

    </div>
    <div class="container mt-3 d-flex justify-content-start flex-wrap">
        @foreach ($bukus as $buku)
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                    <h5 class="card-title">{{ $buku->judul }}</h5>
                    <p class="card-text">{{ $buku->sinopsis }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Author : {{ $buku->author }}</li>
                    <li class="list-group-item">Penerbit : {{ $buku->penerbit }}</li>
                </ul>
                <div class="card-body">
                    <div class="btn-group">
                        <button class="btn btn-warning " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $buku->id }}">Edit</button>
                        <form action="{{ url("listbuku", $buku->id) }}" method="POST">
                            @csrf
                            @method("Delete")
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    @include('editbuku', ['buku'=>$buku])
                    <!-- <a href="listbuku/{{ $buku->id }}/editbuku" class="btn btn-warning">Edit</a> -->
                </div>
        @endforeach
        <!-- <div class="card m-2" style="width: 18rem;">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Sinopsis Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Author :</li>
                <li class="list-group-item">Penerbit :</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
        </div> -->
    </div>
</div>

@endsection 