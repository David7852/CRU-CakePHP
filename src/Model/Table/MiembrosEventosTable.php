<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MiembrosEventos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Miembros
 * @property \Cake\ORM\Association\BelongsTo $Eventos
 *
 * @method \App\Model\Entity\MiembrosEvento get($primaryKey, $options = [])
 * @method \App\Model\Entity\MiembrosEvento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MiembrosEvento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosEvento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MiembrosEvento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosEvento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MiembrosEvento findOrCreate($search, callable $callback = null, $options = [])
 */
class MiembrosEventosTable extends Table
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

        $this->table('miembros_eventos');

        $this->belongsTo('Miembros', [
            'foreignKey' => 'miembro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Eventos', [
            'foreignKey' => 'evento_id',
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
            ->allowEmpty('confirmacion');

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
        $rules->add($rules->existsIn(['evento_id'], 'Eventos'));

        return $rules;
    }
}
