<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clases Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Miembros
 *
 * @method \App\Model\Entity\Clase get($primaryKey, $options = [])
 * @method \App\Model\Entity\Clase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Clase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Clase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clase findOrCreate($search, callable $callback = null, $options = [])
 */
class ClasesTable extends Table
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

        $this->table('clases');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Miembros', [
            'foreignKey' => 'clase_id',
            'targetForeignKey' => 'miembro_id',
            'joinTable' => 'miembros_clases'
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
            ->requirePresence('tema', 'create')
            ->notEmpty('tema');

        $validator
            ->allowEmpty('horario');

        $validator
            ->numeric('costo')
            ->allowEmpty('costo');

        $validator
            ->allowEmpty('estado');

        return $validator;
    }
}
