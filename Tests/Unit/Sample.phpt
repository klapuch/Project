<?php
declare(strict_types = 1);
/**
 * @testCase
 * @phpVersion > 7.1
 */
namespace Klapuch\Project\Unit;

use Tester;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

final class Sample extends Tester\TestCase {
	public function testProject() {
		Assert::true(true);
	}
}


(new Sample())->run();