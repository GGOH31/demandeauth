<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Demandeurs Model
 *
 * @property \App\Model\Table\CommunesTable&\Cake\ORM\Association\BelongsTo $Communes
 * @property \App\Model\Table\DemandesTable&\Cake\ORM\Association\HasMany $Demandes
 *
 * @method \App\Model\Entity\Demandeur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Demandeur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Demandeur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Demandeur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Demandeur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Demandeur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Demandeur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Demandeur findOrCreate($search, callable $callback = null, $options = [])
 */
class DemandeursTable extends Table
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

        $this->setTable('demandeurs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Communes', [
            'foreignKey' => 'commune_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Demandes', [
            'foreignKey' => 'demandeur_id',
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
            ->scalar('nom')
            ->maxLength('nom', 15)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 50)
            ->requirePresence('prenom', 'create')
            ->notEmptyString('prenom');

        $validator
            ->date('date_naissance')
            ->requirePresence('date_naissance', 'create')
            ->notEmptyDate('date_naissance');

        $validator
            ->date('lieu_naissance')
            ->requirePresence('lieu_naissance', 'create')
            ->notEmptyDate('lieu_naissance');

        $validator
            ->scalar('situation_geo')
            ->maxLength('situation_geo', 255)
            ->requirePresence('situation_geo', 'create')
            ->notEmptyString('situation_geo');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('contact')
            ->maxLength('contact', 15)
            ->requirePresence('contact', 'create')
            ->notEmptyString('contact');

        $validator
            ->scalar('type_carte_identite')
            ->requirePresence('type_carte_identite', 'create')
            ->notEmptyString('type_carte_identite');

        $validator
            ->scalar('numero_cartee_identite')
            ->maxLength('numero_cartee_identite', 50)
            ->requirePresence('numero_cartee_identite', 'create')
            ->notEmptyString('numero_cartee_identite');

        $validator
            ->scalar('titre')
            ->maxLength('titre', 250)
            ->requirePresence('titre', 'create')
            ->notEmptyString('titre');

        $validator
            ->scalar('civilite')
            ->requirePresence('civilite', 'create')
            ->notEmptyString('civilite');

        $validator
            ->scalar('code_unique')
            ->maxLength('code_unique', 50)
            ->requirePresence('code_unique', 'create')
            ->notEmptyString('code_unique')
            ->add('code_unique', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['code_unique']));
        $rules->add($rules->existsIn(['commune_id'], 'Communes'));

        return $rules;
    }
}
