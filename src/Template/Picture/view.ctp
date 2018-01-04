<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Picture $picture
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Picture'), ['action' => 'edit', $picture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Picture'), ['action' => 'delete', $picture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $picture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Picture'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Second Hand'), ['controller' => 'SecondHand', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Second Hand'), ['controller' => 'SecondHand', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dealer'), ['controller' => 'Dealer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dealer'), ['controller' => 'Dealer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="picture view large-9 medium-8 columns content">
    <h3><?= h($picture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($picture->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($picture->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preview') ?></th>
            <td><img src="<?= h($picture->url) ?>" style="max-height: 500px; max-width: 500px;"/></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Second Hand') ?></h4>
        <?php if (!empty($picture->second_hand)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Km') ?></th>
                <th scope="col"><?= __('First Registration Date') ?></th>
                <th scope="col"><?= __('Nb Owners') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Is Approved') ?></th>
                <th scope="col"><?= __('Dealer Id') ?></th>
                <th scope="col"><?= __('Vehicle Model Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($picture->second_hand as $secondHand): ?>
            <tr>
                <td><?= h($secondHand->id) ?></td>
                <td><?= h($secondHand->price) ?></td>
                <td><?= h($secondHand->km) ?></td>
                <td><?= h($secondHand->first_registration_date) ?></td>
                <td><?= h($secondHand->nb_owners) ?></td>
                <td><?= h($secondHand->description) ?></td>
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
