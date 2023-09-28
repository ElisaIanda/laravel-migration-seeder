@extends('layouts.public')
@section('content')
    <div class="container">
        <h1 class="m-5 text-center text-white">Treni in Partenza</h1>
        <table class="w-100 text-center">
            <thead>
                <tr>
                    <th class="col">Azienda</th>
                    <th class="col">Stazione di Partenza</th>
                    <th class="col">Stazione di Arrivo</th>
                    <th class="col">Orario di Partenza</th>
                    <th class="col">Orario di Arrivo</th>
                    <th class="col">Codice Treno</th>
                    <th class="col">Numero Carrozze</th>
                    <th class="col">In Orario</th>
                    <th class="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $singleTrain)
                    <tr>
                        <td class="color-1">{{ $singleTrain->azienda }}</td>
                        <td class="color-2">{{ $singleTrain->stazione_di_partenza }}</td>
                        <td class="color-1">{{ $singleTrain->stazione_di_arrivo }}</td>
                        <td class="color-2">{{ $singleTrain->orario_di_partenza }}</td>
                        <td class="color-1">{{ $singleTrain->orario_di_arrivo }}</td>
                        <td class="color-2">{{ $singleTrain->codice_treno }}</td>
                        <td class="color-1">{{ $singleTrain->numero_carrozze }}</td>
                        <td class="color-2">{{ $singleTrain->in_orario ? 'Sì' : 'No' }}</td>
                        <td class="color-1">{{ $singleTrain->cancellato ? 'Sì' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
