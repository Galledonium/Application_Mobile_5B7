<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application[]|\Cake\Collection\CollectionInterface $applications
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Application'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="applications index large-9 medium-8 columns content">
    <h3><?= __('Applications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evaluation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subcategorie_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applications as $application): ?>
            <tr>
                <td><?= $this->Number->format($application->id) ?></td>
                <td><?= h($application->name) ?></td>
                <td><?= h($application->description) ?></td>
                <td><?= $this->Number->format($application->prix) ?></td>
                <td><?= $this->Number->format($application->evaluation) ?></td>
                <td><?= $this->Number->format($application->file_id) ?></td>
                <td><?= h($application->created) ?></td>
                <td><?= h($application->modified) ?></td>
                <td><?= $this->Number->format($application->subcategorie_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $application->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $application->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?>
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
