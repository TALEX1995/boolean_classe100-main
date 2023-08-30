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

              <form action="{{ route('students.destroy', $student) }}" method="POST" class="delete-form"
                data-bs-toggle="modal" data-bs-target="#deleteModal" data-name="{{ $student->name }}">

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


  <!-- Modale -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Eliminazione Studente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sei sicuro di voler modificare lo studente?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non eliminare</button>
          <button type="button" class="btn btn-danger" id="deleteButton">Elimina</button>
        </div>
      </div>
    </div>
  </div>
  @vite('resources/js/delete-confirm.js')
@endsection
