@extends('layouts.app')

@section('page-title',"Aggiungi studente")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi studente</h1>
                <form class="" action=" {{ route("studenti.store") }} " method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="first_name" class="form-control" id="nome" placeholder="Inserisci il nome">
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="last_name" class="form-control" id="cognome" placeholder="Inserisci il cognome">
                    </div>
                    <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="text" name="student_id" class="form-control" id="matricola" placeholder="Inserisci la matricola di 6 lettere/numeri">
                    </div>
                    <div>
                        <label for="email">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Inserisci l'email">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection
