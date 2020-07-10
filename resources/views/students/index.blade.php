@extends("layouts.app")

@section('page-title', "Studenti")

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Elenco Studenti</h1>
        <a class="btn btn-primary" href="{{ route("studenti.create") }}">Aggiungi Studente</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Matricola</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Email</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route("studenti.show", ["studenti" => $student->id]) }}">Scheda studente</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
