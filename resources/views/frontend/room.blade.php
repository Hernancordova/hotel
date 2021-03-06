@extends('frontend.layouts.app')

@section('content')
<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Nuestra habitación</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Nuestra habitación</li>
        </ol>
    </div>
</div>

<div class="main-contant">
  <section>
    <div class="container">

      <div class="row">
        <nav class="navbar">
          <div class="container-fluid">
            <a class="navbar-brand"></a>
            <form class="row g-3" action="{{-- route('usuario.index') --}}" method="GET" autocomplete="off">
              <div class="col-auto">
                <label class="form-control-plaintext">Fitrar por precio</label>
              </div>

              <div class="col-auto">
                <div class="form-group">
                  <select name="searchBy" id=""  class="form-select form-select" aria-label=".form-select-sm example">
                    <option value="name">Precios entre 20 - 80 soles</option>
                    <option value="email">Precios entre 100 - 200 soles</option>
                  </select>
                </div>
              </div>

              <div class="col-auto">
              <div class="input-group mb-3">
                {{-- <input  class="form-control" type="search" {{ request('search') ? 'autofocus' : '' }} placeholder="Buscar" name="search" aria-label="Search" value="{{ request('search') }}" > --}}
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
              </div></div>

              {{-- <div class="col-auto">
                <input class="form-control" type="search" {{ request('search') ? 'autofocus' : '' }}  placeholder="Buscar" name="search" aria-label="Search" value="{{ request('search') }}">
              </div>
              <div class="col-auto">
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
              </div> --}}
            </form>
          </div>
        </nav>

        @foreach ($rooms as $room)
        <div class="col-md-4 col-sm-6">
          <div class="chr-room-thumb fancy-thumb">
            <figure>
              <img src='{{ asset("storage/rooms/$room->image")}}' alt="oscarthemes"/>
              <a href="#" class="price-tag th-bg" >
                S/ {{ $room->price }}
              </a>
            </figure>
            <div class="text">
              <h4 class="title"><a href="{{ route('habitacion-detalle')}}">{{ $room->name }}</a></h4>
              <p>{{ $room->description }}</p>
              <ul class="blog-meta">
                <li><i class="fa fa-bed th-cl"></i><span>{{ $room->number_beds }} camas</span></li>
                <li><i class="fa fa-user th-cl"></i><span>{{ $room->number_people }} personas</span></li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </section>
</div>
@endsection
