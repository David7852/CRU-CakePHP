<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FuncionesMiembros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Funciones
 * @property \Cake\ORM\Association\BelongsTo $Miembros
 *
 * @method \App\Model\Entity\FuncionesMiembro get($primaryKey, $options = [])
 * @method \App\Model\Entity\FuncionesMiembro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FuncionesMiembro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FuncionesMiembro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuncionesMiembro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FuncionesMiembro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FuncionesMiembro findOrCreate($search, callable $callback = null, $options = [])
 */
class FuncionesMiembrosTable extends Table
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

        $this->table('funciones_miembros');
        $this->displayField('funcion_id');
        $this->primaryKey(['funcion_id', 'miembro_id']);

        $this->belongsTo('Funciones', [
            'foreignKey' => 'funcion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Miembros', [
            'foreignKey' => 'miembro_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['funcion_id'], 'Funciones'));
        $rules->add($rules->existsIn(['miembro_id'], 'Miembros'));

        return $rules;
    }
}
