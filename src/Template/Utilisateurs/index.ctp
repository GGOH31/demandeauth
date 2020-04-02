<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateur[]|\Cake\Collection\CollectionInterface $utilisateurs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groupes'), ['controller' => 'Groupes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Groupe'), ['controller' => 'Groupes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="utilisateurs index large-9 medium-8 columns content">
    <h3><?= __('Utilisateurs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groupe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('civilite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visibilite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($utilisateurs as $utilisateur): ?>
            <tr>
                <td><?= $this->Number->format($utilisateur->id) ?></td>
                <td><?= $utilisateur->has('groupe') ? $this->Html->link($utilisateur->groupe->id, ['controller' => 'Groupes', 'action' => 'view', $utilisateur->groupe->id]) : '' ?></td>
                <td><?= h($utilisateur->nom) ?></td>
                <td><?= h($utilisateur->prenom) ?></td>
                <td><?= h($utilisateur->email) ?></td>
                <td><?= h($utilisateur->contact) ?></td>
                <td><?= h($utilisateur->titre) ?></td>
                <td><?= h($utilisateur->civilite) ?></td>
                <td><?= h($utilisateur->etat) ?></td>
                <td><?= h($utilisateur->visibilite) ?></td>
                <td><?= h($utilisateur->login) ?></td>
                <td><?= h($utilisateur->password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $utilisateur->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $utilisateur->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $utilisateur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->id)]) ?>
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
