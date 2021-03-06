<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VehicleModel $vehicleModel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vehicleModel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleModel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Second Hand'), ['controller' => 'SecondHand', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Second Hand'), ['controller' => 'SecondHand', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dealer'), ['controller' => 'Dealer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dealer'), ['controller' => 'Dealer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Picture'), ['controller' => 'Picture', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Picture', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicleModel form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicleModel) ?>
    <fieldset>
        <legend><?= __('Edit Vehicle Model') ?></legend>
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
