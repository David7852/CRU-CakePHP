<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Componentes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Modelos
 * @property \Cake\ORM\Association\HasMany $Solicitudes
 *
 * @method \App\Model\Entity\Componente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Componente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Componente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Componente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Componente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Componente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Componente findOrCreate($search, callable $callback = null, $options = [])
 */
class ComponentesTable extends Table
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

        $this->table('componentes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Modelos', [
            'foreignKey' => 'modelo_id'
        ]);
        $this->hasMany('Solicitudes', [
            'foreignKey' => 'componente_id'
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
            ->allowEmpty('observacion');

        $validator
            ->allowEmpty('dato');

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
        $rules->add($rules->existsIn(['modelo_id'], 'Modelos'));

        return $rules;
    }
}
