<p>Уул кошуу</p>
{{Form::open(['url'=>'genealogy/store'])}} 
{{Form::hidden('id',$id)}}                
{{Form::label('name','Аты')}}
{{Form::text('name',null,['placeholder'=>'аты'])}}                
{{Form::label('pos','Орду')}}
{{Form::select('pos',['first'=>'биринчи','last'=>'акыркы'])}}
{{Form::submit('Кошуу',['class'=>'button small'])}}
{{Form::close()}}
<a class="close-reveal-modal">&#215;</a>
