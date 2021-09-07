<x-app-layout>
    <form action="{{ route('patients.update', $patient) }}" method="POST">
        @csrf
        @method('put')
        <p>Documento: <input type="text" name="document" value="{{ $patient->document }}"></p>
        <p>Nombre: <input type="text" name="name" value="{{ $patient->name }}"></p>
        <p>Apellidos: <input type="text" name="last_name" value="{{ $patient->last_name }}"></p>
        <p>Sexo:
            <input type="radio" name="gender" value="Hombre" @if($patient->gender === 'Hombre') checked @endif> Hombre
            <input type="radio" name="gender" value="Mujer" @if($patient->gender === 'Mujer') checked @endif> Mujer
        </p>
        <p>Año de nacimiento: <input type="date" name="born_date" min="1900" value="{{ $patient->born_date }}"></p>
        <p>EPS:
        <select name="eps">
            <option value="{{ $patient->eps }}">{{ $patient->eps }}</option>
            @if ($patient->eps != "Salud Total")<option value="Salud Total">Salud Total</option>@endif 
            @if ($patient->eps != "EPS SURA")<option value="EPS SURA">EPS SURA</option>@endif
            @if ($patient->eps != "SANITAS")<option value="SANITAS">SANITAS</option>@endif
            @if ($patient->eps != "Nueva EPS")<option value="Nueva EPS">Nueva EPS</option>@endif
        </select>
        <p>Dirección: <input type="text" name="address" value="{{ $patient->address }}"></p>
        <p>Celular: <input type="text" name="phone" value="{{ $patient->phone }}"></p>
        <p>Correo electrónico: <input type="email" name="email" value="{{ $patient->email }}"></p>
        <p>Ciudad: <input type="text" name="city" value="{{ $patient->city }}"></p>
    
        <p>Asignar Médico:
        <select name="doctor_id">
            @foreach ($doctors as $doctor)
                <option value="{{ $doctor->id }}" @if($doctor->id === $patient->doctor->id) selected @endif>{{ $doctor->full_name }}</option>
            @endforeach
        </select>
    
        <p>Asignar Enfermera:
        <select name="nurse_id">
            @foreach ($nurses as $nurse)
                <option value="{{ $nurse->id }}" @if($nurse->id === $patient->nurse->id) selected @endif>{{ $nurse->full_name }}</option>
            @endforeach
        </select>
    
        <input type="submit" value="Registrar">
    
    </form>
</x-app-layout>