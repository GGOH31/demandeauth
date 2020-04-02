<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Utilisateurs Model
 *
 * @property \App\Model\Table\GroupesTable&\Cake\ORM\Association\BelongsTo $Groupes
 *
 * @method \App\Model\Entity\Utilisateur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Utilisateur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Utilisateur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Utilisateur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Utilisateur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Utilisateur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Utilisateur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Utilisateur findOrCreate($search, callable $callback = null, $options = [])
 */
class UtilisateursTable extends Table
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

        $this->setTable('utilisateurs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Groupes', [
            'foreignKey' => 'groupe_id',
            'joinType' => 'INNER',
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
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('contact')
            ->maxLength('contact', 15)
            ->requirePresence('contact', 'create')
            ->notEmptyString('contact')
            ->add('contact', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
            ->scalar('etat')
            ->notEmptyString('etat');

        $validator
            ->scalar('visibilite')
            ->notEmptyString('visibilite');

        $validator
            ->scalar('login')
            ->maxLength('login', 10)
            ->requirePresence('login', 'create')
            ->notEmptyString('login')
            ->add('login', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 250)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

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
        $rules->add($rules->isUnique(['login']));
        $rules->add($rules->isUnique(['contact']));
        $rules->add($rules->existsIn(['groupe_id'], 'Groupes'));

        return $rules;
    }
}
