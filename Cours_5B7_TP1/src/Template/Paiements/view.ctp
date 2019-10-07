<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement $paiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paiement'), ['action' => 'edit', $paiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paiement'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types Paiements'), ['controller' => 'TypesPaiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Types Paiement'), ['controller' => 'TypesPaiements', 'action' => 'add']) ?> </li>
        <!-- <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?> </li> -->
    </ul>
</nav>
<div class="paiements view large-9 medium-8 columns content">
    <h3><?= h('Facture #' . $paiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Application') ?></th>
            <td><?= $paiement->has('application') ? $this->Html->link($paiement->application->name, ['controller' => 'Applications', 'action' => 'view', $paiement->application->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type de paiement') ?></th>
            <td><?= $paiement->has('types_paiement') ? $this->Html->link($paiement->types_paiement->typePaiement, ['controller' => 'TypesPaiements', 'action' => 'view', $paiement->types_paiement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero de carte') ?></th>
            <td><?= h('************' . substr($paiement->numero_carte, 10)) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acheté le') ?></th>
            <td><?= h($paiement->created) ?></td>
        </tr>
<!--         <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paiement->modified) ?></td>
        </tr> -->
    </table>
    <div class="related">
        <!-- <h4><?= __('Related Evaluations') ?></h4>
        <?php if (!empty($paiement->evaluations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Commentaires') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paiement->evaluations as $evaluations): ?>
            <tr>
                <td><?= h($evaluations->commentaires) ?></td>
                <td><?= h($evaluations->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Evaluations', 'action' => 'view', $evaluations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Evaluations', 'action' => 'edit', $evaluations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evaluations', 'action' => 'delete', $evaluations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table> -->
        <?php endif; ?>
    </div>
</div>
