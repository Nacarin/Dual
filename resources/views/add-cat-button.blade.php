<form action="{{ url('/cats/add') }}" method="get">
    @csrf
    <button type="submit" class="add-cat-button">Añadir Gato</button>
</form>
