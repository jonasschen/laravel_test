@push('styles')
    <style>
        .field-name{
            text-align: right;
        }

        .field{
            padding: 10px;
        }
    </style>
@endpush

<div class="row field">
    <div class="col-xs-3 field-name">
        Adservário:
    </div>
    <div class="col-xs-6 input">
        <input type="text" name="opposing_team" id="opposing_team" value="{{ old('opposing_team', !empty($match) ? $match->opposing_team : null) }}" />
    </div>

    @error('opposing_team')
    <div class="row">
        <span class="col-xs-offset-3 col-xs-9 text-danger">{{ $message }}</span>
    </div>
    @enderror
</div>

<div class="row field">
    <div class="col-xs-3 field-name">
        Escalação:
    </div>
    <div class="col-xs-6 input">
        <select class="select" multiple name="lineup[]" id="lineup">
            @foreach ($players as $player)
                @php
                    $selected = false;
                    if (isset($match)){
                        if ($match->matchPlayers()->wherePlayerId($player->id)->count()){
                            $selected = true;
                        }
                    }
                @endphp
                <option {{($selected?'selected':'')}} value="{{$player->id}}">{{$player->name}} [{{$player->number}}]</option>
            @endforeach
          </select>
    </div>

    @error('lineup')
    <div class="row">
        <span class="col-xs-offset-3 col-xs-9 text-danger">{{ $message }}</span>
    </div>
    @enderror
</div>

