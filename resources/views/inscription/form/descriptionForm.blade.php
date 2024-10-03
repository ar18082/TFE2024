@php
    $name ??= '';
@endphp


    <h3 class="h6">Description {{$name}}</h3>
    <textarea id="description_{{$name}}" class="form-control" rows="3" name="description_{{$name}}" required>{{ old('description') }}</textarea>

