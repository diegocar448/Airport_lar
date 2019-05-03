{!! csrf_field() !!}
<div class="form-group">
    <input type="number" value="{{old('qty_passengers')}}" name="qty_passengers" placeholder="Qtd passageiros" class="form-control">
</div>
<div class="form-group">
    <select class="form-control" name="class" id="">
        @foreach($classes as $classe)
            <option value="{{$classe}}">{{$classe}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
        <select class="form-control" name="brand_id" id="">
            @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        </select>
    </div>

<div class="form-group">
    <button class="btn btn-search">Enviar</button>
</div>