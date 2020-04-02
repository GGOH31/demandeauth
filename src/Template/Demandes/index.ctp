<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demande[]|\Cake\Collection\CollectionInterface $demandes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Demande'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motifs'), ['controller' => 'Motifs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motif'), ['controller' => 'Motifs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demandeurs'), ['controller' => 'Demandeurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demandeur'), ['controller' => 'Demandeurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandes index large-9 medium-8 columns content">
    <h3><?= __('Demandes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motif_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demandeur_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_valide_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_demande') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etat_demande') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destination') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documents_justificatif') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbre_jours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_depart') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_demande') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_demande') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demandes as $demande): ?>
            <tr>
                <td><?= $this->Number->format($demande->id) ?></td>
                <td><?= $demande->has('motif') ? $this->Html->link($demande->motif->id, ['controller' => 'Motifs', 'action' => 'view', $demande->motif->id]) : '' ?></td>
                <td><?= $demande->has('demandeur') ? $this->Html->link($demande->demandeur->id, ['controller' => 'Demandeurs', 'action' => 'view', $demande->demandeur->id]) : '' ?></td>
                <td><?= $demande->has('utilisateur') ? $this->Html->link($demande->utilisateur->id, ['controller' => 'Utilisateurs', 'action' => 'view', $demande->utilisateur->id]) : '' ?></td>
                <td><?= $this->Number->format($demande->numero_demande) ?></td>
                <td><?= h($demande->etat_demande) ?></td>
                <td><?= h($demande->destination) ?></td>
                <td><?= h($demande->documents_justificatif) ?></td>
                <td><?= $this->Number->format($demande->nbre_jours) ?></td>
                <td><?= h($demande->date_depart) ?></td>
                <td><?= h($demande->date_demande) ?></td>
                <td><?= h($demande->time_demande) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $demande->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demande->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demande->id)]) ?>
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
