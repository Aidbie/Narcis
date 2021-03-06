@extends('app')
@section('content')

    <div class="main-content">


{{--<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">--}}
{{--    <ol class="carousel-indicators">--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
{{--    </ol>--}}
{{--    <div class="carousel-inner" role="listbox">--}}
{{--        <div class="carousel-item active">--}}
{{--            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
{{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Previous</span>--}}
{{--    </a>--}}
{{--    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
{{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Next</span>--}}
{{--    </a>--}}
{{--</div>--}}

<div class="row">


    @foreach($items as $item)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="{{ action('ShopController@openItem', $item->id_Preke)}}" >
               <img class="card-img-top" src="images/rose.jpeg" alt="">
                {{--                        <img src="{{ asset('/images') . '/' . $ph->pavadinimas . '.jpg'}}"  alt="paveiksliukas {{$ph->pavadinimas}}" >--}}
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ action('ShopController@openItem', $item->id_Preke)}}">{{$item->pavadinimas}}</a>
                    </h4>
                    <h5>{{$item->kaina}} Eur</h5>
                    <p class="card-text">{{$item->aprasymas}}</p>
                </div>
                </a>
                {{--                        <div class="card-footer">--}}
                {{--                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>--}}
                {{--                        </div>--}}
            </div>
        </div>
    @endforeach
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Item Two</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Item Four</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Item Five</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>


</div>
</div>
    @endsection
@section('filter')
    <h3 class="lg-3">Filtravimas</h3>
    @endsection

@section('category')
    <div class="list-group">
        <h4 class="list-group-item">Paieška</h4>
        <h4 class="list-group-item">Kategorijos</h4>
        @foreach($categories as $category)
            <a href="#" class="list-group-item">{{ $category->pavadinimas }}</a>

    @endforeach
        <h4 class="list-group-item">Spalvos</h4>
    @endsection
        @section('sort')
        <h4 class="lg-4">Rikiavimas</h4>
    @endsection
