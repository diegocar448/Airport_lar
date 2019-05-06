
<div class="form-group">
    <label for="plane_id">Escolha o avião</label>
    <select class="form-control" name="plane_id" id="">
        @foreach($planes as $plane)        
            <option
            @if($flight != null)             
                @if($flight->plane_id == $plane->id)
                    selected="selected"            
                @elseif($flight->plane_id == $plane->id)
                    selected="selected"
                @endif            
            @endif            
            value="{{$plane->id}}"            
            >{{$plane->id}}</option>      
        @endforeach
    </select>
</div>
<div class="form-group">
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
        <input type="checkbox" value="1" name="is_promotion" class="form-control">
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
</div>



