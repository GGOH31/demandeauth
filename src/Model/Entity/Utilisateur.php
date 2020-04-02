<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Utilisateur Entity
 *
 * @property int $id
 * @property int $groupe_id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $contact
 * @property string $titre
 * @property string $civilite
 * @property string $etat
 * @property string $visibilite
 * @property string $login
 * @property string $password
 *
 * @property \App\Model\Entity\Groupe $groupe
 */
class Utilisateur extends Entity
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
        'groupe_id' => true,
        'nom' => true,
        'prenom' => true,
        'email' => true,
        'contact' => true,
        'titre' => true,
        'civilite' => true,
        'etat' => true,
        'visibilite' => true,
        'login' => true,
        'password' => true,
        'groupe' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
