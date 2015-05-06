<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Cities list'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="countries form large-10 medium-9 columns">
    <?= $this->Form->create($city); ?>
    <fieldset>
        <legend><?= __('Add City') ?></legend>
        <?php
            echo $this->Form->input('name',['class' => 'form-control']);
            echo $this->Form->input('countryid',['class' => 'form-control']);
        ?>
    </fieldset>

    <p></p>
    <?= $this->Form->button(__('Submit'),['class' => 'btn btn-default']) ?>
    <?= $this->Form->end() ?>
</div>
