@extends('templates.index')

@section('content')
    <div>
        <div class="col-12">
            <a href="{{ route('players.create') }}">
                + Incluir
            </a>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Nome</th>
                    <th>Número</th>
                    <th>Posição</th>
                </tr>
            </thead>
            <tbody>
                @forelse($players as $player)
                <tr>
                    <td>
                        <div>
                            <a href="{{ route('players.edit', $player->id) }}">Editar</a>
                            &nbsp;&nbsp;
                            <a href="#" data-toggle="modal" data-target="#modal-destroy" data-url="{{ route('players.destroy', $player->id) }}">
                                Excluir
                            </a>
                        </div>
                    </td>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->number }}</td>
                    <td>{{ $player->position }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">Nenhum registro</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @include('templates.destroy')
@endsection