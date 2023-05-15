@extends('layouts.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>Liste des clients</h1>
                <hr>
                <a href="/create" class="btn btn-primary">Nouveau</a>
                <hr>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom(s)</th>
                            <th>Numéro</th>
                            <th>Adresse</th>
                            <th>Mot de passe</th>
                            <th>E-mail</th>
                            <th>création du compte</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach($clients as $utilisateur)
                        <tr>
                            <td>{{ $ide }}</td>
                            <td>{{ $utilisateur->nom_client }}</td>
                            <td>{{ $utilisateur->prenom_client }}</td>
                            <td>{{ $utilisateur->numero_client }}</td>
                            <td>{{ $utilisateur->adresse_client }}</td>
                            <td>{{ $utilisateur->MDP_client }}</td>
                            <td>{{ $utilisateur->mail_client }}</td>
                            <td>{{ $utilisateur->Datecreacompte_client }}</td>
                            <td>
                                <a href="/edit/{{ $utilisateur->id }}" class="btn btn-info">Modifier</a>
                                <a href="/delete/{{ $utilisateur->id }}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        @php
                            $ide+=1;
                        @endphp
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    
@endsection