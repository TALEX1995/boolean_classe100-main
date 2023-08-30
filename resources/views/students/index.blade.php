@extends('layouts.main')

@section('title', 'lista Studenti')

@section('main')
  <div class="container">




    <!-- Delete Message -->
    @include('includes.allerts')

    <div class="d-flex justify-content-end">

      <a class="btn btn-primary mt-3" href="{{ route('students.create') }}">Crea</a>


    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Cognome</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
          <tr>
            <th>{{ $student->name }}</th>
            <td>{{ $student->surname }}</td>
            <td class="d-flex align-items-center justify-content-end gap-2">

              <a class="btn btn-warning" href="{{ route('students.edit', $student) }}">Modifica</a>

              <form action="{{ route('students.destroy', $student) }}" method="POST" id="delete-form">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Elimina</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
