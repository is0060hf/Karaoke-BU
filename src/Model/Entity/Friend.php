<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Friend Entity
 *
 * @property int $id
 * @property int $src_friend
 * @property int $dest_friend
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Friend extends Entity {
	/**
	 * Fields that can be mass assigned using newEntity() or patchEntity().
	 *
	 * Note that when '*' is set to true, this allows all unspecified fields to
	 * be mass assigned. For security purposes, it is advised to set '*' to false
	 * (or remove it), and explicitly make individual fields accessible as needed.
	 *
	 * @var array
	 */
	protected $_accessible = ['src_friend' => true,
		'dest_friend' => true,
		'created' => true,
		'modified' => true];
}
