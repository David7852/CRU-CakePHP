<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MiembrosClases Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Miembros
 * @property \Cake\ORM\Association\BelongsTo $Clases
 *
 * @method \App\Model\Entity\MiembrosClase get($primaryKey, $options = [])
 * @method \App\Model\Entity\MiembrosClase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MiembrosClase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosClase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MiembrosClase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosClase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosClase findOrCreate($search, callable $callback = null, $options = [])
 */
class MiembrosClasesTable extends Table
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

        $this->table('miembros_clases');
        $this->displayField('miembro_id');
        $this->primaryKey(['miembro_id', 'clase_id']);

        $this->belongsTo('Miembros', [
            'foreignKey' => 'miembro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clases', [
            'foreignKey' => 'clase_id',
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
        $rules->add($rules->existsIn(['clase_id'], 'Clases'));

        return $rules;
    }
}
