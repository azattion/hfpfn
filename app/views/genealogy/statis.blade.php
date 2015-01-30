@extends('theme.content')

@section('content')
<script>
    $(document).ready(function() {
        $('.tree').tree_structure({
        });
    });
</script>
<div class="overflow">
    @if($data)
    <p> Жалпы саны: {{$data['count']}}</p>
    <p> Сол канатта : {{$data['countl']}}</p>
    <p> Он канатта : {{$data['countr']}}</p>
     <p> Ортонку канатта : {{$data['countc']}}</p>
    
    {{Form::open()}}
    {{Form::text('data-f')}}
    {{Form::text('data-l')}}
    {{Form::submit('поиск',['class'=>'button small'])}}
    {{Form::close()}}
    
    
    @else
    
    @endif    
</div>


@stop
