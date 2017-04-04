
<h2> <?= $model->name ?> </h2>
<br/>

<div class="col-xs-8">
    <i> <?= date("Y-m-d", strtotime($model->spottedWhen->date)) ?> </i>

    <p> <?= $model->description ?> </p>

    <p><b>Rapporterad av:</b> <?= $model->reportedBy ?> </p>
</div>

<image src="<?= $model->imageSrc ?>" class="col-xs-4 pull-right" />