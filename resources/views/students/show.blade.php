@extends('layouts.app')

@section('page-title', "Scheda Studente")

@section('content')
    <h1>Scheda Studente</h1>
    <p>Nome: {{$student->first_name}}</p>
    <p>Cognome: {{$student->last_name}}</p>
    <p>Email: {{$student->email}}</p>
    <p>Matricola: {{$student->student_id}}</p>
@endsection
