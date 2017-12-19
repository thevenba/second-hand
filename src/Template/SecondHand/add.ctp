<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SecondHand $secondHand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Second Hand'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dealer'), ['controller' => 'Dealer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dealer'), ['controller' => 'Dealer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="secondHand form large-9 medium-8 columns content">
    <?= $this->Form->create($secondHand) ?>
    <fieldset>
        <legend><?= __('Add Second Hand') ?></legend>
        <?php
            echo $this->Form->control('price');
            echo $this->Form->control('km');
            echo $this->Form->control('first_registration_date');
            echo $this->Form->control('nb_owners');
            echo $this->Form->control('description');
            echo $this->Form->control('pic');
            echo $this->Form->control('is_approved');
            echo $this->Form->control('dealer_id', ['options' => $dealer]);
            echo $this->Form->control('vehicle_model_id', ['options' => $vehicleModel]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
