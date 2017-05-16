<div class="form-group">
    <label class="control-label">{{$label}}</label>
    <input 
    	placeholder="{{$label}}" 
    	class="form-control" 
    	type="text" 
    	name="{{$name}}"  

    	@if(isset($value))
    		value="{{$value}}"
    	@endif
    />
</div>