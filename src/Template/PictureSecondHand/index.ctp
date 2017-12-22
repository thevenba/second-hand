<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PictureSecondHand[]|\Cake\Collection\CollectionInterface $pictureSecondHand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Picture Second Hand'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Second Hand'), ['controller' => 'SecondHand', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Second Hand'), ['controller' => 'SecondHand', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Picture'), ['controller' => 'Picture', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Picture', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pictureSecondHand index large-9 medium-8 columns content">
    <h3><?= __('Picture Second Hand') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('second_hand_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pictureSecondHand as $pictureSecondHand): ?>
            <tr>
                <td><?= $this->Number->format($pictureSecondHand->id) ?></td>
                <td><?= $pictureSecondHand->has('second_hand') ? $this->Html->link($pictureSecondHand->second_hand->id, ['controller' => 'SecondHand', 'action' => 'view', $pictureSecondHand->second_hand->id]) : '' ?></td>
                <td><?= $pictureSecondHand->has('picture') ? $this->Html->link($pictureSecondHand->picture->id, ['controller' => 'Picture', 'action' => 'view', $pictureSecondHand->picture->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pictureSecondHand->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pictureSecondHand->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pictureSecondHand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pictureSecondHand->id)]) ?>
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
