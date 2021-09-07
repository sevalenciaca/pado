<x-app-layout>
    <table>
        <thead>
            <h3 class="text-xl font-bold">Datos del Doctor</h3>
        </thead>
        <tbody>
            <tr><td>Documento</td><td>{{ $doctor->document }}</td></tr>
            <tr><td>Nombre</td><td>{{ $doctor->full_name }}</td></tr>
            <tr><td>Especialidad</td><td>{{ $doctor->specialty}}</td></tr>
        </tbody>
    </table>
    <h3>Pacientes Asignados</h3>
    <ul>
        @foreach ($patients as $patient)
            <li><a href="{{ route('patients.show', $patient) }}">{{ $patient->name }} {{ $patient->last_name }}</a></li>
        @endforeach
    </ul>

    <a href="{{ URL::previous() }}">Volver</a>
    <a href="{{ route('doctors.edit', $doctor) }}">Editar Doctor</a>
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