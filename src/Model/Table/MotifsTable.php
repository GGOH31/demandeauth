<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Motifs Model
 *
 * @property \App\Model\Table\DemandesTable&\Cake\ORM\Association\HasMany $Demandes
 *
 * @method \App\Model\Entity\Motif get($primaryKey, $options = [])
 * @method \App\Model\Entity\Motif newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Motif[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Motif|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motif saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motif patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Motif[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Motif findOrCreate($search, callable $callback = null, $options = [])
 */
class MotifsTable extends Table
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

        $this->setTable('motifs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Demandes', [
            'foreignKey' => 'motif_id',
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
