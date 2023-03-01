<h1>{{ $judul }}</h1>
<ol>
    @foreach($program as $program)
    <li>{{$program}}</li>
    @endforeach
</ol>
