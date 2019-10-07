<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paiement Entity
 *
 * @property int $id
 * @property int $application_id
 * @property int $type_paiement_id
 * @property string $numero_carte
 * @property int|null $evaluation_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Application $application
 * @property \App\Model\Entity\TypesPaiement $types_paiement
 * @property \App\Model\Entity\Evaluation[] $evaluations
 */
class Paiement extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'application_id' => true,
        'type_paiement_id' => true,
        'numero_carte' => true,
        'evaluation_id' => true,
        'created' => true,
        'modified' => true,
        'application' => true,
        'types_paiement' => true,
        'evaluations' => true
    ];
}
