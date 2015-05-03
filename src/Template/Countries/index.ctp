<div class="row">
    <div class="col-lg-10">
        <h1 class="page-header"><?= __('Country list') ?></h1>
    </div><div class="col-lg-2">
        <h2 class="page-header">
            <?= $this->Html->link(__('Add new Country'), ['action' => 'add'], ['class' => 'btn btn-default']) ?>
        </h2>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                </div>
            </div>
        </div>
    </div>
</div>

<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>

