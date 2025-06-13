@extends('layouts.dashboard.app')

@section('content')

<div class="page-wrapper">
    <div class="page-content mb-5">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Accueil</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Actualités</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('news.index') }}" class="btn btn-primary mb-3 mb-lg-0"> Retour </a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        @if (session('success'))
            <div class="alert alert-success" id="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Publier une actualité</h5>
                    </div>
                    <div class="card-body">
                        <!-- Afficher les erreurs -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="row g-3" method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data" id="newsForm">
                            @csrf

                            <!-- Titre -->
                            <div class="col-md-12 mb-3">
                                <label for="newsTitle" class="form-label">Titre</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="newsTitle" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image -->
                            <div class="col-md-6 mb-3">
                                <label for="newsImage" class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="newsImage" name="image" accept="image/*" required>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Mots-clés -->
                            <div class="col-md-6 mb-3">
                                <label for="newsKeywords" class="form-label">Mots-clés</label>
                                <input type="text" class="form-control @error('keywords') is-invalid @enderror" id="newsKeywords" name="keywords" placeholder="Exemple : agriculture, durabilité" value="{{ old('keywords') }}" required>
                                @error('keywords')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description avec éditeur WYSIWYG -->
                            <div class="col-md-12 mb-3">
                                <label for="newsDescription" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="newsDescription" name="description" rows="4" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Statut (par défaut Actif) -->
                            <input type="hidden" name="status" value="active">

                            <!-- Bouton d'enregistrement -->
                            <div class="col-md-12 text-end">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<textarea id="newsDescription"></textarea>
<script>
    var simplemde = new SimpleMDE({
        element: document.getElementById("newsDescription"),
        toolbar: [
            "bold",      
            "italic",    
            {
                name: "underline",
                action: function customUnderline(editor) {
                    const cm = editor.codemirror;
                    const selection = cm.getSelection();
                    cm.replaceSelection(`_<u>${selection}</u>_`);
                },
                className: "fa fa-underline",
                title: "Souligné"
            },            
            "unordered-list",  
            "ordered-list",    
            "quote"      
        ],
        placeholder: "Saisissez votre texte ici...",
        status: ["lines", "words"],
        language: 'fr',
        renderingConfig: {
            singleLineBreaks: true,
        }
    });

    document.getElementById('newsDescription').style.height = '30px';
</script> -->



@endsection
