<div class="actions columns large-2 medium-3">
    <h3 align = "center"><?= __('Country list') ?></h3>
	<?= $this->Html->link(__('Add new Country'), ['action' => 'add'], ['class' => 'btn btn-default']) ?></li>
	<br><br>
</div>
<div class="countries index large-10 medium-9 columns">
    <table cellpadding="20" cellspacing="0" border="1" align="center">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('iso') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($countries as $country): ?>
        <tr>
            <td><?= $this->Number->format($country->id) ?></td>
            <td><?= h($country->name) ?></td>
            <td><?= h($country->iso) ?></td>
            <td><?= h($country->created) ?></td>
            <td><?= h($country->updated) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $country->id], ['class' => 'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->id], ['class' => 'btn btn-default']) ?>
                <?= $this->Form->postLink(__('Delete'), ['class' => 'btn btn-default'], ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
