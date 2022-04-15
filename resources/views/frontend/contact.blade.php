@extends ('layout')
@section ('content')
        <main>
         <form action="">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text"name="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text"name="email" >
            </div>
            <div class="form-group">
                <label for="">Subject</label>
                <input name="subject">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea name="message" ></textarea>
            </div>
            <div class="form-group">
                <button>Send</button>
            </div>
         </form>
        </main>
@endsection
  @section ('test-footer')
 <p> this is contact page footer</p>
  @endsection