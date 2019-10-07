<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesPaiement $typesPaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Types Paiements'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typesPaiements form large-9 medium-8 columns content">
    <?= $this->Form->create($typesPaiement) ?>
    <fieldset>
        <legend><?= __('Add Types Paiement') ?></legend>
        <?php
            echo $this->Form->control('typePaiement');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
