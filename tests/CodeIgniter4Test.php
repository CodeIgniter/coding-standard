<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) 2021 CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\CodingStandard\Tests;

use Nexus\CsConfig\Ruleset\RulesetInterface;
use Nexus\CsConfig\Test\AbstractRulesetTestCase;
use PhpCsFixer\Preg;

/**
 * @internal
 *
 * @covers \CodeIgniter\CodingStandard\CodeIgniter4
 */
final class CodeIgniter4Test extends AbstractRulesetTestCase
{
    protected static function createRuleset(): RulesetInterface
    {
        /** @phpstan-var class-string<RulesetInterface> $ruleset */
        $ruleset = Preg::replace('/^(CodeIgniter\\\\CodingStandard)\\\\Tests(\\\\\S+)Test/', '$1$2', self::class);

        return new $ruleset();
    }
}
