@extends ('layout')
@section ('content')
        <main>
           <h1>{{$data['title']}}</h1>
           <p>
            {{$data['text']}}
            <section>
               <ul>
                  <li>
                     <a href="{{route('about').'/1'}}">About us</a>
                  </li>
                  <li>
                     <a href="{{route('about').'/2'}}">Who we are</a>
                  </li>
                  <li>
                     <a href="{{route('about').'/3'}}">What we do</a>
                  </li>
               </ul>
            </section>
           </p>
        </main>
@endsection
  @section ('test-footer')
 <p> this is about page footer</p>
  @endsection