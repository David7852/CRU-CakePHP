<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donaciones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Contactos
 *
 * @method \App\Model\Entity\Donacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Donacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Donacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Donacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donacion findOrCreate($search, callable $callback = null, $options = [])
 */
class DonacionesTable extends Table
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

        $this->table('donaciones');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Contactos', [
            'foreignKey' => 'institucion_id'
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
            ->numeric('monto')
            ->allowEmpty('monto');

        $validator
            ->allowEmpty('descripcion');

        $validator
            ->allowEmpty('motivo');

        $validator
            ->date('fecha_de_realizacion')
            ->allowEmpty('fecha_de_realizacion');

        $validator
            ->integer('referente')
            ->allowEmpty('referente');

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
        $rules->add($rules->existsIn(['institucion_id'], 'Contactos'));

        return $rules;
    }
}
