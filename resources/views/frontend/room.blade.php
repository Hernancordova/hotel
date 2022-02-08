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
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Rooms Section Start-->
    <section>
        <div class="container">
            <div class="row">
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room1.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 100</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="{{ route('habitacion-detalle')}}">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room2.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 200</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="{{ route('habitacion-detalle')}}">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room3.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 250</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="room-detail.html">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room4.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 350</a>
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="#">Habitación de lujo para huéspedes</a></h4>
                                <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                                <ul class="blog-meta">
                                    <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                    <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room5.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 450</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="room-detail.html">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room6.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 200</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="{{ route('habitacion-detalle')}}">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room7.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 400</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="{{ route('habitacion-detalle')}}">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room8.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 600</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="{{ route('habitacion-detalle')}}">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room9.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 800</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="{{ route('habitacion-detalle')}}">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <div class="col-md-12">
                    <!-- Pagination Start-->
                    <div class="chr-pagination text-center">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers border_none" href="#">...</a>
                        <a class="page-numbers" href="#">18</a>
                        <a class="page-numbers" href="#">19</a>
                        <a class="page-numbers" href="#">20</a>
                    </div>
                    <!-- Pagination End-->
                </div>
            </div>
        </div>
    </section>
    <!--Rooms Section End-->
</div>
@endsection
