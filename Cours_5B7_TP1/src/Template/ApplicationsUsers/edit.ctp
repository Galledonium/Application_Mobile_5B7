<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationsUser $applicationsUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $applicationsUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $applicationsUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Applications Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="applicationsUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($applicationsUser) ?>
    <fieldset>
        <legend><?= __('Edit Applications User') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('application_id', ['options' => $applications]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
