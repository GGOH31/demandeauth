<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demande $demande
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Demandes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Motifs'), ['controller' => 'Motifs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motif'), ['controller' => 'Motifs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demandeurs'), ['controller' => 'Demandeurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demandeur'), ['controller' => 'Demandeurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandes form large-9 medium-8 columns content">
    <?= $this->Form->create($demande) ?>
    <fieldset>
        <legend><?= __('Add Demande') ?></legend>
        <?php
            echo $this->Form->control('motif_id', ['options' => $motifs]);
            echo $this->Form->control('demandeur_id', ['options' => $demandeurs]);
            echo $this->Form->control('user_valide_id', ['options' => $utilisateurs, 'empty' => true]);
            echo $this->Form->control('numero_demande');
            echo $this->Form->control('etat_demande');
            echo $this->Form->control('destination');
            echo $this->Form->control('text_justificatif');
            echo $this->Form->control('documents_justificatif');
            echo $this->Form->control('commentaire_validation');
            echo $this->Form->control('nbre_jours');
            echo $this->Form->control('date_depart');
            echo $this->Form->control('date_demande');
            echo $this->Form->control('time_demande');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
