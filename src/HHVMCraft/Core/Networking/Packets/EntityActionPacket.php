<?php
/**
 * This file is part of HHVMCraft - a Minecraft server implemented in PHP
 *
 * @copyright Andrew Vy 2015
 * @license MIT <https://github.com/andrewvy/HHVMCraft/blob/master/LICENSE.md>
 */
namespace HHVMCraft\Core\Networking\Packets;

class EntityActionPacket {
	const id = 0x13;

	public $eid;
	public $action;

	public function readPacket($StreamWrapper) {
		$this->eid = $StreamWrapper->readInt();
		$this->action = $StreamWrapper->readUInt8();
	}

}