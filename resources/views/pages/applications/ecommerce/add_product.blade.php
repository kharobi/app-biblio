@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container mt-4 mb-4">
    <h2 class="text-dark">Ajouter un nouveau document</h2>
    <form action="{{ route('ecommerce.store_product','en') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label text-dark">Titre</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label text-dark">Contenu (Résumé)</label>
            <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label text-dark">Auteur</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label text-dark">Type</label>
            <select class="form-control" id="type" name="type" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->libelle_type }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label text-dark">Image du couvert</label>
            <input type="file" class="form-control" id="cover_image" name="cover_image" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="document_file" class="form-label text-dark">Fichier PDF</label>
            <input type="file" class="form-control" id="document_file" name="document_file" accept=".pdf" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter le document</button>
    </form>
</div>
@endsection