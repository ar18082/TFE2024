@php
    $name ??= '';
@endphp

<div class="col-md-5">
    <label for="description_{{$name}}" class="form-label">Description {{$name}}:</label>
    <textarea id="description_{{$name}}" class="form-control" name="description_{{$name}}" required>{{ old('description') }}</textarea>
</div>
