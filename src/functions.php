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

namespace Boo\Emoji;

function contains_emoji(string $string): bool
{
    return preg_match(EmojiRegex::getSingleEmojiRegex(), $string) === 1;
}

function is_pure_emoji_string(string $string): bool
{
    return preg_match(EmojiRegex::getPureEmojiAndWhitespaceRegex(), $string) === 1;
}
