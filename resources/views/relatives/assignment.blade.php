<x-app-layout>
    <form action="{{ route('relatives.assign', $relative) }}" method="POST">
        @csrf
        Ingrese el documento de identificación del paciente:<br>
        <input type="text" name="document"><br>
        <input type="submit" value="Registrar">
    </form>
</x-app-layout>