<x-app-layout>
    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <p>Documento: <input type="text" name="document"></p>
        <p>Nombre Completo: <input type="text" name="full_name"></p>
        <p>Especialidad: <input type="text" name="specialty"></p>
        <br><input type="submit" value="Registrar Doctor">
    </form>
</x-app-layout>