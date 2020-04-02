<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Demandeur Entity
 *
 * @property int $id
 * @property int $commune_id
 * @property string $nom
 * @property string $prenom
 * @property \Cake\I18n\FrozenDate $date_naissance
 * @property \Cake\I18n\FrozenDate $lieu_naissance
 * @property string $situation_geo
 * @property string $email
 * @property string $contact
 * @property string $type_carte_identite
 * @property string $numero_cartee_identite
 * @property string $titre
 * @property string $civilite
 * @property string $code_unique
 *
 * @property \App\Model\Entity\Commune $commune
 * @property \App\Model\Entity\Demande[] $demandes
 */
class Demandeur extends Entity
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
        'commune_id' => true,
        'nom' => true,
        'prenom' => true,
        'date_naissance' => true,
        'lieu_naissance' => true,
        'situation_geo' => true,
        'email' => true,
        'contact' => true,
        'type_carte_identite' => true,
        'numero_cartee_identite' => true,
        'titre' => true,
        'civilite' => true,
        'code_unique' => true,
        'commune' => true,
        'demandes' => true,
    ];
}
