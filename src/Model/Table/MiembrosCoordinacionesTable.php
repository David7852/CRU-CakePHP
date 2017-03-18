<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MiembrosCoordinaciones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Miembros
 * @property \Cake\ORM\Association\BelongsTo $Coordinaciones
 *
 * @method \App\Model\Entity\MiembrosCoordinacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\MiembrosCoordinacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MiembrosCoordinacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosCoordinacione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MiembrosCoordinacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosCoordinacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosCoordinacione findOrCreate($search, callable $callback = null, $options = [])
 */
class MiembrosCoordinacionesTable extends Table
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

        $this->table('miembros_coordinaciones');
        $this->displayField('miembro_id');
        $this->primaryKey(['miembro_id', 'coordinacion_id']);

        $this->belongsTo('Miembros', [
            'foreignKey' => 'miembro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Coordinaciones', [
            'foreignKey' => 'coordinacion_id',
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
            ->allowEmpty('rol');

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
        $rules->add($rules->existsIn(['coordinacion_id'], 'Coordinaciones'));

        return $rules;
    }
}
