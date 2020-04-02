<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Demande Entity
 *
 * @property int $id
 * @property int $motif_id
 * @property int $demandeur_id
 * @property int|null $user_valide_id
 * @property int $numero_demande
 * @property string $etat_demande
 * @property string $destination
 * @property string|null $text_justificatif
 * @property string|null $documents_justificatif
 * @property string|null $commentaire_validation
 * @property int $nbre_jours
 * @property \Cake\I18n\FrozenDate $date_depart
 * @property \Cake\I18n\FrozenDate $date_demande
 * @property \Cake\I18n\FrozenTime $time_demande
 *
 * @property \App\Model\Entity\Motif $motif
 * @property \App\Model\Entity\Demandeur $demandeur
 * @property \App\Model\Entity\Utilisateur $utilisateur
 */
class Demande extends Entity
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
        'motif_id' => true,
        'demandeur_id' => true,
        'user_valide_id' => true,
        'numero_demande' => true,
        'etat_demande' => true,
        'destination' => true,
        'text_justificatif' => true,
        'documents_justificatif' => true,
        'commentaire_validation' => true,
        'nbre_jours' => true,
        'date_depart' => true,
        'date_demande' => true,
        'time_demande' => true,
        'motif' => true,
        'demandeur' => true,
        'utilisateur' => true,
    ];
}
