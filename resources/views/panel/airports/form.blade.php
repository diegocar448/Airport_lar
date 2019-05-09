
<div class="form-group">
    <label for="city_id">Escolha a Cidade</label>
    <select class="form-control" name="city_id" id="">
        <option value="">Selecione uma Cidade</option>
        @foreach($cities as $ci)        
            <option
            @if($city != null)             
                @if($ci->id == Request::segment(3))
                    selected="selected"            
                {{-- @elseif($city->city_id == $ci->id)
                    selected="selected" --}}
                @endif            
            @endif            
            value="{{$ci->id}}"            
            >{{$ci->name}}</option>      
        @endforeach
    </select>
</div>

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
    







   {{--  <div class="form-group">
        <label for="airport_origin_id">Origem</label>
        <select class="form-control" name="airport_origin_id" id="">
            @foreach($airports as $airport)        
                <option
                @if($flight != null)             
                    @if($flight->airport_origin_id == $airport->id)
                        selected="selected"            
                    @else
                        
                    @endif            
                @endif            
                value="{{$airport->id}}"            
                >{{$airport->name}}</option>      
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label for="airport_destination_id">Destino</label>
        <select class="form-control" name="airport_destination_id" id="">
            @foreach($airports as $airport)        
                <option
                @if($flight != null)             
                    @if($flight->airport_destination_id == $airport->id)
                        selected="selected"            
                    @elseif($flight->airport_destination_id == $airport->id)
                        selected="selected"
                    @endif            
                @endif            
                value="{{$airport->id}}"            
                >{{$airport->name}}</option>      
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label for="date">Data</label>
        @if($flight == null)
            <input type="date" value="{{ old('date' ?? '')}}" name="date" class="form-control">
        @else
            <input type="date" value="{{ $flight->date ?? old('date' ?? '')}}" name="date" class="form-control">
        @endif
    </div>
    
    <div class="form-group">
        <label for="time_duration">Duração</label>
        @if($flight == null)
            <input type="time" value="{{ old('time_duration' ?? '')}}" name="time_duration" placeholder="tempo de duração" class="form-control">
        @else
            <input type="time" value="{{ $flight->time_duration ?? old('time_duration' ?? '')}}" placeholder="tempo de duração" name="time_duration" class="form-control">
        @endif
    </div>
    
    <div class="form-group">
        <label for="hour_output">Hora de Saída</label>
        @if($flight == null)
            <input type="time" value="{{ old('hour_output' ?? '')}}" name="hour_output" placeholder="hora de saída" class="form-control">
        @else
            <input type="time" value="{{ $flight->hour_output ?? old('hour_output' ?? '')}}" name="hour_output" placeholder="hora de saída" class="form-control">
        @endif
    </div>
    
    <div class="form-group">
        <label for="arrival_time">Hora de Chegada</label>
        @if($flight == null)
            <input type="time" value="{{ old('arrival_time' ?? '')}}" placeholder="hora de chegada" name="arrival_time" class="form-control">
        @else
            <input type="time" value="{{ $flight->arrival_time ?? old('arrival_time' ?? '')}}" placeholder="hora de chegada" name="arrival_time" class="form-control">
        @endif
    </div>
    
    <div class="form-group">
        <label for="old_price">Preço Anterior</label>
        @if($flight == null)
            <input type="number" value="{{ old('old_price' ?? '')}}" placeholder="preço anterior" name="old_price" class="form-control">
        @else
            <input type="number" value="{{ $flight->old_price ?? old('old_price' ?? '')}}" placeholder="preço anterior" name="old_price" class="form-control">
        @endif
    </div>
    
    <div class="form-group">
        <label for="price">Preço</label>
        @if($flight == null)
            <input type="number" value="{{ old('price' ?? '')}}" placeholder="Preço" name="price" class="form-control">
        @else
            <input type="number" value="{{ $flight->price ?? old('price' ?? '')}}" placeholder="Preço" name="price" class="form-control">
        @endif
    </div>
    
    <div class="form-group">
        <label for="total_plots">Total de parcelas</label>
        @if($flight == null)
            <input type="number" value="{{ old('total_plots' ?? '')}}" placeholder="Total de parcelas" name="total_plots" class="form-control">
        @else
            <input type="number" value="{{ $flight->total_plots ?? old('total_plots' ?? '')}}" placeholder="Total de parcelas" name="total_plots" class="form-control">
        @endif
    </div>
    
    <div class="form-group">
        <label for="is_promotion">É Promoção
        @if($flight == null)
            <input type="checkbox" value="0" name="is_promotion" class="form-control">
        @else
            @if($flight->is_promotion == 1)
                <input type="checkbox" checked value="1" name="is_promotion" class="form-control">
            @else 
                <input type="checkbox" value="0" name="is_promotion" class="form-control">
            @endif
            
        @endif
        </label>
    </div>
    
    <div class="form-group">
        <label for="image">Foto</label>
        @if($flight == null)
            <input type="file" name="image" class="form-control">
        @else
            <input type="file" name="image" class="form-control">
        @endif
    </div>
    
    <div class="form-group">
        <label for="qty_stops">Qtd. Paradas</label>
        @if($flight == null)
            <input type="number" value="{{ old('qty_stops' ?? '')}}" placeholder="paradas" name="qty_stops" class="form-control">
        @else
            <input type="number" value="{{ $flight->qty_stops ?? old('qty_stops' ?? '')}}" placeholder="paradas" name="qty_stops" class="form-control">
        @endif
    </div>
    
    <div class="form-group">
        <label for="description">Descrição</label>    
        @if($flight == null)
            <textarea rows="4" cols="50" name="description" class="form-control">
                    {{ old('description' ?? '')}}
            </textarea>        
        @else
            <textarea rows="4" cols="50" name="description" class="form-control">
                    {{ $flight->description ?? old('description' ?? '')}}
            </textarea>           
        @endif
    </div> --}}
    
    
    
    
    
    