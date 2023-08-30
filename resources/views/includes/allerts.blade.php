@if (session('type'))
  <div class="alert alert-{{ session('alert') }} mt-5">
    {{ session('message') }}
  </div>
@endif
