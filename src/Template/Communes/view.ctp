<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commune $commune
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Commune'), ['action' => 'edit', $commune->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Commune'), ['action' => 'delete', $commune->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commune->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Communes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commune'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demandeurs'), ['controller' => 'Demandeurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demandeur'), ['controller' => 'Demandeurs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="communes view large-9 medium-8 columns content">
    <h3><?= h($commune->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($commune->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($commune->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Demandeurs') ?></h4>
        <?php if (!empty($commune->demandeurs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Commune Id') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Prenom') ?></th>
                <th scope="col"><?= __('Date Naissance') ?></th>
                <th scope="col"><?= __('Lieu Naissance') ?></th>
                <th scope="col"><?= __('Situation Geo') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Contact') ?></th>
                <th scope="col"><?= __('Type Carte Identite') ?></th>
                <th scope="col"><?= __('Numero Cartee Identite') ?></th>
                <th scope="col"><?= __('Titre') ?></th>
                <th scope="col"><?= __('Civilite') ?></th>
                <th scope="col"><?= __('Code Unique') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($commune->demandeurs as $demandeurs): ?>
            <tr>
                <td><?= h($demandeurs->id) ?></td>
                <td><?= h($demandeurs->commune_id) ?></td>
                <td><?= h($demandeurs->nom) ?></td>
                <td><?= h($demandeurs->prenom) ?></td>
                <td><?= h($demandeurs->date_naissance) ?></td>
                <td><?= h($demandeurs->lieu_naissance) ?></td>
                <td><?= h($demandeurs->situation_geo) ?></td>
                <td><?= h($demandeurs->email) ?></td>
                <td><?= h($demandeurs->contact) ?></td>
                <td><?= h($demandeurs->type_carte_identite) ?></td>
                <td><?= h($demandeurs->numero_cartee_identite) ?></td>
                <td><?= h($demandeurs->titre) ?></td>
                <td><?= h($demandeurs->civilite) ?></td>
                <td><?= h($demandeurs->code_unique) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Demandeurs', 'action' => 'view', $demandeurs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Demandeurs', 'action' => 'edit', $demandeurs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Demandeurs', 'action' => 'delete', $demandeurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeurs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
