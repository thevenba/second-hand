<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VehicleModel $vehicleModel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Second Hand'), ['controller' => 'SecondHand', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Second Hand'), ['controller' => 'SecondHand', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicleModel form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicleModel) ?>
    <fieldset>
        <legend><?= __('Add Vehicle Model') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('brand');
            echo $this->Form->control('engine_size');
            echo $this->Form->control('year');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
