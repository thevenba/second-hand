<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PictureSecondHand Model
 *
 * @property \App\Model\Table\SecondHandTable|\Cake\ORM\Association\BelongsTo $SecondHand
 * @property \App\Model\Table\PictureTable|\Cake\ORM\Association\BelongsTo $Picture
 *
 * @method \App\Model\Entity\PictureSecondHand get($primaryKey, $options = [])
 * @method \App\Model\Entity\PictureSecondHand newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PictureSecondHand[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PictureSecondHand|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PictureSecondHand patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PictureSecondHand[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PictureSecondHand findOrCreate($search, callable $callback = null, $options = [])
 */
class PictureSecondHandTable extends Table
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

        $this->setTable('picture_second_hand');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('SecondHand', [
            'foreignKey' => 'second_hand_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Picture', [
            'foreignKey' => 'picture_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['second_hand_id'], 'SecondHand'));
        $rules->add($rules->existsIn(['picture_id'], 'Picture'));

        return $rules;
    }
}
