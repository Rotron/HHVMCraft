<?php

namespace HHVMCraft\Core\Networking\Packets;

use HHVMCraft\Core\Networking\StreamWrapper;

class HandshakePacket {
	const id = 0x02;
	public $username;

	public function __construct($username = "") {
		$this->username = $username;
	}

	public function readPacket(StreamWrapper $StreamWrapper) {
		$this->username = $StreamWrapper->readString16();
	}

	public function writePacket(StreamWrapper $stream) {

	}

}
