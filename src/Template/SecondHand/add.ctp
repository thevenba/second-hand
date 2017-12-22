<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SecondHand $secondHand
 */
?>
<?php
$this->Html->script('main', ['block' => 'scriptBottom']);
$this->Html->css('styles', ['block' => true]);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Second Hand'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dealer'), ['controller' => 'Dealer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dealer'), ['controller' => 'Dealer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModel', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Picture'), ['controller' => 'Picture', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Picture', 'action' => 'add']) ?> </li>
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
        echo $this->Form->control('is_approved');
        echo $this->Form->control('dealer_id', ['options' => $dealer]);

//            echo $this->Form->control('vehicle_model_id', ['options' => $vehicleModel]);
        echo $this->Form->label('vehicle_model_id', 'Vehicle');
        echo $this->Form->select('vehicle_model_id', $vehicleModel, [
            'disabled' => $allBrandsArray
        ]);
        echo $this->Form->control('picture._ids', ['options' => $picture]);
        ?>
        <div class="input select">
            <label for="picture-ids">Picture</label>
            <input type="hidden" name="picture[_ids]" value="">
            <select name="picture[_ids][]" data-limit="10" multiple="multiple" id="picture-ids" class="imgPicker">
                <?php
                foreach ($picture as $p) {
                    echo '<option value="' . $p['id'] . '">' . $p['id'] . '</option>';
                }
                ?>
            </select>
        </div>
        <ul id="imgPickerSelector">
            <?php
            foreach ($picture as $p) {
                ?>
                <li>
                    <div style="background-image: url(<?php echo $p['url']; ?>)"></div>
                </li>
                <?php
            }
            ?>
        </ul>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>