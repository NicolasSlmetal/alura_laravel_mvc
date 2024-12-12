<x-layout title={{$title}}>
    <a class="btn btn-info text-white" href="/animes/create">Adicionar Anime</a>
    <ul class="list-group">
    @foreach ($animes as $anime)
        <li class="list-group-item">{{ $anime->getTitle() }}</li>
    @endforeach
</x-layout>
