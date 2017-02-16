<?php
declare(strict_types=1);

/*
 * This file is part of the Emoji package.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boo\Emoji\Tests;

use PHPUnit\Framework\TestCase;
use function Boo\Emoji\contains_emoji;
use function Boo\Emoji\is_pure_emoji_string;

final class FunctionsTest extends TestCase
{
    public function testContainsEmojiString() {
        $this->assertTrue(contains_emoji('Emoji: 😔'));
        $this->assertTrue(contains_emoji('Emoji: 🇨🇦'));
        $this->assertTrue(contains_emoji('Emoji: 👨‍👨‍👧‍👧'));
        $this->assertTrue(contains_emoji('Emoji: 0️⃣'));
        $this->assertTrue(contains_emoji('Emoji: 👶🏿'));
        $this->assertTrue(contains_emoji('Emoji: 👨‍👩‍👧‍👦⃠'));
        $this->assertTrue(contains_emoji('Emoji: 😔😔'));
        $this->assertTrue(contains_emoji('Emoji:  😔 😔 '));
        $this->assertFalse(contains_emoji('Emoji: not here!'));
    }

    public function testIsPureEmojiString() {
        $this->assertTrue(is_pure_emoji_string('😔'));
        $this->assertTrue(is_pure_emoji_string('🇨🇦'));
        $this->assertTrue(is_pure_emoji_string('👨‍👨‍👧‍👧'));
        $this->assertTrue(is_pure_emoji_string('0️⃣'));
        $this->assertTrue(is_pure_emoji_string('👶🏿'));
        $this->assertTrue(is_pure_emoji_string('👨‍👩‍👧‍👦⃠'));
        $this->assertTrue(is_pure_emoji_string('😔😔'));
        $this->assertTrue(is_pure_emoji_string(' 😔 😔 '));
        $this->assertFalse(is_pure_emoji_string('👌 job!'));
        $this->assertFalse(is_pure_emoji_string('Nice job!'));
        $this->assertFalse(is_pure_emoji_string('#'));
        $this->assertFalse(is_pure_emoji_string('0'));
    }
}
