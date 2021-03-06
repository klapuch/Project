<?php
declare(strict_types = 1);
namespace Klapuch\Project\TestCase;

use Tester;

abstract class Mockery extends Tester\TestCase {
	final protected function mock(string $class): \Mockery\MockInterface {
		return \Mockery::mock($class);
	}

	protected function tearDown(): void {
		parent::tearDown();
		\Mockery::close();
	}
}