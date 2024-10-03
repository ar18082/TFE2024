@php
    $name ??= '';
@endphp
<div class="col-md-12 row" id="contentFormChild_{{$name}}">
    <div class="col-md-4">
        <label for="child_name_{{$name}}" class="form-label">Nom:</label>
        <input type="text" id="child_name_{{$name}}"  class="form-control" name="child_name_{{$name}}" value="" required>
    </div>
    <div class="col-md-4">
        <label for="child_firstname_{{$name}}" class="form-label">Prénom:</label>
        <input type="text" id="child_firstname_{{$name}}" class="form-control" name="child_firstname_{{$name}}" value="" required>
    </div>
    <div class="col-md-4">
        <label for="child_birth_{{$name}}" class="form-label">Date de naissance :</label>
        <input type="text" id="child_birth_{{$name}}" class="form-control" name="child_birth_{{$name}}" value="" required>
    </div>
</div>



