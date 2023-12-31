@extends('layouts.main')

@section('title', 'modifica studente')


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
    <div class="row">
      <form action="{{ route('students.update', $student) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome Studente</label>
          <input type="text" class="form-control" id="name" placeholder="nome" name="name"
            value="{{ $student->name }}">
        </div>
        <div class="mb-3">
          <label for="surname" class="form-label">Cognome Studente</label>
          <input type="text" class="form-control" id="surname" placeholder="cognome" name="surname"
            value="{{ $student->surname }}">
        </div>
        <button class="btn btn-primary">Invio</button>
      </form>
    </div>
  </div>

@endsection
