<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SecondHand Model
 *
 * @property \App\Model\Table\DealerTable|\Cake\ORM\Association\BelongsTo $Dealer
 * @property \App\Model\Table\VehicleModelTable|\Cake\ORM\Association\BelongsTo $VehicleModel
 *
 * @method \App\Model\Entity\SecondHand get($primaryKey, $options = [])
 * @method \App\Model\Entity\SecondHand newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SecondHand[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SecondHand|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SecondHand patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SecondHand[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SecondHand findOrCreate($search, callable $callback = null, $options = [])
 */
class SecondHandTable extends Table
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

        $this->setTable('second_hand');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Dealer', [
            'foreignKey' => 'dealer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('VehicleModel', [
            'foreignKey' => 'vehicle_model_id',
            'joinType' => 'INNER'
        ]);
        
        $this->belongsToMany('Picture', [
            'foreignKey' => 'second_hand_id',
            'targetForeignKey' => 'picture_id',
            'joinTable' => 'picture_second_hand'
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
            ->allowEmpty('id', 'create');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->integer('km')
            ->requirePresence('km', 'create')
            ->notEmpty('km');

        $validator
            ->date('first_registration_date')
            ->requirePresence('first_registration_date', 'create')
            ->notEmpty('first_registration_date');

        $validator
            ->integer('nb_owners')
            ->requirePresence('nb_owners', 'create')
            ->notEmpty('nb_owners');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->boolean('is_approved')
            ->requirePresence('is_approved', 'create')
            ->notEmpty('is_approved');

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
        $rules->add($rules->existsIn(['dealer_id'], 'Dealer'));
        $rules->add($rules->existsIn(['vehicle_model_id'], 'VehicleModel'));

        return $rules;
    }
}
