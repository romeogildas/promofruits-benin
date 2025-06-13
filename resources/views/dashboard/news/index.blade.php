@extends('layouts.dashboard.app')

@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">Actualités Publiées</p>
                                <h4 class="my-1 text-white">{{ $news->count() }}</h4>
                            </div>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-kyoto">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">Actualités Actives</p>
                                <h4 class="my-1 text-white">{{ $news->where('status', 'active')->count() }}</h4>
                            </div>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class="card radius-10">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Les Actualités</h6>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="btn btn-primary" href="{{ route('news.create') }}" role="button" aria-expanded="false">
                            Publier
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Description</th>
                                <th>Statut</th>
                                <th>Date de Publication</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->images) }}" class="product-img-2" alt="news image">
                                </td>
                                <td>{{ Str::limit($item->description, 50) }}</td>
                                <td>
                                    @if($item->status == 'active')
                                        <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Actif</span>
                                    @else
                                        <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</td>
                                <td>
                                    <!-- Modifier l'actualité -->
                                    <a href="{{ route('news.edit', $item->id) }}" title="Modifier">
                                        <i class="bx bx-edit" style="color: #007bff; font-size: 1.8em; margin-right: 10px;"></i>
                                    </a>

                                    <!-- Changer le statut actif/inactif -->
                                    <a href="{{ route('news.toggleStatus', $item->id) }}" title="{{ $item->status == 'active' ? 'Rendre inactive' : 'Rendre active' }}">
                                        @if($item->status == 'active')
                                            <i class="bx bx-hide" style="color: #dc3545; font-size: 1.8em;"></i>
                                        @else
                                            <i class="bx bx-show" style="color: #28a745; font-size: 1.8em;"></i>
                                        @endif
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!--end page wrapper -->

@endsection
