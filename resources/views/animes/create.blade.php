<x-layout title="Novo Anime">

    <a class="btn btn-info text-white" href="/animes">Voltar</a>
        <form action="/animes" method="POST">
            @csrf
            <div class="mb-3 flex">
                <label class="form-label" for="title">Nome</label>
                <input class="form-control" type="text" id="title" name="title">
                <label class="form-label" for="description">Descrição</label>
                <input class="form-control" type="text" id="description" name="description">
                <label class="form-label" for="episodesNumber">N de episodios</label>
                <input class="form-control" type="number" min="1" id="episodesNumber" name="episodesNumber">
                <label class="form-label" for="launchDate">Data de lançamento</label>
                <input class="form-control" type="date" id="launchDate" name="launchDate">
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>

</x-layout>
