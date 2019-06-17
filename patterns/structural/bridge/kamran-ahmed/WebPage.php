<?php
namespace Patterns\Structural\Bridge\KamranAhmed;

interface WebPage {
	public function __construct(Theme $theme);
	public function getContent(): string;
}
