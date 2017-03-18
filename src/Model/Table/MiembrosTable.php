<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Miembros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Contactos
 * @property \Cake\ORM\Association\HasMany $Abonos
 * @property \Cake\ORM\Association\HasMany $Solicitudes
 * @property \Cake\ORM\Association\HasMany $Utilerias
 * @property \Cake\ORM\Association\BelongsToMany $Funciones
 * @property \Cake\ORM\Association\BelongsToMany $Clases
 * @property \Cake\ORM\Association\BelongsToMany $Coordinaciones
 * @property \Cake\ORM\Association\BelongsToMany $Cursos
 * @property \Cake\ORM\Association\BelongsToMany $Eventos
 * @property \Cake\ORM\Association\BelongsToMany $Grupos
 *
 * @method \App\Model\Entity\Miembro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Miembro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Miembro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Miembro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Miembro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Miembro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Miembro findOrCreate($search, callable $callback = null, $options = [])
 */
class MiembrosTable extends Table
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

        $this->table('miembros');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Contactos', [
            'foreignKey' => 'contacto_id'
        ]);
        $this->hasMany('Abonos', [
            'foreignKey' => 'miembro_id'
        ]);
        $this->hasMany('Solicitudes', [
            'foreignKey' => 'miembro_id'
        ]);
        $this->hasMany('Utilerias', [
            'foreignKey' => 'miembro_id'
        ]);
        $this->belongsToMany('Funciones', [
            'foreignKey' => 'miembro_id',
            'targetForeignKey' => 'funcion_id',
            'joinTable' => 'funciones_miembros'
        ]);
        $this->belongsToMany('Clases', [
            'foreignKey' => 'miembro_id',
            'targetForeignKey' => 'clase_id',
            'joinTable' => 'miembros_clases'
        ]);
        $this->belongsToMany('Coordinaciones', [
            'foreignKey' => 'miembro_id',
            'targetForeignKey' => 'coordinacion_id',
            'joinTable' => 'miembros_coordinaciones'
        ]);
        $this->belongsToMany('Cursos', [
            'foreignKey' => 'miembro_id',
            'targetForeignKey' => 'curso_id',
            'joinTable' => 'miembros_cursos'
        ]);
        $this->belongsToMany('Eventos', [
            'foreignKey' => 'miembro_id',
            'targetForeignKey' => 'evento_id',
            'joinTable' => 'miembros_eventos'
        ]);
        $this->belongsToMany('Grupos', [
            'foreignKey' => 'miembro_id',
            'targetForeignKey' => 'grupo_id',
            'joinTable' => 'miembros_grupos'
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
            ->requirePresence('nombre_de_usuario', 'create')
            ->notEmpty('nombre_de_usuario')
            ->add('nombre_de_usuario', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('clave', 'create')
            ->notEmpty('clave');

        $validator
            ->allowEmpty('foto');

        $validator
            ->allowEmpty('correo')
            ->add('correo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('fecha_de_registro')
            ->allowEmpty('fecha_de_registro');

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
        $rules->add($rules->isUnique(['nombre_de_usuario']));
        $rules->add($rules->isUnique(['correo']));
        $rules->add($rules->existsIn(['contacto_id'], 'Contactos'));

        return $rules;
    }
}
