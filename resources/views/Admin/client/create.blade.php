@extends('layouts.Admin')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Ajouter un nouveau client</h1>
                <hr>

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>

                <form class="form-group" method="POST" action="/create/traitement">
                    @csrf
                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="Prenom" class="form-label">Prénom(s)</label>
                        <input type="text" class="form-control" id="prenom"name="prenom">
                        
                    </div>
                    <div class="mb-3">
                        <label for="Numero" class="form-label">Numéro</label>
                        <input type="Number" class="form-control" id="numero" name="numero">
                        
                    </div>
                    <div class="mb-3">
                        <label for="Adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse">
                        
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="mdp">
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mail" name="mail">
                        
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date de création du compte</label>
                        <input type="date" class="form-control" id="date" name="date">
                        
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>

                    
                    <a href="/index" class="btn btn-danger">Retour</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
@endsection