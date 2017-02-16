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

/**
 * EmojiRegex
 */
final class EmojiRegex
{
    use EmojiDataTrait;

    /**
     * @var string
     */
    private static $emojiPattern;

    public static function getMultiEmojiAndWhitespaceRegex(): string
    {
        return '/'.self::getMultiEmojiAndWhitespacePattern().'/u';
    }

    public static function getMultiEmojiRegex(): string
    {
        return '/'.self::getMultiEmojiPattern().'/u';
    }

    public static function getPureEmojiAndWhitespaceRegex(): string
    {
        return '/'.self::getPureEmojiAndWhitespacePattern().'/u';
    }

    public static function getSingleEmojiRegex(): string
    {
        return '/'.self::getSingleEmojiPattern().'/u';
    }

    private static function getMultiEmojiAndWhitespacePattern(): string
    {
        return '(?:(?:\s*('.self::getMultiEmojiPattern().'))+\s*)';
    }

    private static function getMultiEmojiPattern(): string
    {
        return '(?:('.self::getSingleEmojiPattern().')+)';
    }

    private static function getPureEmojiAndWhitespacePattern(): string
    {
        return '^('.self::getMultiEmojiAndWhitespacePattern().')$';
    }

    private static function getSingleEmojiPattern(): string
    {
        if (self::$emojiPattern !== null) {
            return self::$emojiPattern;
        }

        // The "emoji" group needs to be followed by a special character to be rendered like emoji.
        $emojiVariants = '(?:(?:('.implode('|', self::$patterns).'))\x{FE0F})';

        // Emoji can be followed by optional combining marks. The standard
        // says only keycaps and backslash are likely to be supported.
        $combiningMarks = '[\x{20E3}\x{20E0}]';

        // "Presentation" characters are rendered as emoji by default and need no variant.
        $emojiPresentation = '('.implode('|', self::$presentationPatterns).')';

        // Some other emoji are sequences of characters, joined with "Zero Width Joiner"
        // characters. We want the longest match, so we sort these in reverse order.
        $zwjSequences = implode('|', array_reverse(self::$zeroWidthJoinerSequencePatterns));
        $otherSequences = implode('|', self::$sequencePatterns);

        return self::$emojiPattern = implode('|', [
            '(?:(?:('.$zwjSequences.')',
            '('.$otherSequences.')',
            '('.$emojiVariants.')',
            '('.$emojiPresentation.'))('.$combiningMarks.')?)'
        ]);
    }
}
