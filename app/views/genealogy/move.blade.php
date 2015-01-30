<p>Жылдыруу</p>
{{Form::open(['route'=>'moveup'])}}            
{{Form::hidden('id',$id)}}
{{Form::label('pos','Орду')}}
{{Form::select('pos',['left'=>'ойдо','right'=>'ылдый'])}}
{{Form::submit('Сактоо',['class'=>'button small'])}}
{{Form::close()}}
<a class="close-reveal-modal">&#215;</a>