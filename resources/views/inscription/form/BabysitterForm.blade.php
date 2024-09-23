

<div class="col-md-5">
    <label for="price" class="form-label">Prix/heure:</label>
    <input type="number" id="price" class="form-control" name="price" step="0.01" value="{{ old('price') }}" required>
</div>

<div class="col-md-5">
    <label for="social_network" class="form-label">Réseau social:</label>
    <input type="url" id="social_network" class="form-control" name="social_network" value="{{ old('social_network') }}" required>
</div>

<div class="col-md-5">
    <label class="form-label">Critères de gardes :</label>
    @foreach($custodies as $custody)
        <div class="form-check">
            <input type="checkbox" id="custody_criteria_{{$custody->id}}" class="form-check-input" name="custody_criterias[]" value="{{$custody->id}}">
            <label for="custody_criteria_{{$custody->id}}" class="form-check-label">{{$custody->custody_criteria}}</label>
        </div>
    @endforeach
</div>
