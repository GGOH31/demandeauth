<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Groupe $groupe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Groupe'), ['action' => 'edit', $groupe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Groupe'), ['action' => 'delete', $groupe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groupes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Groupe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groupes view large-9 medium-8 columns content">
    <h3><?= h($groupe->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($groupe->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role Visite') ?></th>
            <td><?= h($groupe->role_visite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role Valide') ?></th>
            <td><?= h($groupe->role_valide) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role Add') ?></th>
            <td><?= h($groupe->role_add) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role All') ?></th>
            <td><?= h($groupe->role_all) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($groupe->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Utilisateurs') ?></h4>
        <?php if (!empty($groupe->utilisateurs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Groupe Id') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Prenom') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Contact') ?></th>
                <th scope="col"><?= __('Titre') ?></th>
                <th scope="col"><?= __('Civilite') ?></th>
                <th scope="col"><?= __('Etat') ?></th>
                <th scope="col"><?= __('Visibilite') ?></th>
                <th scope="col"><?= __('Login') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($groupe->utilisateurs as $utilisateurs): ?>
            <tr>
                <td><?= h($utilisateurs->id) ?></td>
                <td><?= h($utilisateurs->groupe_id) ?></td>
                <td><?= h($utilisateurs->nom) ?></td>
                <td><?= h($utilisateurs->prenom) ?></td>
                <td><?= h($utilisateurs->email) ?></td>
                <td><?= h($utilisateurs->contact) ?></td>
                <td><?= h($utilisateurs->titre) ?></td>
                <td><?= h($utilisateurs->civilite) ?></td>
                <td><?= h($utilisateurs->etat) ?></td>
                <td><?= h($utilisateurs->visibilite) ?></td>
                <td><?= h($utilisateurs->login) ?></td>
                <td><?= h($utilisateurs->password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Utilisateurs', 'action' => 'view', $utilisateurs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Utilisateurs', 'action' => 'edit', $utilisateurs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Utilisateurs', 'action' => 'delete', $utilisateurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateurs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
