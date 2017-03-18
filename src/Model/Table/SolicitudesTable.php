<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solicitudes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Proyectos
 * @property \Cake\ORM\Association\BelongsTo $Miembros
 * @property \Cake\ORM\Association\BelongsTo $Componentes
 *
 * @method \App\Model\Entity\Solicitud get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solicitud newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Solicitud[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitud|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitud patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitud[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitud findOrCreate($search, callable $callback = null, $options = [])
 */
class SolicitudesTable extends Table
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

        $this->table('solicitudes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Proyectos', [
            'foreignKey' => 'proyecto_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Miembros', [
            'foreignKey' => 'miembro_id'
        ]);
        $this->belongsTo('Componentes', [
            'foreignKey' => 'componente_id',
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

        $validator
            ->allowEmpty('motivo');

        $validator
            ->date('fecha_solicitud')
            ->allowEmpty('fecha_solicitud');

        $validator
            ->allowEmpty('estado');

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
        $rules->add($rules->existsIn(['proyecto_id'], 'Proyectos'));
        $rules->add($rules->existsIn(['miembro_id'], 'Miembros'));
        $rules->add($rules->existsIn(['componente_id'], 'Componentes'));

        return $rules;
    }
}
