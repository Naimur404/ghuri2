@php
    use Illuminate\Support\Arr;
@endphp

<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
    @if(isset($field['data']) && $field['data'] === "image")
        <p><img src="{{ asset('uploads/' . \setting($field['name'])) }}" width="100px" alt="img"></p>
    @endif
    <textarea name="{{ $field['name'] }}"
              class="form-control {{ Arr::get($field, 'class', '') }}"
              id="{{ $field['name'] }}"
              rows="3"
              placeholder="{{ $field['label'] }}">{{ old($field['name'], \setting($field['name'])) }}</textarea>
    @if ($errors->has($field['name']))
        <small class="help-block">{{ $errors->first($field['name']) }}</small>
    @endif
</div>
