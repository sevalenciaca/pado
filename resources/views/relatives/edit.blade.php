<x-app-layout>
    <form action="{{ route('relatives.update', $relative) }}" method="POST">
        @csrf
        @method('put')
        <p>Documento: <input type="text" name="document" value="{{ $relative->document }}"></p>
        <p>Nombre Completo: <input type="text" name="full_name"value="{{ $relative->full_name }}"></p>
        <p>Dirección: <input type="text" name="address" value="{{ $relative->address }}"></p>
        <p>Celular: <input type="text" name="phone" value="{{ $relative->phone }}"></p>
        <p>Correo electrónico: <input type="email" name="email" value="{{ $relative->email }}"></p>
        <p>Ciudad: <input type="text" name="city" value="{{ $relative->city }}"></p>
        <br><input type="submit" value="Registrar">
    </form>
</x-app-layout>