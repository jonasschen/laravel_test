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
        Nome:
    </div>
    <div class="col-xs-6 input">
        <input type="text" name="name" id="name" value="{{ old('name', !empty($player) ? $player->name : null) }}" />
    </div>

    @error('name')
    <div class="row">
        <span class="col-xs-offset-3 col-xs-9 text-danger">{{ $message }}</span>
    </div>
    @enderror
</div>

<div class="row field">
    <div class="col-xs-3 field-name">
        Número:
    </div>
    <div class="col-xs-6 input">
        <input type="number" name="number" id="number" value="{{ old('number', !empty($player) ? $player->number : null) }}" />
    </div>

    @error('number')
    <div class="row">
        <span class="col-xs-offset-3 col-xs-9 text-danger">{{ $message }}</span>
    </div>
    @enderror
</div>

<div class="row field">
    <div class="col-xs-3 field-name">
        Posição:
    </div>

    <div class="col-xs-6 input">
        <input type="text" name="position" id="position" value="{{ old('position', !empty($player) ? $player->position : null) }}" />
    </div>

    @error('position')
    <div class="row">
        <span class="col-xs-offset-3 col-xs-9 text-danger">{{ $message }}</span>
    </div>
    @enderror
</div>
