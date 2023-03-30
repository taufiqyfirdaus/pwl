<h1>{{ $judul }}</h1>
<ol>
    @foreach($product as $product)
    <!-- <li>{{$product}}</li> -->
    <li>{!!$product!!}</li>
    @endforeach
</ol>
