<x-layout title="Nova Série">
    
    <form action="{{ route('series.store') }}" method="post" >
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>