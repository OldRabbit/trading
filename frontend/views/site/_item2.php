<div class="tab-body">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col"><?= Yii::t('app', 'Сумма') ?></th>
        <th scope="col"><?= Yii::t('app', 'Дата') ?></th>
        <th scope="col"><?= Yii::t('app', 'Комментарий') ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($model as $item) { ?>
          <tr>
            <th scope="row"><?= $item->id ?></th>
            <td><?= $item->amount ?></td>
            <td><?= $item->date ?></td>
            <td><?= $item->comment ?></td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
</div>