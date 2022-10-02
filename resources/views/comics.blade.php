
@extends ('layout.app')

@section ('page-title', 'Comics Page')
@section('content')
    <h1>Elenco Comics!</h1>

    @foreach ($fumetti as $fumetto) {

        <div class="product_card">
        <div class="img_box">
            <img src="{{asset($fumetto['thumb'])}}" alt="">
        </div>
        <div class="title_box">
            <h4>{{$fumetto['title']}}</h4>
        </div>
        </div>

    }



@endsection    
