@extends ('layout')
@section ('content')
        <main>
           <h1>{{$data['title']}}</h1>
           <p>{{$data['text']}}</p>
        </main>
@endsection
@section ('test-footer')
 <p> this is main page footer</p>
  @endsection
  