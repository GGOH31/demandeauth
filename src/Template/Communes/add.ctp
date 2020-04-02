<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commune $commune
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Communes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Demandeurs'), ['controller' => 'Demandeurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demandeur'), ['controller' => 'Demandeurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="communes form large-9 medium-8 columns content">
    <?= $this->Form->create($commune) ?>
    <fieldset>
        <legend><?= __('Add Commune') ?></legend>
        <?php
            echo $this->Form->control('libelle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
