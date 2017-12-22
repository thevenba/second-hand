<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SecondHand $secondHand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Second Hand'), ['action' => 'edit', $secondHand->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Second Hand'), ['action' => 'delete', $secondHand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secondHand->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Second Hand'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Second Hand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dealer'), ['controller' => 'Dealer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dealer'), ['controller' => 'Dealer', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Picture'), ['controller' => 'Picture', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Picture', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="secondHand view large-9 medium-8 columns content">
    <h3><?= h($secondHand->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dealer') ?></th>
            <td><?= $secondHand->has('dealer') ? $this->Html->link($secondHand->dealer->name, ['controller' => 'Dealer', 'action' => 'view', $secondHand->dealer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vehicle Model') ?></th>
            <td><?= $secondHand->has('vehicle_model') ? $this->Html->link($secondHand->vehicle_model->name, ['controller' => 'VehicleModel', 'action' => 'view', $secondHand->vehicle_model->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($secondHand->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($secondHand->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Km') ?></th>
            <td><?= $this->Number->format($secondHand->km) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nb Owners') ?></th>
            <td><?= $this->Number->format($secondHand->nb_owners) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Registration Date') ?></th>
            <td><?= h($secondHand->first_registration_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Approved') ?></th>
            <td><?= $secondHand->is_approved ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($secondHand->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Picture') ?></h4>
        <?php if (!empty($secondHand->picture)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Preview') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($secondHand->picture as $picture): ?>
            <tr>
                <td><?= h($picture->id) ?></td>
                <td><?= h($picture->url) ?></td>
                <td><img src="<?= h($picture->url) ?>" style="max-height: 50px; max-width: 250px;"/></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Picture', 'action' => 'view', $picture->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Picture', 'action' => 'edit', $picture->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Picture', 'action' => 'delete', $picture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $picture->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
