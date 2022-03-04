@extends('template')

@section('main')
<div id="aturtoko">
    <h2> Aturtoko</h2>

    <?php if (!empty($aturtoko)) : ?>
        <ul>
            <?php foreach ($aturtoko as $atur) : ?>
                <li><?= $atur ?> </li>
            <?php endforeach ?>
        </ul>
    <?php else : ?>
        <p>Tidak ada data aturtoko.</p>
    <?php endif ?>
</div>
@stop

@section('footer')
<div id="footer">
    <p>&copy; 2020 aturtoko.app </p>
</div>
@stop