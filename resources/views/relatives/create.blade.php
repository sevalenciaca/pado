<x-app-layout>
    <form action="{{ route('relatives.store') }}" method="POST">
        @csrf
        <p>Documento: <input type="text" name="document"></p>
        <p>Nombre Completo: <input type="text" name="full_name"></p>
        <p>Dirección: <input type="text" name="address" ></p>
        <p>Celular: <input type="text" name="phone" ></p>
        <p>Correo electrónico: <input type="email" name="email" ></p>
        <p>Ciudad: <input type="text" name="city" ></p>
        <br><input type="submit" value="Registrar">
    </form>
</x-app-layout>