<div class="form-group">
    <label class="control-label">{{$label}}</label>

    @if(isset($value))
    	<input type="text" class="form-control" placeholder="{{$label}}" name="{{$name}}" value="{{$value}}"/>
    @else
    	<input type="text" class="form-control" placeholder="{{$label}}" name="{{$name}}"/>
    @endif

</div>