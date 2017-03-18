<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Utilerias Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Eventos
 * @property \Cake\ORM\Association\BelongsTo $Miembros
 *
 * @method \App\Model\Entity\Utileria get($primaryKey, $options = [])
 * @method \App\Model\Entity\Utileria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Utileria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Utileria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Utileria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Utileria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Utileria findOrCreate($search, callable $callback = null, $options = [])
 */
class UtileriasTable extends Table
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

        $this->table('utilerias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Eventos', [
            'foreignKey' => 'evento_id'
        ]);
        $this->belongsTo('Miembros', [
            'foreignKey' => 'miembro_id'
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
        $rules->add($rules->existsIn(['evento_id'], 'Eventos'));
        $rules->add($rules->existsIn(['miembro_id'], 'Miembros'));

        return $rules;
    }
}
