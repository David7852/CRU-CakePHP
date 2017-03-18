<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Abonos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Miembros
 * @property \Cake\ORM\Association\BelongsTo $Balances
 * @property \Cake\ORM\Association\BelongsTo $Mensualidades
 *
 * @method \App\Model\Entity\Abono get($primaryKey, $options = [])
 * @method \App\Model\Entity\Abono newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Abono[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Abono|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Abono patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Abono[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Abono findOrCreate($search, callable $callback = null, $options = [])
 */
class AbonosTable extends Table
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

        $this->table('abonos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Miembros', [
            'foreignKey' => 'miembro_id'
        ]);
        $this->belongsTo('Balances', [
            'foreignKey' => 'balance_id'
        ]);
        $this->belongsTo('Mensualidades', [
            'foreignKey' => 'mensualidad_id'
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
            ->numeric('monto_abonado')
            ->requirePresence('monto_abonado', 'create')
            ->notEmpty('monto_abonado');

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
        $rules->add($rules->existsIn(['miembro_id'], 'Miembros'));
        $rules->add($rules->existsIn(['balance_id'], 'Balances'));
        $rules->add($rules->existsIn(['mensualidad_id'], 'Mensualidades'));

        return $rules;
    }
}
