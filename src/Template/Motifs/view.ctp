<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motif $motif
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Motif'), ['action' => 'edit', $motif->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Motif'), ['action' => 'delete', $motif->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motif->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Motifs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motif'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demandes'), ['controller' => 'Demandes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande'), ['controller' => 'Demandes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="motifs view large-9 medium-8 columns content">
    <h3><?= h($motif->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($motif->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($motif->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Demandes') ?></h4>
        <?php if (!empty($motif->demandes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Motif Id') ?></th>
                <th scope="col"><?= __('Demandeur Id') ?></th>
                <th scope="col"><?= __('User Valide Id') ?></th>
                <th scope="col"><?= __('Numero Demande') ?></th>
                <th scope="col"><?= __('Etat Demande') ?></th>
                <th scope="col"><?= __('Destination') ?></th>
                <th scope="col"><?= __('Text Justificatif') ?></th>
                <th scope="col"><?= __('Documents Justificatif') ?></th>
                <th scope="col"><?= __('Commentaire Validation') ?></th>
                <th scope="col"><?= __('Nbre Jours') ?></th>
                <th scope="col"><?= __('Date Depart') ?></th>
                <th scope="col"><?= __('Date Demande') ?></th>
                <th scope="col"><?= __('Time Demande') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($motif->demandes as $demandes): ?>
            <tr>
                <td><?= h($demandes->id) ?></td>
                <td><?= h($demandes->motif_id) ?></td>
                <td><?= h($demandes->demandeur_id) ?></td>
                <td><?= h($demandes->user_valide_id) ?></td>
                <td><?= h($demandes->numero_demande) ?></td>
                <td><?= h($demandes->etat_demande) ?></td>
                <td><?= h($demandes->destination) ?></td>
                <td><?= h($demandes->text_justificatif) ?></td>
                <td><?= h($demandes->documents_justificatif) ?></td>
                <td><?= h($demandes->commentaire_validation) ?></td>
                <td><?= h($demandes->nbre_jours) ?></td>
                <td><?= h($demandes->date_depart) ?></td>
                <td><?= h($demandes->date_demande) ?></td>
                <td><?= h($demandes->time_demande) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Demandes', 'action' => 'view', $demandes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Demandes', 'action' => 'edit', $demandes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Demandes', 'action' => 'delete', $demandes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
