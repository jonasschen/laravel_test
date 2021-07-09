@extends('templates.index')

@section('content')
    <div>
        <div class="col-12">
            Relatório de partidas disputadas
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Adversário</th>
                    <th>Escalação</th>
                </tr>
            </thead>
            <tbody>
                @forelse($matches as $match)
                <tr>
                    <td>{{ $match->started_at }}</td>
                    <td>{{ $match->opposing_team }}</td>
                    <td>
                        @foreach ($match->matchPlayers as $matchPlayer)
                            {{$matchPlayer->player->name}} [{{$matchPlayer->player->number}}] <br>
                        @endforeach
                    </td>
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