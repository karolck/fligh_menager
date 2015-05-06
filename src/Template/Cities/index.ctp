<div class="row">
    <div class="col-lg-10">
    
        <h1 class="page-header"><?= __('City list') ?></h1>
        
    </div><div class="col-lg-2">
    
        <h2 class="page-header">
            <?= $this->Html->link(__('Add new City'), ['action' => 'add'], ['class' => 'btn btn-default']) ?>
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
                            <th><?= $this->Paginator->sort('countryid') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($cities as $city): ?>
                            <tr>
                                <td><?= $this->Number->format($city->id) ?></td>
                                <td><?= h($city->name) ?></td>
                                <td><?= h($city->countryid) ?></td>
                                <td><?= h($city->created) ?></td>
                                <td><?= h($city->updated) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $city->id], ['class' => 'btn btn-default']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $city->id], ['class' => 'btn btn-default']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['class' => 'btn btn-default'], ['action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?>
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

