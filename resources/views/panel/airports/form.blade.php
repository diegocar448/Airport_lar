
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
    {{-- @if($flight == null) --}}
        <input type="text" value="{{ old('name' ?? '')}}" name="name" class="form-control">
    {{-- @else
        <input type="date" value="{{ $flight->date ?? old('date' ?? '')}}" name="date" class="form-control">
    @endif --}}
</div>

<div class="form-group">
    <label for="latitude">Latitude</label>
    {{-- @if($flight == null) --}}
        <input type="text" value="{{ old('latitude' ?? '')}}" name="latitude" class="form-control">
    {{-- @else
        <input type="date" value="{{ $flight->date ?? old('date' ?? '')}}" name="date" class="form-control">
    @endif --}}
</div>

<div class="form-group">
    <label for="longitude">Longitude</label>
    {{-- @if($flight == null) --}}
        <input type="text" value="{{ old('longitude' ?? '')}}" name="longitude" class="form-control">
    {{-- @else
        <input type="date" value="{{ $flight->date ?? old('date' ?? '')}}" name="date" class="form-control">
    @endif --}}
</div>

<div class="form-group">
    <label for="address">Endereço</label>
    {{-- @if($flight == null) --}}
        <input type="text" value="{{ old('address' ?? '')}}" name="address" class="form-control">
    {{-- @else
        <input type="date" value="{{ $flight->date ?? old('date' ?? '')}}" name="date" class="form-control">
    @endif --}}
</div>

<div class="form-group">
    <label for="zip_code">CEP</label>
    {{-- @if($flight == null) --}}
        <input type="number" value="{{ old('zip_code' ?? '')}}" name="zip_code" class="form-control">
    {{-- @else
        <input type="date" value="{{ $flight->date ?? old('date' ?? '')}}" name="date" class="form-control">
    @endif --}}
</div>

<div class="form-group">
    <label for="complement">Complemento</label>    
    {{-- @if($flight == null) --}}
        <textarea rows="4" cols="50" name="complement" class="form-control">
                {{ old('complement' ?? '')}}
        </textarea>        
    {{-- @else
        <textarea rows="4" cols="50" name="description" class="form-control">
                {{ $flight->description ?? old('description' ?? '')}}
        </textarea>           
    @endif --}}
</div>
