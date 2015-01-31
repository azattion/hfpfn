@extends('theme.content')

@section('content')

<script>
    $(document).ready(function() {
        $('.tree').tree_structure({
        });
    });
</script>

<div class="row" style="margin-top: 60px;">
    <div class="large-12">
        <div class="left">
            <ul class="inline-list link-btn">
                <li  class="current"><a href=""><i class="fa fa-sitemap icon-pedigree"></i> Дерево</a></li>
                <li><a href="#"><i class="fa fa-th-large"></i> Блок</a></li>
                <li><a href="#"><i class="fa fa-reorder"></i> Список</a></li
                
            </ul> 
        </div>
        <div class="right">
            <ul class="inline-list link-btn">
                <li><a href=""><i class="fa fa-search"></i> Поиск</a></li>
                <li><a href=""><i class="fa fa-cog"></i>  Настройки</a></li>
                <li><a href=""><i class="fa fa-print"></i> Печать</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="overflow">

    <div style="width: 1100px; margin: 0 auto;">

        <ul class="tree">
            <?php
            $depth = 0;
            foreach ($node as $category) {
                if ($category->depth == $depth) {
                    echo '</li>';
                } else if ($category->depth > $depth) {
                    echo '<ul>';
                } else {
                    echo '</li>';
                    for ($i = $depth - $category->depth; $i; $i--) {
                        echo '</ul></li>';
                    }
                }
                echo "<li>"
                . "<div class='node'><img src='/img/icon_male.png' class='icon-node'/>"
                . "<p><a href='/genealogy/view/$category->id' data-reveal-id='myModal' data-reveal-ajax='true'>$category->name</a></p> </div>";
                $depth = $category->depth;
            }

            for ($i = $depth; $i; $i--) {
                echo "</li></ul>";
            }

            echo '</ul>';
            ?>
    </div> 
</div>
</div>

@stop
