<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="text-center">AJOUTER UN ETUDIANT-LARAVEL 10</h1>
                <hr>
                <div class="text-center">
                    <a href="/list" class="btn btn-primary ">Voir la liste des étudiants</a>
                </div>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    
                @endif
                
                <ul>
                    @foreach ($errors->all() as $error )
                        <li class="alert alert-danger">{{$error}}</li>
                    
                    @endforeach
                </ul>
               
                <form action="/ajouter/traitement" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nom</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Prénom</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputClass" class="form-label">Class</label>
                        <input type="text" class="form-control" id="exampleInputClass" name="classe">
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                  </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>