<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Demandes Model
 *
 * @property \App\Model\Table\MotifsTable&\Cake\ORM\Association\BelongsTo $Motifs
 * @property \App\Model\Table\DemandeursTable&\Cake\ORM\Association\BelongsTo $Demandeurs
 * @property \App\Model\Table\UtilisateursTable&\Cake\ORM\Association\BelongsTo $Utilisateurs
 *
 * @method \App\Model\Entity\Demande get($primaryKey, $options = [])
 * @method \App\Model\Entity\Demande newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Demande[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Demande|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Demande saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Demande patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Demande[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Demande findOrCreate($search, callable $callback = null, $options = [])
 */
class DemandesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('demandes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Motifs', [
            'foreignKey' => 'motif_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Demandeurs', [
            'foreignKey' => 'demandeur_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Utilisateurs', [
            'foreignKey' => 'user_valide_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('numero_demande')
            ->requirePresence('numero_demande', 'create')
            ->notEmptyString('numero_demande');

        $validator
            ->scalar('etat_demande')
            ->notEmptyString('etat_demande');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 250)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->scalar('text_justificatif')
            ->allowEmptyString('text_justificatif');

        $validator
            ->scalar('documents_justificatif')
            ->maxLength('documents_justificatif', 255)
            ->allowEmptyString('documents_justificatif');

        $validator
            ->scalar('commentaire_validation')
            ->allowEmptyString('commentaire_validation');

        $validator
            ->integer('nbre_jours')
            ->requirePresence('nbre_jours', 'create')
            ->notEmptyString('nbre_jours');

        $validator
            ->date('date_depart')
            ->requirePresence('date_depart', 'create')
            ->notEmptyDate('date_depart');

        $validator
            ->date('date_demande')
            ->requirePresence('date_demande', 'create')
            ->notEmptyDate('date_demande');

        $validator
            ->time('time_demande')
            ->requirePresence('time_demande', 'create')
            ->notEmptyTime('time_demande');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['motif_id'], 'Motifs'));
        $rules->add($rules->existsIn(['demandeur_id'], 'Demandeurs'));
        $rules->add($rules->existsIn(['user_valide_id'], 'Utilisateurs'));

        return $rules;
    }
}
