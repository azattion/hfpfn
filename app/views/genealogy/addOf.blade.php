<p>Уул кошуу (кийин/чейин)</p>
{{Form::open()}}            
{{Form::text('id',null,['placeholder'=>'атасынын id'])}}
{{Form::label('name','Аты')}}
{{Form::text('name',null,['placeholder'=>'аты'])}}
{{Form::label('sibling','бир тууганы')}}
{{Form::select('sibling',['first'=>'Ак уул','after'=>'Куу уул'])}}
{{Form::label('pos','Орду')}}
{{Form::select('pos',['first'=>'биринчи','after'=>'акыркы'])}}
{{Form::submit('Кошуу',['class'=>'button small'])}}
{{Form::close()}}
<a class="close-reveal-modal">&#215;</a>