@extends('theme.content')


@section('content')


<!-- Шапка сайта -->
<div class="row">
    <div class="large-12" id="header">
        <div class="large-3 columns" id="logo">
            <h1 class="text-center"><a>Cанжыра</a></h1>
        </div>
       <!-- <p class="left">Бугун Жума, Баш оона айы 12</p>
        <div class="large-5 columns right">
            <div class="row collapse">
                <div class="small-10 columns">
                    <input type="text" placeholder="сайттан издоо">
                </div>
                <div class="small-2 columns">
                    <a href="#" class="button postfix">Go</a>
                </div>
            </div>
        </div> -->
        <div class="large-9 columns">

        </div>

    </div>
</div>

<div class="row">

    <div class="large-12">
        <ul class="sub-nav">
            <li><a href="/">Негизги баракча</a></li>
            <li><a href="/genealogy">Санжыра</a></li>
            <li><a>Жанылыктар</a></li>
            <li><a>FAQ</a></li>
            <li><a>Статистика</a></li>
            <li><a>Байланышуу</a></li>
        </ul>
    </div>
</div>
<hr>

<div class="row" id="content">
    <div class="large-12">

        <div class="large-3 columns">          

            <div class="panel callout">
                <input type="text" placeholder="Логинди жазыныз">
                <input type="password" placeholder="Сыр созду жазыныз">
                <div class="switch small">
                    <input type="checkbox" id="CheckboxSwitch">
                    <label for="CheckboxSwitch"></label>
                </div>
                <button type="submit" class="button small">Кируу</button>

            </div>

            <div class="panel callout">
                <p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
                <a href="#" data-reveal-id="myModal" class="button small">Озунуду кош</a>
            </div>

            <div class="panel callout">
                <h5>Популярные</h5>
                <p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
            </div>

        </div>
        <div class="large-9 columns">

            <div class="large-12 columns ">
                <div data-alert class="alert-box hide">
                    <span>Ката!</span>
                    <a href="#" class="close">&times;</a>
                </div>
                <dl class="sub-nav">
                    <dt>Filter:</dt>
                    <dd class="active"><a href="#">All</a></dd>
                    <dd><a href="#">Active</a></dd>
                    <dd><a href="#">Pending</a></dd>
                    <dd><a href="#">Suspended</a></dd>
                </dl>

                <?php
                echo '<ul>';
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
                    echo "<li> $category->id  $category->name ";
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
</div>
@stop

