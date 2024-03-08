<main>
    <div class="container">
        <h1>Viajes Disponibles</h1>

        @if($viajes->isEmpty())
            <p>No hay viajes disponibles para la selección actual.</p>
        @else
            <ul>
                @foreach($viajes as $viaje)
                    <li>
                        <strong>Origen:</strong> {{ $viaje->origen }}<br>
                        <strong>Destino:</strong> {{ $viaje->destino }}<br>
                        <strong>Fecha de Salida:</strong> {{ $viaje->departure_date }}<br>
                        @if($viaje->return_date)
                            <strong>Fecha de Regreso:</strong> {{ $viaje->return_date }}<br>
                        @endif
                        <strong>Sillas Disponibles:</strong> {{ $viaje->seats_remain }}<br>
                        <!-- Puedes agregar más detalles según tu estructura de datos -->
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</main>