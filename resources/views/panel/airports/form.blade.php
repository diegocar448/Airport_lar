
{{-- <div class="form-group">
    <label for="city_id">Escolha a Cidade</label>
    <select class="form-control" name="city_id" id="">
        <option value="">Selecione uma Cidade</option>
        @foreach($cities as $ci)        
            <option
            @if($city != null)             
                @if($ci->id == Request::segment(3))
                    selected="selected"                
                @endif            
            @endif            
            value="{{$ci->id}}"            
            >{{$ci->name}}</option>      
        @endforeach
    </select>
</div> --}}

<div class="form-group">
    <label for="name">Nome</label>
    @if($airport == null)
        <input type="text" value="{{ old('name' ?? '')}}" name="name" class="form-control">
    @else
        <input type="text" value="{{ $airport->name ?? old('name' ?? '')}}" name="name" class="form-control">
    @endif
</div>

<div class="form-group">
    <label for="latitude">Latitude</label>
    @if($airport == null)
        <input type="text" value="{{ old('latitude' ?? '')}}" name="latitude" class="form-control">
    @else
        <input type="text" value="{{ $airport->latitude ?? old('latitude' ?? '')}}" name="latitude" class="form-control">
    @endif
</div>

<div class="form-group">
    <label for="longitude">Longitude</label>
    @if($airport == null)
        <input type="text" value="{{ old('longitude' ?? '')}}" name="longitude" class="form-control">
    @else
        <input type="text" value="{{ $airport->longitude ?? old('longitude' ?? '')}}" name="longitude" class="form-control">
    @endif
</div>

<div class="form-group">
    <label for="address">Endereço</label>
    @if($airport == null)
        <input type="text" value="{{ old('address' ?? '')}}" name="address" class="form-control">
    @else
        <input type="text" value="{{ $airport->address ?? old('date' ?? '')}}" name="address" class="form-control">
    @endif
</div>

<div class="form-group">
    <label for="address">Número</label>
    @if($airport == null)
        <input type="text" value="{{ old('number' ?? '')}}" name="number" class="form-control">
    @else
        <input type="text" value="{{ $airport->number ?? old('number' ?? '')}}" name="number" class="form-control">
    @endif
</div>

<div class="form-group">
    <label for="zip_code">CEP</label>
    @if($airport == null)
        <input type="number" value="{{ old('zip_code' ?? '')}}" name="zip_code" class="form-control">
    @else
        <input type="number" value="{{ $airport->zip_code ?? old('date' ?? '')}}" name="zip_code" class="form-control">
    @endif
</div>

<div class="form-group">
    <label for="complement">Complemento</label>    
    @if($airport == null)
        <textarea rows="4" cols="50" name="complement" class="form-control">
                {{ old('complement' ?? '')}}
        </textarea>        
    @else
        <textarea rows="4" cols="50" name="complement" class="form-control">
                {{ $airport->complement ?? old('complement' ?? '')}}
        </textarea>           
    @endif
</div>
