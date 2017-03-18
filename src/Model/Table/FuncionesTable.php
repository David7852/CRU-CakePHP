<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funciones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Coordinaciones
 * @property \Cake\ORM\Association\BelongsToMany $Miembros
 *
 * @method \App\Model\Entity\Funcion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Funcion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Funcion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Funcion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcion findOrCreate($search, callable $callback = null, $options = [])
 */
class FuncionesTable extends Table
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

        $this->table('funciones');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Coordinaciones', [
            'foreignKey' => 'coordinacion_id'
        ]);
        $this->belongsToMany('Miembros', [
            'foreignKey' => 'funcion_id',
            'targetForeignKey' => 'miembro_id',
            'joinTable' => 'funciones_miembros'
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
            ->allowEmpty('nombre');

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
        $rules->add($rules->existsIn(['coordinacion_id'], 'Coordinaciones'));

        return $rules;
    }
}
