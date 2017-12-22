<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PictureSecondHand $pictureSecondHand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Picture Second Hand'), ['action' => 'edit', $pictureSecondHand->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Picture Second Hand'), ['action' => 'delete', $pictureSecondHand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pictureSecondHand->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Picture Second Hand'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture Second Hand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Second Hand'), ['controller' => 'SecondHand', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Second Hand'), ['controller' => 'SecondHand', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Picture'), ['controller' => 'Picture', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Picture', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pictureSecondHand view large-9 medium-8 columns content">
    <h3><?= h($pictureSecondHand->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Second Hand') ?></th>
            <td><?= $pictureSecondHand->has('second_hand') ? $this->Html->link($pictureSecondHand->second_hand->id, ['controller' => 'SecondHand', 'action' => 'view', $pictureSecondHand->second_hand->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= $pictureSecondHand->has('picture') ? $this->Html->link($pictureSecondHand->picture->id, ['controller' => 'Picture', 'action' => 'view', $pictureSecondHand->picture->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pictureSecondHand->id) ?></td>
        </tr>
    </table>
</div>
