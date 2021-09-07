<x-app-layout>
    <form action="{{ route('doctors.update', $doctor) }}" method="POST">
        @csrf
        @method('put')
        <p>Documento: <input type="text" name="document" value="{{ $doctor->document }}"></p>
        <p>Nombre Completo: <input type="text" name="full_name" value="{{ $doctor->full_name }}"></p>
        <p>Especialidad: <input type="text" name="specialty" value="{{ $doctor->specialty }}"></p>
        <br><input type="submit" value="Actualizar Doctor">
    </form>
</x-app-layout>