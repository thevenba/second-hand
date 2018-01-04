<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SecondHand[]|\Cake\Collection\CollectionInterface $secondHand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Second Hand'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dealer'), ['controller' => 'Dealer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dealer'), ['controller' => 'Dealer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Picture'), ['controller' => 'Picture', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Picture', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="secondHand index large-9 medium-8 columns content">
    <h3><?= __('Second Hand') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('km') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_registration_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nb_owners') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_approved') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dealer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vehicle_model_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($secondHand as $secondHand): ?>
            <tr>
                <td><?= $this->Number->format($secondHand->id) ?></td>
                <td><?= $this->Number->format($secondHand->price) ?></td>
                <td><?= $this->Number->format($secondHand->km) ?></td>
                <td><?= h($secondHand->first_registration_date) ?></td>
                <td><?= $this->Number->format($secondHand->nb_owners) ?></td>
                <td><?= h($secondHand->is_approved) ?></td>
                <td><?= $secondHand->has('dealer') ? $this->Html->link($secondHand->dealer->name, ['controller' => 'Dealer', 'action' => 'view', $secondHand->dealer->id]) : '' ?></td>
                <td><?= $secondHand->has('vehicle_model') ? $this->Html->link($secondHand->vehicle_model->name, ['controller' => 'VehicleModel', 'action' => 'view', $secondHand->vehicle_model->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $secondHand->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $secondHand->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $secondHand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secondHand->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
