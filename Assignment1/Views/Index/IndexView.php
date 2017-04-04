
<h2>Alla enhörningar</h2>

<ol class="list-group">

    <?php foreach ($model->list as &$value) { ?>

    <li class="list-group-item">
        <p>
            <?= $value->id ?>: <?= $value->name ?> 
            <input class="pull-right" onclick="location.href='index.php?action=details&id=<?= $value->id ?>'" type="button" value="Läs mer" />
        </p>
    </li>

    <?php } ?>

</ol>
