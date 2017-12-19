<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VehicleModel $vehicleModel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehicle Model'), ['action' => 'edit', $vehicleModel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle Model'), ['action' => 'delete', $vehicleModel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleModel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Second Hand'), ['controller' => 'SecondHand', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Second Hand'), ['controller' => 'SecondHand', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicleModel view large-9 medium-8 columns content">
    <h3><?= h($vehicleModel->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($vehicleModel->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brand') ?></th>
            <td><?= h($vehicleModel->brand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicleModel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Engine Size') ?></th>
            <td><?= $this->Number->format($vehicleModel->engine_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($vehicleModel->year) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Second Hand') ?></h4>
        <?php if (!empty($vehicleModel->second_hand)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Km') ?></th>
                <th scope="col"><?= __('First Registration Date') ?></th>
                <th scope="col"><?= __('Nb Owners') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Pic') ?></th>
                <th scope="col"><?= __('Is Approved') ?></th>
                <th scope="col"><?= __('Dealer Id') ?></th>
                <th scope="col"><?= __('Vehicle Model Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicleModel->second_hand as $secondHand): ?>
            <tr>
                <td><?= h($secondHand->id) ?></td>
                <td><?= h($secondHand->price) ?></td>
                <td><?= h($secondHand->km) ?></td>
                <td><?= h($secondHand->first_registration_date) ?></td>
                <td><?= h($secondHand->nb_owners) ?></td>
                <td><?= h($secondHand->description) ?></td>
                <td><?= h($secondHand->pic) ?></td>
                <td><?= h($secondHand->is_approved) ?></td>
                <td><?= h($secondHand->dealer_id) ?></td>
                <td><?= h($secondHand->vehicle_model_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SecondHand', 'action' => 'view', $secondHand->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SecondHand', 'action' => 'edit', $secondHand->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SecondHand', 'action' => 'delete', $secondHand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secondHand->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
