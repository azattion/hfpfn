<p>Жылдыруу</p>
{{Form::open()}}            
{{Form::text('id',null,['placeholder'=>'id'])}}
{{Form::label('pos','Орду')}}
{{Form::select('pos',['first'=>'биринчи','after'=>'акырына'])}}
{{Form::submit('Сактоо',['class'=>'button small'])}}
{{Form::close()}}
<a class="close-reveal-modal">&#215;</a>