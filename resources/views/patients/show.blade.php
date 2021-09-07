<x-app-layout>
    <table>
        <thead>
            <h3 class="text-xl font-bold">Datos Personales del Paciente</h3>
        </thead>
        <tbody>
            <tr><td>Documento</td><td>{{ $patient->document }}</td></tr>
            <tr><td>Nombre</td><td>{{ $patient->name }}</td></tr>
            <tr><td>Apellido</td><td>{{ $patient->last_name }}</td></tr>
            <tr><td>Genero</td><td>{{ $patient->gender }}</td></tr>
            <tr><td>Fecha de Nacimiento</td><td>{{ $patient->born_date }}</td></tr>
            <tr><td>EPS</td><td>{{ $patient->eps }}</td></tr>
            <tr><td>Direccion</td><td>{{ $patient->address }}</td></tr>
            <tr><td>Celular</td><td>{{ $patient->phone }}</td></tr>
            <tr><td>Correo Electrónico</td><td>{{ $patient->email }}</td></tr>
            <tr><td>Ciudad</td><td>{{ $patient->city }}</td></tr>
        </tbody>
    </table>
    <table>
        <thead>
            <h3>Personal Médico Asignado</h3>
        </thead>
        <tbody>
            <tr><td>Doctor</td><td>{{ $patient->doctor->full_name }}</td></tr>
            <tr><td>Enfermer@</td><td>{{ $patient->nurse->full_name }}</td></tr>
        </tbody>
    </table> 
    <br>
    @isset($patient->relative->full_name)
        <table>
            <thead>
                <h3>Familiar Asignado</h3>
            </thead>
            <tbody>
                <tr><td>Parentesco</td><td>{{ $patient->kinship }}</td></tr>
                <tr><td>Documento</td><td>{{ $patient->relative->document }}</td></tr>
                <tr><td>Nombre</td><td>{{ $patient->relative->full_name }}</td></tr>
                <tr><td>Celular</td><td>{{ $patient->relative->phone }}</td></tr>
                <tr><td>Correo Electronico</td><td>{{ $patient->relative->email }}</td></tr>
                <tr><td>Direccion</td><td>{{ $patient->relative->address }}</td></tr>
                <tr><td>Ciudad</td><td>{{ $patient->relative->city }}</td></tr>
            </tbody>
        </table>
    @else
        <p style="color: red">Sin familiar asignado</p>
    @endisset

    <a href="{{ URL::previous() }}">Volver</a>
    <a href="{{ route('patients.edit', $patient) }}">Editar Paciente</a>
    {{-- <table>
        <thead>
            <h3>Diagnostico del Paciente</h3>
        </thead>
        <tbody>
            <tr><td>Diagnostico</td><td>{{ $patient->diagnostic->name }} ({{ $patient->diagnostic->code }})</td></tr>
        </tbody>
    </table> --}}
    {{-- <table>
        <thead>
            <h3>Historia Medica</h3>
        </thead>
        <tbody>
            <tr><td>Historia Medica</td><td>{{ $medical_history->care_suggestion }}</td></tr>
        </tbody>
    </table> --}}
    {{-- <table>
        <thead>
            <h3>Signos Vitales Actuales</h3>
        </thead>
        <tbody>
            <tr><td>Oximetria</td><td>{{ $vital_sign_actually->oximetry }}</td></tr>
            <tr><td>Frecuencia Respiratoria</td><td>{{ $vital_sign_actually->respiratory_rate }}</td></tr>
            <tr><td>Frecuencia Cardiaca</td><td>{{ $vital_sign_actually->heart_rate }}</td></tr>
            <tr><td>Temperatura</td><td>{{ $vital_sign_actually->temperature}}</td></tr>
            <tr><td>Glisemia</td><td>{{ $vital_sign_actually->glysemia }}</td></tr>
            <tr><td>Fecha de Registro</td><td>{{ $vital_sign_actually->register_date}}</td></tr>
        </tbody>
    </table> --}}
    {{-- <h3>Signos Vitales</h3>
    <table>
        <thead>
            <tr>
                <th>Oximetria</th>
                <th>Frecuencia Respiratoria</th>
                <th>Frecuencia Cardiaca</th>
                <th>Temperatura</th>
                <th>Glisemia</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vital_signs as $vital_sign)
                <tr>
                    <td>{{ $vital_sign->oximetry }}</td>
                    <td>{{ $vital_sign->respiratory_rate }}</td>
                    <td>{{ $vital_sign->heart_rate }}</td>
                    <td>{{ $vital_sign->temperature }}</td>
                    <td>{{ $vital_sign->glysemia }}</td>
                    <td>{{ $vital_sign->register_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
</x-app-layout>