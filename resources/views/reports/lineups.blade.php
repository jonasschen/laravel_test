@extends('templates.index')

@section('content')
    <div>
        <div class="col-12">
            Relatório de partidas disputadas
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Jogador</th>
                    <th>Qt. Escalações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($players as $player)
                <tr>
                    <td>{{ $player->name }} [{{$player->number}}]</td>
                    <td>{{ $player->total }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">Nenhum registro</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection