<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demandeur $demandeur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Demandeurs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Communes'), ['controller' => 'Communes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commune'), ['controller' => 'Communes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demandes'), ['controller' => 'Demandes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demande'), ['controller' => 'Demandes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandeurs form large-9 medium-8 columns content">
    <?= $this->Form->create($demandeur) ?>
    <fieldset>
        <legend><?= __('Add Demandeur') ?></legend>
        <?php
            echo $this->Form->control('commune_id', ['options' => $communes]);
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('date_naissance');
            echo $this->Form->control('lieu_naissance');
            echo $this->Form->control('situation_geo');
            echo $this->Form->control('email');
            echo $this->Form->control('contact');
            echo $this->Form->control('type_carte_identite');
            echo $this->Form->control('numero_cartee_identite');
            echo $this->Form->control('titre');
            echo $this->Form->control('civilite');
            echo $this->Form->control('code_unique');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
