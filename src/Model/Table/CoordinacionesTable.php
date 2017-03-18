<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coordinaciones Model
 *
 * @property \Cake\ORM\Association\HasMany $Funciones
 * @property \Cake\ORM\Association\BelongsToMany $Miembros
 *
 * @method \App\Model\Entity\Coordinacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coordinacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Coordinacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coordinacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coordinacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coordinacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coordinacion findOrCreate($search, callable $callback = null, $options = [])
 */
class CoordinacionesTable extends Table
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

        $this->table('coordinaciones');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Funciones', [
            'foreignKey' => 'coordinacion_id'
        ]);
        $this->belongsToMany('Miembros', [
            'foreignKey' => 'coordinacion_id',
            'targetForeignKey' => 'miembro_id',
            'joinTable' => 'miembros_coordinaciones'
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
            ->allowEmpty('nombre');

        return $validator;
    }
}
