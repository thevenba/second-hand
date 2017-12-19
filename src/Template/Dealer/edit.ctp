<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dealer $dealer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dealer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dealer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dealer'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Second Hand'), ['controller' => 'SecondHand', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Second Hand'), ['controller' => 'SecondHand', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dealer form large-9 medium-8 columns content">
    <?= $this->Form->create($dealer) ?>
    <fieldset>
        <legend><?= __('Edit Dealer') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
