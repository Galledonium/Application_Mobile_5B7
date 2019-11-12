<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['action' => 'index']) ?></li>
<<<<<<< HEAD
<<<<<<< HEAD
=======
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
>>>>>>> parent of b5619d9... fasgadg
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?></li>
=======
>>>>>>> parent of 278faef... egs
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="applications form large-9 medium-8 columns content">
    <?= $this->Form->create($application) ?>
    <fieldset>
        <legend><?= __('Add Application') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('prix');
            echo $this->Form->control('evaluation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
