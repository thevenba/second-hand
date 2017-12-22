<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PictureSecondHand $pictureSecondHand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pictureSecondHand->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pictureSecondHand->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Picture Second Hand'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Second Hand'), ['controller' => 'SecondHand', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Second Hand'), ['controller' => 'SecondHand', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Picture'), ['controller' => 'Picture', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Picture', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pictureSecondHand form large-9 medium-8 columns content">
    <?= $this->Form->create($pictureSecondHand) ?>
    <fieldset>
        <legend><?= __('Edit Picture Second Hand') ?></legend>
        <?php
            echo $this->Form->control('second_hand_id', ['options' => $secondHand]);
            echo $this->Form->control('picture_id', ['options' => $picture]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
