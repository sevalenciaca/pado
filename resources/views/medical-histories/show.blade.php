<x-app-layout>

    <h3 class="text-xl font-bold text-uppercase">HISTORIA CLÍNICA DEL PACIENTE {{ $patient->name }} {{ $patient->last_name }} @if ($patient->gender == 'Hombre') IDENTIFICADO @else IDENTIFICADA @endif {{ $patient->document }} </h3>

    <table>
        <thead>
            <h3>Historia Medica</h3>
        </thead>
        <tbody>
            <tr><td>Historia Medica</td><td>{{ $patient->medical_history->care_suggestion }}</td></tr>
        </tbody>
    </table>

    <a href="{{ URL::previous() }}">Volver</a>

</x-app-layout>