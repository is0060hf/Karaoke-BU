<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TeamChat Entity
 *
 * @property int $id
 * @property int $src_user
 * @property int $dest_team
 * @property string $context
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class TeamChat extends Entity {
	/**
	 * Fields that can be mass assigned using newEntity() or patchEntity().
	 *
	 * Note that when '*' is set to true, this allows all unspecified fields to
	 * be mass assigned. For security purposes, it is advised to set '*' to false
	 * (or remove it), and explicitly make individual fields accessible as needed.
	 *
	 * @var array
	 */
	protected $_accessible = ['src_user' => true,
		'dest_team' => true,
		'context' => true,
		'created' => true,
		'modified' => true];
}
