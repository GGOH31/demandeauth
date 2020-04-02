<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Groupe $groupe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Groupes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="groupes form large-9 medium-8 columns content">
    <?= $this->Form->create($groupe) ?>
    <fieldset>
        <legend><?= __('Add Groupe') ?></legend>
        <?php
            echo $this->Form->control('libelle');
            echo $this->Form->control('role_visite');
            echo $this->Form->control('role_valide');
            echo $this->Form->control('role_add');
            echo $this->Form->control('role_all');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
