@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Bienvenue Willy</h3>
                    <h4>Voici quelques explications de ce que nous avons fait</h4>
                </div>

                <div class="panel-body">
                    <p>Chaque visiteur peut voir les articles ainsi que leurs commentaires, et nous contacter.</p>
                    <p>Lorqu'un utilisateur est connecté, il peut créer un article, commenter des articles, et nous soumettre un projet de BAP, il peut les modifier et les supprimer.
                        <br>
                        Dans la rubiqrue "Mon Profil", il peut ensuite voir ses informations et les modifier. Il peut aussi supprimer son compte.
                        <br>
                        Il a aussi une liste de tous les articles créés et projets soumis (il peut voir leurs statuts), qu'il peut modifier et supprimer.
                    </p>
                    <p>Lorqu'un un utilisteur est administrateur, il peut modifier et supprimer tous les articles et commentaires, en revanche il ne peut pas modifier les projets des autres utilisateurs.
                        <br>
                        De plus il a accès à la liste de tous les projets soumis par les autres utilisateurs, où il peut décider d'accepter ou de refuser chaque projet.
                        <br>
                        Il a de même la liste de tous les utilisateurs, où il peut les supprimer et les gérer leurs droits (administrateur ou non).
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
