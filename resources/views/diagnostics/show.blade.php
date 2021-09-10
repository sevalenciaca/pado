<x-app-layout>

    <h3 class="text-xl font-bold text-uppercase">DIAGNOSTICO DEL PACIENTE {{ $patient->name }} {{ $patient->last_name }} @if ($patient->gender == 'Hombre') IDENTIFICADO @else IDENTIFICADA @endif {{ $patient->document }} </h3>

    <table>
        <thead>
            <h3>Diagnostico del Paciente</h3>
        </thead>
        <tbody>
            <tr><td>Diagnostico</td><td>{{ $patient->diagnostic->name }} ({{ $patient->diagnostic->code }})</td></tr>
        </tbody>
    </table>

    <a href="{{ URL::previous() }}">Volver</a>
</x-app-layout>