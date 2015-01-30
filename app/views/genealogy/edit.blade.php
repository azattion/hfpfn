<p>Озгортуу</p>
@if($node)
{{Form::open(['roure'=>'add'])}}                
{{Form::label('name','Аты')}}
{{Form::text('name',$node->name,['placeholder'=>'аты'])}}                
{{Form::submit('Кошуу',['class'=>'button small'])}}
{{Form::close()}}
@else
<p>Ката!</p>
@endif
<a class="close-reveal-modal">&#215;</a>
