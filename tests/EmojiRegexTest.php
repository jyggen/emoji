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

use Boo\Emoji\EmojiRegex;
use PHPUnit\Framework\TestCase;

final class EmojiRegexTest extends TestCase
{
    public function testSingleEmoji()
    {
        $string = 'simple: 👍; fitzpatrick: 👎🏼 flag: 🇨🇦 keycap: 9️⃣0️⃣ sequence 👨‍👩‍👧‍👧 sequence with combining mark: 👨‍👩‍👧‍👦⃠';

        $this->assertNotFalse(preg_match_all(EmojiRegex::getSingleEmojiRegex(), $string, $matches));
        $this->assertSame(['👍', '👎🏼', '🇨🇦', '9️⃣', '0️⃣', '👨‍👩‍👧‍👧', '👨‍👩‍👧‍👦⃠'], $matches[0]);
    }

    public function testMultiEmoji()
    {
        $string = 'simple: 👍 👎🏼😳 flag: 🇨🇦 keycap: 9️⃣0️⃣ sequence 👨‍👩‍👧‍👧 sequence with combining mark: 👨‍👩‍👧‍👦⃠';

        $this->assertNotFalse(preg_match_all(EmojiRegex::getMultiEmojiRegex(), $string, $matches));
        $this->assertSame(['👍', '👎🏼😳', '🇨🇦', '9️⃣0️⃣', '👨‍👩‍👧‍👧', '👨‍👩‍👧‍👦⃠'], $matches[0]);
    }

    public function testMultiEmojiAndWhitespace()
    {
        $string = 'simple: 👍 👎🏼😳 flag: 🇨🇦 keycap: 9️⃣0️⃣ no key caps: 90 sequence: 👨‍👩‍👧‍👧 sequence with combining mark: 👨‍👩‍👧‍👦⃠';

        $this->assertNotFalse(preg_match_all(EmojiRegex::getMultiEmojiAndWhitespaceRegex(), $string, $matches));
        $this->assertSame([' 👍 👎🏼😳 ', ' 🇨🇦 ', ' 9️⃣0️⃣ ', ' 👨‍👩‍👧‍👧 ', ' 👨‍👩‍👧‍👦⃠'], $matches[0]);
    }
}
