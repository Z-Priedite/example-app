@extends('layouts.main')
@section('title')
Home
@endsection

<body>
  @section('content')
  <section>

    @if (session('message'))
    <div class="alert alert-success">

      <div class="done">
        {{ session('message') }}
      </div>
    </div>
    @endif
    <div>
      <h1>DIGITAL</h1>
      <h2>MARKETING</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing.
        Vestibulum rutrum metus at enim congue scelerisque.
        Sed suscipit metu non iaculis semper consectetur adipiscing elit.</p>
      <a class="btn" href="">LEARN MORE</a>
    </div>

    <div>
      <img class="image" src="img/illustration (1).jpg" alt="Fona bilde">
    </div>
  </section>
  @endsection
</body>

</html>