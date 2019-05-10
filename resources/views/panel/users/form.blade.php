
{{-- <div class="form-group">
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
</div> --}}
{{-- <div class="form-group">
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
</div> --}}

{{-- <div class="form-group">
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
</div> --}}

<div class="form-group">
    <label for="name">Nome</label>
    @if($user == null)
        <input type="text" value="{{ old('name' ?? '')}}" name="name" class="form-control">
    @else
        <input type="text" value="{{ $user->name ?? old('name' ?? '')}}" name="name" class="form-control">
    @endif
</div>

<div class="form-group">
    <label for="email">Email</label>
    @if($user == null)
        <input type="email" value="{{ old('email' ?? '')}}" name="email" class="form-control">
    @else
        <input type="email" value="{{ $user->email ?? old('email' ?? '')}}" name="email" class="form-control">
    @endif
</div>

<div class="form-group">
    <label for="password">Senha</label>
    @if($user == null)
        <input type="password" value="{{ old('password' ?? '')}}" name="password" class="form-control">
    @else
        <input type="password" value="{{ old('password' ?? '')}}" name="password" class="form-control">
    @endif
</div>

<div class="form-group">
    <label for="is_admin">Administrador?
    @if($user == null)
        <input type="checkbox" value="0" name="is_admin" class="form-control">
    @else
        @if($user->is_admin == true)
            <input type="checkbox" value="1" checked name="is_admin" class="form-control">
        @else
            <input type="checkbox" value="0" name="is_admin" class="form-control">
        @endif
    @endif
    </label>
</div>






