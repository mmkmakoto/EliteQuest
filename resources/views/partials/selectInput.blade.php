<div class="form-group">
    <label class="control-label">{{$label}}</label>
    <select name="{{$name}}" class="form-control">
        @foreach($options as $option)
            @if(isset($selectedValue))
                <option {{$selectedValue == $option->$optionValue?'selected':''}} value="{{$option->$optionValue}}">{{$option->$optionLabel}}</option>
            @else
                <option value="{{$option->$optionValue}}">{{$option->$optionLabel}}</option>
            @endif
        @endforeach
    </select>
</div>