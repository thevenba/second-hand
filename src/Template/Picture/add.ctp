<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Picture $picture
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Picture'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Second Hand'), ['controller' => 'SecondHand', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Second Hand'), ['controller' => 'SecondHand', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="picture form large-9 medium-8 columns content">
    <?= $this->Form->create($picture, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Picture') ?></legend>
        <?php
            echo $this->Form->file('submittedfile');
            echo $this->Form->control('second_hand._ids', ['options' => $secondHand]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
