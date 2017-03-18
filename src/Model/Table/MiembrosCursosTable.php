<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MiembrosCursos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cursos
 * @property \Cake\ORM\Association\BelongsTo $Miembros
 *
 * @method \App\Model\Entity\MiembrosCurso get($primaryKey, $options = [])
 * @method \App\Model\Entity\MiembrosCurso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MiembrosCurso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosCurso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MiembrosCurso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosCurso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosCurso findOrCreate($search, callable $callback = null, $options = [])
 */
class MiembrosCursosTable extends Table
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

        $this->table('miembros_cursos');
        $this->displayField('curso_id');
        $this->primaryKey(['curso_id', 'miembro_id']);

        $this->belongsTo('Cursos', [
            'foreignKey' => 'curso_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Miembros', [
            'foreignKey' => 'miembro_id',
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
        $rules->add($rules->existsIn(['curso_id'], 'Cursos'));
        $rules->add($rules->existsIn(['miembro_id'], 'Miembros'));

        return $rules;
    }
}
