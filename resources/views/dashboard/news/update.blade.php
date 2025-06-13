@extends('layouts.dashboard.app')

@section('content')

<div class="page-wrapper">
    <div class="page-content mb-5">

        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Accueil</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Opportunités</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('opportunity.index') }}" class="btn btn-primary mb-3 mb-lg-0"> Retour </a>
                </div>
            </div>
        </div>
        <!-- Fin Breadcrumb -->

        @if (session('success'))
            <div class="alert alert-success" id="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Modifier l'opportunité'</h5>
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

                        <form class="row g-3" method="POST" action="{{ route('opportunity.update', $opportunity->id) }}" enctype="multipart/form-data" id="opportunityForm">
                            @csrf
                            @method('PUT')

                            <!-- Titre -->
                            <div class="col-md-12 mb-3">
                                <label for="bsValidation3" class="form-label">Titre</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="bsValidation3" name="title" value="{{ old('title', $opportunity->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image (choisir un fichier) -->
                            <div class="col-md-6 mb-3">
                                <label for="bsValidation1" class="form-label">Image</label>
                                <input type="file" class="form-control @error('images') is-invalid @enderror" id="bsValidation1" name="images" accept="image/*">
                                @error('images')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Date -->
                            <div class="col-md-6 mb-3">
                                <label for="opportunityDate" class="form-label">Date de démarrage</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror" id="opportunityDate" name="date" value="{{ old('date', $opportunity->date) }}" required>
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status (visible/masqué) -->
                            <div class="col-md-6 mb-3">
                                <label for="opportunityStatus" class="form-label">Statut</label>
                                <select class="form-select @error('status') is-invalid @enderror" id="opportunityStatus" name="status" required>
                                    <option value="visible" {{ old('status', $opportunity->status) == 'visible' ? 'selected' : '' }}>Visible</option>
                                    <option value="masqué" {{ old('status', $opportunity->status) == 'masqué' ? 'selected' : '' }}>Masqué</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-md-12 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="bsValidation13" name="description" rows="3" required>{{ old('description', $opportunity->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

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

@endsection
