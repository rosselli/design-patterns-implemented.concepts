<?php
namespace Patterns\Creational\Singleton\KamranAhmed;

require 'vendor/autoload.php';

final class President {
	private static $instance;

	# Hide the constructor
	private function __construct(){}

	public static function getInstance(): President{
		if (!self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	# Disable cloning
	private function __clone(){}

	# Disable unserialize
	private function __wakeup() {}
}