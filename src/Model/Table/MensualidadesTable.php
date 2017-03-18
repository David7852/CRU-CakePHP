<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mensualidades Model
 *
 * @property \Cake\ORM\Association\HasMany $Abonos
 *
 * @method \App\Model\Entity\Mensualidad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mensualidad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mensualidad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mensualidad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mensualidad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mensualidad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mensualidad findOrCreate($search, callable $callback = null, $options = [])
 */
class MensualidadesTable extends Table
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

        $this->table('mensualidades');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Abonos', [
            'foreignKey' => 'mensualidad_id'
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
            ->requirePresence('concepto', 'create')
            ->notEmpty('concepto');

        $validator
            ->numeric('monto_mensual')
            ->requirePresence('monto_mensual', 'create')
            ->notEmpty('monto_mensual');

        $validator
            ->numeric('deducion')
            ->allowEmpty('deducion');

        $validator
            ->numeric('impuesto')
            ->allowEmpty('impuesto');

        return $validator;
    }
}
