<p>Очуруу</p>
{{Form::open(['url'=>'/genealogy/delete'])}}
{{Form::hidden('id',$id)}}
<h5>Сиз чындыгында очурууну каалайсызбы ?</h5>
{{Form::submit('Очуруу',['class'=>'button small'])}}
{{Form::submit('Баш тартуу',['class'=>'button small'])}}
{{Form::close()}}
<a class="close-reveal-modal">&#215;</a>

