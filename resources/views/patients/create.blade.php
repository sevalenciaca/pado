<x-app-layout>
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <p>Documento: <input type="text" name="document"></p>
        <p>Nombre: <input type="text" name="name"></p>
        <p>Apellidos: <input type="text" name="last_name"></p>
        <p>Sexo:
            <input type="radio" name="gender" value="Hombre"> Hombre
            <input type="radio" name="gender" value="Mujer"> Mujer
        </p>
        <p>Año de nacimiento: <input type="date" name="born_date" min="1900"></p>
        <p>EPS:
        <select name="eps">
            <option value="Salud Total">Salud Total</option>
            <option value="EPS SURA">EPS SURA</option>
            <option value="SANITAS">SANITAS</option>
            <option value="Nueva EPS">Nueva EPS</option>
        </select>
        <p>Dirección: <input type="text" name="address" ></p>
        <p>Celular: <input type="text" name="phone" ></p>
        <p>Correo electrónico: <input type="email" name="email" ></p>
        <p>Ciudad: <input type="text" name="city" ></p>
    
        <p>Asignar Médico:
        <select title="Seleccione el Doctor" name="doctor_id">
            @foreach ($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->full_name }}</option>
            @endforeach
        </select>
    
        <p>Asignar Enfermera:
        <select title="Seleccione el/la enfermer@" name="nurse_id">
            @foreach ($nurses as $nurse)
                <option value="{{ $nurse->id }}">{{ $nurse->full_name }}</option>
            @endforeach
        </select>
        <br><input type="submit" value="Registrar">
    </form>
</x-app-layout>