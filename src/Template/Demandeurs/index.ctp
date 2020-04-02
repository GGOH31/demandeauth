<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demandeur[]|\Cake\Collection\CollectionInterface $demandeurs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Demandeur'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Communes'), ['controller' => 'Communes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commune'), ['controller' => 'Communes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demandes'), ['controller' => 'Demandes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demande'), ['controller' => 'Demandes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandeurs index large-9 medium-8 columns content">
    <h3><?= __('Demandeurs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commune_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_naissance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lieu_naissance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situation_geo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_carte_identite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_cartee_identite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('civilite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_unique') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demandeurs as $demandeur): ?>
            <tr>
                <td><?= $this->Number->format($demandeur->id) ?></td>
                <td><?= $demandeur->has('commune') ? $this->Html->link($demandeur->commune->id, ['controller' => 'Communes', 'action' => 'view', $demandeur->commune->id]) : '' ?></td>
                <td><?= h($demandeur->nom) ?></td>
                <td><?= h($demandeur->prenom) ?></td>
                <td><?= h($demandeur->date_naissance) ?></td>
                <td><?= h($demandeur->lieu_naissance) ?></td>
                <td><?= h($demandeur->situation_geo) ?></td>
                <td><?= h($demandeur->email) ?></td>
                <td><?= h($demandeur->contact) ?></td>
                <td><?= h($demandeur->type_carte_identite) ?></td>
                <td><?= h($demandeur->numero_cartee_identite) ?></td>
                <td><?= h($demandeur->titre) ?></td>
                <td><?= h($demandeur->civilite) ?></td>
                <td><?= h($demandeur->code_unique) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $demandeur->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demandeur->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demandeur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeur->id)]) ?>
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
