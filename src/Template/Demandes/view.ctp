<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demande $demande
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demande'), ['action' => 'edit', $demande->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demande'), ['action' => 'delete', $demande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demande->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demandes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motifs'), ['controller' => 'Motifs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motif'), ['controller' => 'Motifs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demandeurs'), ['controller' => 'Demandeurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demandeur'), ['controller' => 'Demandeurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demandes view large-9 medium-8 columns content">
    <h3><?= h($demande->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Motif') ?></th>
            <td><?= $demande->has('motif') ? $this->Html->link($demande->motif->id, ['controller' => 'Motifs', 'action' => 'view', $demande->motif->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demandeur') ?></th>
            <td><?= $demande->has('demandeur') ? $this->Html->link($demande->demandeur->id, ['controller' => 'Demandeurs', 'action' => 'view', $demande->demandeur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utilisateur') ?></th>
            <td><?= $demande->has('utilisateur') ? $this->Html->link($demande->utilisateur->id, ['controller' => 'Utilisateurs', 'action' => 'view', $demande->utilisateur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etat Demande') ?></th>
            <td><?= h($demande->etat_demande) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination') ?></th>
            <td><?= h($demande->destination) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documents Justificatif') ?></th>
            <td><?= h($demande->documents_justificatif) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($demande->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Demande') ?></th>
            <td><?= $this->Number->format($demande->numero_demande) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbre Jours') ?></th>
            <td><?= $this->Number->format($demande->nbre_jours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Depart') ?></th>
            <td><?= h($demande->date_depart) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Demande') ?></th>
            <td><?= h($demande->date_demande) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time Demande') ?></th>
            <td><?= h($demande->time_demande) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text Justificatif') ?></h4>
        <?= $this->Text->autoParagraph(h($demande->text_justificatif)); ?>
    </div>
    <div class="row">
        <h4><?= __('Commentaire Validation') ?></h4>
        <?= $this->Text->autoParagraph(h($demande->commentaire_validation)); ?>
    </div>
</div>
