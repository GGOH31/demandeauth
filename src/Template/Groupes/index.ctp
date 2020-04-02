<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Groupe[]|\Cake\Collection\CollectionInterface $groupes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Groupe'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="groupes index large-9 medium-8 columns content">
    <h3><?= __('Groupes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libelle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_visite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_valide') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_add') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_all') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groupes as $groupe): ?>
            <tr>
                <td><?= $this->Number->format($groupe->id) ?></td>
                <td><?= h($groupe->libelle) ?></td>
                <td><?= h($groupe->role_visite) ?></td>
                <td><?= h($groupe->role_valide) ?></td>
                <td><?= h($groupe->role_add) ?></td>
                <td><?= h($groupe->role_all) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $groupe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $groupe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $groupe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupe->id)]) ?>
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
