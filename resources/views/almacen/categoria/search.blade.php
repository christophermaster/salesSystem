{!! Form::open(array('url' => 'almacen/categoria' , 'method'=> 'Get','autocomplete' =>'off','role' => 'search'))!!}

<div class = "form-group">
    <div class = "input-group">
        <input type= "text" class = "form-control" name = "searchText" placeholder = "Buscar..." value ="{{$searchText}}" />
        <span class = "input-group-btn">
            <button type = "submint" class = "btn btn-primary">
                Buscar
            </button>
        </span>
    </div>
</div>

{{Form::close()}}