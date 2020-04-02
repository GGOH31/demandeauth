<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Groupes Model
 *
 * @property \App\Model\Table\UtilisateursTable&\Cake\ORM\Association\HasMany $Utilisateurs
 *
 * @method \App\Model\Entity\Groupe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Groupe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Groupe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Groupe|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Groupe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Groupe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Groupe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Groupe findOrCreate($search, callable $callback = null, $options = [])
 */
class GroupesTable extends Table
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

        $this->setTable('groupes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Utilisateurs', [
            'foreignKey' => 'groupe_id',
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
            ->scalar('libelle')
            ->maxLength('libelle', 250)
            ->allowEmptyString('libelle')
            ->add('libelle', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('role_visite')
            ->notEmptyString('role_visite');

        $validator
            ->scalar('role_valide')
            ->notEmptyString('role_valide');

        $validator
            ->scalar('role_add')
            ->notEmptyString('role_add');

        $validator
            ->scalar('role_all')
            ->notEmptyString('role_all');

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
        $rules->add($rules->isUnique(['libelle']));

        return $rules;
    }
}
