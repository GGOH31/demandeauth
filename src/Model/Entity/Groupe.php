<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Groupe Entity
 *
 * @property int $id
 * @property string|null $libelle
 * @property string $role_visite
 * @property string $role_valide
 * @property string $role_add
 * @property string $role_all
 *
 * @property \App\Model\Entity\Utilisateur[] $utilisateurs
 */
class Groupe extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'libelle' => true,
        'role_visite' => true,
        'role_valide' => true,
        'role_add' => true,
        'role_all' => true,
        'utilisateurs' => true,
    ];
}
