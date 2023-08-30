{{-- Layout --}}

@extends('layouts.main')

{{-- Title --}}
@section('title', 'Create')

{{-- Main --}}
@section('main')
  <div class="container">
    @if ($errors->any())
      <div class="alert alert-danger mt-3">
        <ul>
          @foreach ($errors->all() as $e)
            <li>{{ $e }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <h1 class="text-center my-4">Crea un nuovo Studente</h1>

    <form action="{{ route('students.store') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label for="name" class="form-label">Nome Studente</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="surname" class="form-label">Cognome Studente</label>
            <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname') }}">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3 text-end">
            <button type="reset" class="btn btn-warning me-2">Reset</button>
            <button type="submit" class="btn btn-success">Aggiungi</button>
          </div>
        </div>
      </div>
    </form>
  </div>

@endsection
