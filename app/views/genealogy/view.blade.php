<p>Анкета</p>
@if($node)
<img src="/img/icon_male.png" class="icon-node view-node">
<p>Аты: {{$node->name}}</p>
<p>Кошулган: {{$node->created_at}}</p>
<p><a href="genealogy/edit/{{$node->id}}" data-reveal-id="myModal" data-reveal-ajax="true">Озгортуу</a></p>
<p><a href="/genealogy/add/{{$node->id}}" data-reveal-id="myModal" data-reveal-ajax="true">Уул кошуу</a></p>
<p><a href="{{Route('addof')}}" data-reveal-id="myModal" data-reveal-ajax="true">Уул кошуу(к/ч)</a></p>
<p><a href="/genealogy/move/{{$node->id}}" data-reveal-id="myModal" data-reveal-ajax="true">Жылдыруу</a></p>
<p><a href="{{Route('moveof')}}" data-reveal-id="myModal" data-reveal-ajax="true">Жылдыруу (к/ч)</a></p>
<p><a href="/genealogy/del/{{$node->id}}" data-reveal-id="myModal" data-reveal-ajax="true">Очуруу</a></p>
@else
<p></p>
@endif
<a class="close-reveal-modal">&#215;</a>
