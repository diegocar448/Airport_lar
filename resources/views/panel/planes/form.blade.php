{!! csrf_field() !!}
<div class="form-group">
    <label for="qty_passengers">Quantidade de passageiros</label>
    @if($plane == null)
        <input type="number" value="{{ old('qty_passengers' ?? '')}}" name="qty_passengers" placeholder="Qtd passageiros" class="form-control">
    @else
        <input type="number" value="{{ $plane->qty_passengers ?? old('qty_passengers' ?? '')}}" name="qty_passengers" placeholder="Qtd passageiros" class="form-control">
    @endif
</div>
<div class="form-group">
    <label for="class">Classe</label>
   
    <select class="form-control" name="class" id="">
        @foreach($classes as $classe)        
            <option
            @if($plane != null)             
                @if($classe == "Economica" && $plane->class == "economic")
                    selected="selected"            
                @elseif($classe == "Luxo" && $plane->class == "luxury")
                    selected="selected"
                @endif            
            @endif            
            value="@if($classe == "Economica"){{'economic'}}@elseif($classe == "Luxo"){{'luxury'}}@endif"            
            >{{$classe}}</option>      
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="brand_id">Marca</label>
    <select class="form-control" name="brand_id" id="">
        @foreach($brands as $brand)
            <option value="{{$brand->id}}"
            @if($plane != null)    
                @if($brand->id == $plane->brand_id)
                    selected="selected"
                @endif
            @endif
            >{{$brand->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button class="btn btn-search">Enviar</button>
</div>