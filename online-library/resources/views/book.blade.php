@extends('layout.layoutindex') {{--untuk transfer dari layout yg sama ke halaman--}}

@section('title','Home') {{--untuk ganti title dr nama titile ke home--}}

@section('content') {{--ini untuk transfer hanya pada section yang suka berubah ubah--}}

<div style="display:grid;grid-template-columns:auto auto auto;gap:10px">{{--untuk css style nya itu di parent kalau kondisinya dia perulangan items--}}
@foreach($index as $book) {{--$index itu dari bookcontrollernya property nya --}}

    <!-- first item -->
    <div >
      <div class="thumbnail">
        <img src={{$book['image']}} {{--untuk ['image'] itu maksudnya data dari book controller di kirim ke sini cara call nya begitu--}}alt="..." width="250px">
        <div class="caption">
          <h3>{{$book['title']}}</h3>
          <p>{{$book['short_desc']}}</p>
        <div class="text-center"><a href="./views/detail.blade.php" class="btn btn-default" role="button">Show Detail</a></div>
        </div>
      </div>
</div>

    
  @endforeach
</div>
@endsection

@section('plagination')
@parent

@endsection
