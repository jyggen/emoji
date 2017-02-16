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
 * EmojiDataTrait
 *
 * DO NOT EDIT. This file was auto-generated from the Unicode data files.
 *
 * @see http://www.unicode.org/Public/emoji/4.0/
 */
trait EmojiDataTrait
{
    /**
     * Patterns that match "Emoji_Modifier_Base" characters, which are those
     * that can be modified by "Emoji_Modifier" (skintone) characters.
     *
     * @var string[]
     */
    private static $modifierBasePatterns = [
        '\x{1F385}', // 6.0  [1] (🎅)       Santa Claus
        '[\x{1F3C2}-\x{1F3C4}]', // 6.0  [3] (🏂..🏄)    snowboarder..person surfing
        '\x{1F3C7}', // 6.0  [1] (🏇)       horse racing
        '\x{1F3CA}', // 6.0  [1] (🏊)       person swimming
        '[\x{1F3CB}-\x{1F3CC}]', // 7.0  [2] (🏋️..🏌️)    person lifting weights..person golfing
        '[\x{1F442}-\x{1F443}]', // 6.0  [2] (👂..👃)    ear..nose
        '[\x{1F446}-\x{1F450}]', // 6.0 [11] (👆..👐)    backhand index pointing up..open hands
        '[\x{1F466}-\x{1F469}]', // 6.0  [4] (👦..👩)    boy..woman
        '\x{1F46E}', // 6.0  [1] (👮)       police officer
        '[\x{1F470}-\x{1F478}]', // 6.0  [9] (👰..👸)    bride with veil..princess
        '\x{1F47C}', // 6.0  [1] (👼)       baby angel
        '[\x{1F481}-\x{1F483}]', // 6.0  [3] (💁..💃)    person tipping hand..woman dancing
        '[\x{1F485}-\x{1F487}]', // 6.0  [3] (💅..💇)    nail polish..person getting haircut
        '\x{1F4AA}', // 6.0  [1] (💪)       flexed biceps
        '[\x{1F574}-\x{1F575}]', // 7.0  [2] (🕴️..🕵️)    man in business suit levitating..detective
        '\x{1F57A}', // 9.0  [1] (🕺)       man dancing
        '\x{1F590}', // 7.0  [1] (🖐️)       raised hand with fingers splayed
        '[\x{1F595}-\x{1F596}]', // 7.0  [2] (🖕..🖖)    middle finger..vulcan salute
        '[\x{1F645}-\x{1F647}]', // 6.0  [3] (🙅..🙇)    person gesturing NO..person bowing
        '[\x{1F64B}-\x{1F64F}]', // 6.0  [5] (🙋..🙏)    person raising hand..folded hands
        '\x{1F6A3}', // 6.0  [1] (🚣)       person rowing boat
        '[\x{1F6B4}-\x{1F6B6}]', // 6.0  [3] (🚴..🚶)    person biking..person walking
        '\x{1F6C0}', // 6.0  [1] (🛀)       person taking bath
        '\x{1F6CC}', // 7.0  [1] (🛌)       person in bed
        '\x{1F918}', // 8.0  [1] (🤘)       sign of the horns
        '[\x{1F919}-\x{1F91C}]', // 9.0  [4] (🤙..🤜)    call me hand..right-facing fist
        '\x{1F91E}', // 9.0  [1] (🤞)       crossed fingers
        '\x{1F926}', // 9.0  [1] (🤦)       person facepalming
        '\x{1F930}', // 9.0  [1] (🤰)       pregnant woman
        '[\x{1F933}-\x{1F939}]', // 9.0  [7] (🤳..🤹)    selfie..person juggling
        '[\x{1F93D}-\x{1F93E}]', // 9.0  [2] (🤽..🤾)    person playing water polo..person playing handball
        '\x{261D}', // 1.1  [1] (☝️)       index pointing up
        '\x{26F9}', // 5.2  [1] (⛹️)       person bouncing ball
        '[\x{270A}-\x{270B}]', // 6.0  [2] (✊..✋)    raised fist..raised hand
        '[\x{270C}-\x{270D}]', // 1.1  [2] (✌️..✍️)    victory hand..writing hand
    ];

    /**
     * Patterns that match "Emoji_Modifier" characters (Skin Tones, aka. Fitzpatrick Modifiers).
     * These modifiers follow the characters in the "Emoji_Modifier_Base" group.
     *
     * @var string[]
     */
    private static $modifierPatterns = [
        '[\x{1F3FB}-\x{1F3FF}]', // 8.0  [5] (🏻..🏿)    light skin tone..dark skin tone
    ];

    /**
     * Patterns that match characters in the "Emoji" group. Note that characters in this group are
     * (confusingly) not rendered as Emoji by default. They must be followed by the U+FE0F (variant
     * selector) character to be rendered as Emoji.
     *
     * @var string[]
     */
    private static $patterns = [
        '\x{0023}', // 1.1  [1] (#️)       NUMBER SIGN
        '\x{002A}', // 1.1  [1] (*️)       ASTERISK
        '[\x{0030}-\x{0039}]', // 1.1 [10] (0️..9️)    DIGIT ZERO..DIGIT NINE
        '\x{00A9}', // 1.1  [1] (©️)       copyright
        '\x{00AE}', // 1.1  [1] (®️)       registered
        '\x{1F004}', // 5.1  [1] (🀄)       mahjong red dragon
        '\x{1F0CF}', // 6.0  [1] (🃏)       joker
        '[\x{1F170}-\x{1F171}]', // 6.0  [2] (🅰️..🅱️)    A button (blood type)..B button (blood type)
        '\x{1F17E}', // 6.0  [1] (🅾️)       O button (blood type)
        '\x{1F17F}', // 5.2  [1] (🅿️)       P button
        '\x{1F18E}', // 6.0  [1] (🆎)       AB button (blood type)
        '[\x{1F191}-\x{1F19A}]', // 6.0 [10] (🆑..🆚)    CL button..VS button
        '[\x{1F1E6}-\x{1F1FF}]', // 6.0 [26] (🇦..🇿)    REGIONAL INDICATOR SYMBOL LETTER A..REGIONAL INDICATOR SYMBOL LETTER Z
        '[\x{1F201}-\x{1F202}]', // 6.0  [2] (🈁..🈂️)    Japanese “here” button..Japanese “service charge” button
        '\x{1F21A}', // 5.2  [1] (🈚)       Japanese “free of charge” button
        '\x{1F22F}', // 5.2  [1] (🈯)       Japanese “reserved” button
        '[\x{1F232}-\x{1F23A}]', // 6.0  [9] (🈲..🈺)    Japanese “prohibited” button..Japanese “open for business” button
        '[\x{1F250}-\x{1F251}]', // 6.0  [2] (🉐..🉑)    Japanese “bargain” button..Japanese “acceptable” button
        '[\x{1F300}-\x{1F320}]', // 6.0 [33] (🌀..🌠)    cyclone..shooting star
        '\x{1F321}', // 7.0  [1] (🌡️)       thermometer
        '[\x{1F324}-\x{1F32C}]', // 7.0  [9] (🌤️..🌬️)    sun behind small cloud..wind face
        '[\x{1F32D}-\x{1F32F}]', // 8.0  [3] (🌭..🌯)    hot dog..burrito
        '[\x{1F330}-\x{1F335}]', // 6.0  [6] (🌰..🌵)    chestnut..cactus
        '\x{1F336}', // 7.0  [1] (🌶️)       hot pepper
        '[\x{1F337}-\x{1F37C}]', // 6.0 [70] (🌷..🍼)    tulip..baby bottle
        '\x{1F37D}', // 7.0  [1] (🍽️)       fork and knife with plate
        '[\x{1F37E}-\x{1F37F}]', // 8.0  [2] (🍾..🍿)    bottle with popping cork..popcorn
        '[\x{1F380}-\x{1F393}]', // 6.0 [20] (🎀..🎓)    ribbon..graduation cap
        '[\x{1F396}-\x{1F397}]', // 7.0  [2] (🎖️..🎗️)    military medal..reminder ribbon
        '[\x{1F399}-\x{1F39B}]', // 7.0  [3] (🎙️..🎛️)    studio microphone..control knobs
        '[\x{1F39E}-\x{1F39F}]', // 7.0  [2] (🎞️..🎟️)    film frames..admission tickets
        '[\x{1F3A0}-\x{1F3C4}]', // 6.0 [37] (🎠..🏄)    carousel horse..person surfing
        '\x{1F3C5}', // 7.0  [1] (🏅)       sports medal
        '[\x{1F3C6}-\x{1F3CA}]', // 6.0  [5] (🏆..🏊)    trophy..person swimming
        '[\x{1F3CB}-\x{1F3CE}]', // 7.0  [4] (🏋️..🏎️)    person lifting weights..racing car
        '[\x{1F3CF}-\x{1F3D3}]', // 8.0  [5] (🏏..🏓)    cricket..ping pong
        '[\x{1F3D4}-\x{1F3DF}]', // 7.0 [12] (🏔️..🏟️)    snow-capped mountain..stadium
        '[\x{1F3E0}-\x{1F3F0}]', // 6.0 [17] (🏠..🏰)    house..castle
        '[\x{1F3F3}-\x{1F3F5}]', // 7.0  [3] (🏳️..🏵️)    white flag..rosette
        '\x{1F3F7}', // 7.0  [1] (🏷️)       label
        '[\x{1F3F8}-\x{1F3FF}]', // 8.0  [8] (🏸..🏿)    badminton..dark skin tone
        '[\x{1F400}-\x{1F43E}]', // 6.0 [63] (🐀..🐾)    rat..paw prints
        '\x{1F43F}', // 7.0  [1] (🐿️)       chipmunk
        '\x{1F440}', // 6.0  [1] (👀)       eyes
        '\x{1F441}', // 7.0  [1] (👁️)       eye
        '[\x{1F442}-\x{1F4F7}]', // 6.0[182] (👂..📷)    ear..camera
        '\x{1F4F8}', // 7.0  [1] (📸)       camera with flash
        '[\x{1F4F9}-\x{1F4FC}]', // 6.0  [4] (📹..📼)    video camera..videocassette
        '\x{1F4FD}', // 7.0  [1] (📽️)       film projector
        '\x{1F4FF}', // 8.0  [1] (📿)       prayer beads
        '[\x{1F500}-\x{1F53D}]', // 6.0 [62] (🔀..🔽)    shuffle tracks button..down button
        '[\x{1F549}-\x{1F54A}]', // 7.0  [2] (🕉️..🕊️)    om..dove
        '[\x{1F54B}-\x{1F54E}]', // 8.0  [4] (🕋..🕎)    kaaba..menorah
        '[\x{1F550}-\x{1F567}]', // 6.0 [24] (🕐..🕧)    one o’clock..twelve-thirty
        '[\x{1F56F}-\x{1F570}]', // 7.0  [2] (🕯️..🕰️)    candle..mantelpiece clock
        '[\x{1F573}-\x{1F579}]', // 7.0  [7] (🕳️..🕹️)    hole..joystick
        '\x{1F57A}', // 9.0  [1] (🕺)       man dancing
        '\x{1F587}', // 7.0  [1] (🖇️)       linked paperclips
        '[\x{1F58A}-\x{1F58D}]', // 7.0  [4] (🖊️..🖍️)    pen..crayon
        '\x{1F590}', // 7.0  [1] (🖐️)       raised hand with fingers splayed
        '[\x{1F595}-\x{1F596}]', // 7.0  [2] (🖕..🖖)    middle finger..vulcan salute
        '\x{1F5A4}', // 9.0  [1] (🖤)       black heart
        '\x{1F5A5}', // 7.0  [1] (🖥️)       desktop computer
        '\x{1F5A8}', // 7.0  [1] (🖨️)       printer
        '[\x{1F5B1}-\x{1F5B2}]', // 7.0  [2] (🖱️..🖲️)    computer mouse..trackball
        '\x{1F5BC}', // 7.0  [1] (🖼️)       framed picture
        '[\x{1F5C2}-\x{1F5C4}]', // 7.0  [3] (🗂️..🗄️)    card index dividers..file cabinet
        '[\x{1F5D1}-\x{1F5D3}]', // 7.0  [3] (🗑️..🗓️)    wastebasket..spiral calendar
        '[\x{1F5DC}-\x{1F5DE}]', // 7.0  [3] (🗜️..🗞️)    clamp..rolled-up newspaper
        '\x{1F5E1}', // 7.0  [1] (🗡️)       dagger
        '\x{1F5E3}', // 7.0  [1] (🗣️)       speaking head
        '\x{1F5E8}', // 7.0  [1] (🗨️)       left speech bubble
        '\x{1F5EF}', // 7.0  [1] (🗯️)       right anger bubble
        '\x{1F5F3}', // 7.0  [1] (🗳️)       ballot box with ballot
        '\x{1F5FA}', // 7.0  [1] (🗺️)       world map
        '[\x{1F5FB}-\x{1F5FF}]', // 6.0  [5] (🗻..🗿)    mount fuji..moai
        '\x{1F600}', // 6.1  [1] (😀)       grinning face
        '[\x{1F601}-\x{1F610}]', // 6.0 [16] (😁..😐)    grinning face with smiling eyes..neutral face
        '\x{1F611}', // 6.1  [1] (😑)       expressionless face
        '[\x{1F612}-\x{1F614}]', // 6.0  [3] (😒..😔)    unamused face..pensive face
        '\x{1F615}', // 6.1  [1] (😕)       confused face
        '\x{1F616}', // 6.0  [1] (😖)       confounded face
        '\x{1F617}', // 6.1  [1] (😗)       kissing face
        '\x{1F618}', // 6.0  [1] (😘)       face blowing a kiss
        '\x{1F619}', // 6.1  [1] (😙)       kissing face with smiling eyes
        '\x{1F61A}', // 6.0  [1] (😚)       kissing face with closed eyes
        '\x{1F61B}', // 6.1  [1] (😛)       face with stuck-out tongue
        '[\x{1F61C}-\x{1F61E}]', // 6.0  [3] (😜..😞)    face with stuck-out tongue &amp; winking eye..disappointed face
        '\x{1F61F}', // 6.1  [1] (😟)       worried face
        '[\x{1F620}-\x{1F625}]', // 6.0  [6] (😠..😥)    angry face..disappointed but relieved face
        '[\x{1F626}-\x{1F627}]', // 6.1  [2] (😦..😧)    frowning face with open mouth..anguished face
        '[\x{1F628}-\x{1F62B}]', // 6.0  [4] (😨..😫)    fearful face..tired face
        '\x{1F62C}', // 6.1  [1] (😬)       grimacing face
        '\x{1F62D}', // 6.0  [1] (😭)       loudly crying face
        '[\x{1F62E}-\x{1F62F}]', // 6.1  [2] (😮..😯)    face with open mouth..hushed face
        '[\x{1F630}-\x{1F633}]', // 6.0  [4] (😰..😳)    face with open mouth &amp; cold sweat..flushed face
        '\x{1F634}', // 6.1  [1] (😴)       sleeping face
        '[\x{1F635}-\x{1F640}]', // 6.0 [12] (😵..🙀)    dizzy face..weary cat face
        '[\x{1F641}-\x{1F642}]', // 7.0  [2] (🙁..🙂)    slightly frowning face..slightly smiling face
        '[\x{1F643}-\x{1F644}]', // 8.0  [2] (🙃..🙄)    upside-down face..face with rolling eyes
        '[\x{1F645}-\x{1F64F}]', // 6.0 [11] (🙅..🙏)    person gesturing NO..folded hands
        '[\x{1F680}-\x{1F6C5}]', // 6.0 [70] (🚀..🛅)    rocket..left luggage
        '[\x{1F6CB}-\x{1F6CF}]', // 7.0  [5] (🛋️..🛏️)    couch and lamp..bed
        '\x{1F6D0}', // 8.0  [1] (🛐)       place of worship
        '[\x{1F6D1}-\x{1F6D2}]', // 9.0  [2] (🛑..🛒)    stop sign..shopping cart
        '[\x{1F6E0}-\x{1F6E5}]', // 7.0  [6] (🛠️..🛥️)    hammer and wrench..motor boat
        '\x{1F6E9}', // 7.0  [1] (🛩️)       small airplane
        '[\x{1F6EB}-\x{1F6EC}]', // 7.0  [2] (🛫..🛬)    airplane departure..airplane arrival
        '\x{1F6F0}', // 7.0  [1] (🛰️)       satellite
        '\x{1F6F3}', // 7.0  [1] (🛳️)       passenger ship
        '[\x{1F6F4}-\x{1F6F6}]', // 9.0  [3] (🛴..🛶)    kick scooter..canoe
        '[\x{1F910}-\x{1F918}]', // 8.0  [9] (🤐..🤘)    zipper-mouth face..sign of the horns
        '[\x{1F919}-\x{1F91E}]', // 9.0  [6] (🤙..🤞)    call me hand..crossed fingers
        '[\x{1F920}-\x{1F927}]', // 9.0  [8] (🤠..🤧)    cowboy hat face..sneezing face
        '\x{1F930}', // 9.0  [1] (🤰)       pregnant woman
        '[\x{1F933}-\x{1F93A}]', // 9.0  [8] (🤳..🤺)    selfie..person fencing
        '[\x{1F93C}-\x{1F93E}]', // 9.0  [3] (🤼..🤾)    people wrestling..person playing handball
        '[\x{1F940}-\x{1F945}]', // 9.0  [6] (🥀..🥅)    wilted flower..goal net
        '[\x{1F947}-\x{1F94B}]', // 9.0  [5] (🥇..🥋)    1st place medal..martial arts uniform
        '[\x{1F950}-\x{1F95E}]', // 9.0 [15] (🥐..🥞)    croissant..pancakes
        '[\x{1F980}-\x{1F984}]', // 8.0  [5] (🦀..🦄)    crab..unicorn face
        '[\x{1F985}-\x{1F991}]', // 9.0 [13] (🦅..🦑)    eagle..squid
        '\x{1F9C0}', // 8.0  [1] (🧀)       cheese wedge
        '\x{203C}', // 1.1  [1] (‼️)       double exclamation mark
        '\x{2049}', // 3.0  [1] (⁉️)       exclamation question mark
        '\x{2122}', // 1.1  [1] (™️)       trade mark
        '\x{2139}', // 3.0  [1] (ℹ️)       information
        '[\x{2194}-\x{2199}]', // 1.1  [6] (↔️..↙️)    left-right arrow..down-left arrow
        '[\x{21A9}-\x{21AA}]', // 1.1  [2] (↩️..↪️)    right arrow curving left..left arrow curving right
        '[\x{231A}-\x{231B}]', // 1.1  [2] (⌚..⌛)    watch..hourglass
        '\x{2328}', // 1.1  [1] (⌨️)       keyboard
        '\x{23CF}', // 4.0  [1] (⏏️)       eject button
        '[\x{23E9}-\x{23F3}]', // 6.0 [11] (⏩..⏳)    fast-forward button..hourglass with flowing sand
        '[\x{23F8}-\x{23FA}]', // 7.0  [3] (⏸️..⏺️)    pause button..record button
        '\x{24C2}', // 1.1  [1] (Ⓜ️)       circled M
        '[\x{25AA}-\x{25AB}]', // 1.1  [2] (▪️..▫️)    black small square..white small square
        '\x{25B6}', // 1.1  [1] (▶️)       play button
        '\x{25C0}', // 1.1  [1] (◀️)       reverse button
        '[\x{25FB}-\x{25FE}]', // 3.2  [4] (◻️..◾)    white medium square..black medium-small square
        '[\x{2600}-\x{2604}]', // 1.1  [5] (☀️..☄️)    sun..comet
        '\x{260E}', // 1.1  [1] (☎️)       telephone
        '\x{2611}', // 1.1  [1] (☑️)       ballot box with check
        '[\x{2614}-\x{2615}]', // 4.0  [2] (☔..☕)    umbrella with rain drops..hot beverage
        '\x{2618}', // 4.1  [1] (☘️)       shamrock
        '\x{261D}', // 1.1  [1] (☝️)       index pointing up
        '\x{2620}', // 1.1  [1] (☠️)       skull and crossbones
        '[\x{2622}-\x{2623}]', // 1.1  [2] (☢️..☣️)    radioactive..biohazard
        '\x{2626}', // 1.1  [1] (☦️)       orthodox cross
        '\x{262A}', // 1.1  [1] (☪️)       star and crescent
        '[\x{262E}-\x{262F}]', // 1.1  [2] (☮️..☯️)    peace symbol..yin yang
        '[\x{2638}-\x{263A}]', // 1.1  [3] (☸️..☺️)    wheel of dharma..smiling face
        '\x{2640}', // 1.1  [1] (♀️)       female sign
        '\x{2642}', // 1.1  [1] (♂️)       male sign
        '[\x{2648}-\x{2653}]', // 1.1 [12] (♈..♓)    Aries..Pisces
        '\x{2660}', // 1.1  [1] (♠️)       spade suit
        '\x{2663}', // 1.1  [1] (♣️)       club suit
        '[\x{2665}-\x{2666}]', // 1.1  [2] (♥️..♦️)    heart suit..diamond suit
        '\x{2668}', // 1.1  [1] (♨️)       hot springs
        '\x{267B}', // 3.2  [1] (♻️)       recycling symbol
        '\x{267F}', // 4.1  [1] (♿)       wheelchair symbol
        '[\x{2692}-\x{2697}]', // 4.1  [6] (⚒️..⚗️)    hammer and pick..alembic
        '\x{2699}', // 4.1  [1] (⚙️)       gear
        '[\x{269B}-\x{269C}]', // 4.1  [2] (⚛️..⚜️)    atom symbol..fleur-de-lis
        '[\x{26A0}-\x{26A1}]', // 4.0  [2] (⚠️..⚡)    warning..high voltage
        '[\x{26AA}-\x{26AB}]', // 4.1  [2] (⚪..⚫)    white circle..black circle
        '[\x{26B0}-\x{26B1}]', // 4.1  [2] (⚰️..⚱️)    coffin..funeral urn
        '[\x{26BD}-\x{26BE}]', // 5.2  [2] (⚽..⚾)    soccer ball..baseball
        '[\x{26C4}-\x{26C5}]', // 5.2  [2] (⛄..⛅)    snowman without snow..sun behind cloud
        '\x{26C8}', // 5.2  [1] (⛈️)       cloud with lightning and rain
        '\x{26CE}', // 6.0  [1] (⛎)       Ophiuchus
        '\x{26CF}', // 5.2  [1] (⛏️)       pick
        '\x{26D1}', // 5.2  [1] (⛑️)       rescue worker’s helmet
        '[\x{26D3}-\x{26D4}]', // 5.2  [2] (⛓️..⛔)    chains..no entry
        '[\x{26E9}-\x{26EA}]', // 5.2  [2] (⛩️..⛪)    shinto shrine..church
        '[\x{26F0}-\x{26F5}]', // 5.2  [6] (⛰️..⛵)    mountain..sailboat
        '[\x{26F7}-\x{26FA}]', // 5.2  [4] (⛷️..⛺)    skier..tent
        '\x{26FD}', // 5.2  [1] (⛽)       fuel pump
        '\x{2702}', // 1.1  [1] (✂️)       scissors
        '\x{2705}', // 6.0  [1] (✅)       white heavy check mark
        '[\x{2708}-\x{2709}]', // 1.1  [2] (✈️..✉️)    airplane..envelope
        '[\x{270A}-\x{270B}]', // 6.0  [2] (✊..✋)    raised fist..raised hand
        '[\x{270C}-\x{270D}]', // 1.1  [2] (✌️..✍️)    victory hand..writing hand
        '\x{270F}', // 1.1  [1] (✏️)       pencil
        '\x{2712}', // 1.1  [1] (✒️)       black nib
        '\x{2714}', // 1.1  [1] (✔️)       heavy check mark
        '\x{2716}', // 1.1  [1] (✖️)       heavy multiplication x
        '\x{271D}', // 1.1  [1] (✝️)       latin cross
        '\x{2721}', // 1.1  [1] (✡️)       star of David
        '\x{2728}', // 6.0  [1] (✨)       sparkles
        '[\x{2733}-\x{2734}]', // 1.1  [2] (✳️..✴️)    eight-spoked asterisk..eight-pointed star
        '\x{2744}', // 1.1  [1] (❄️)       snowflake
        '\x{2747}', // 1.1  [1] (❇️)       sparkle
        '\x{274C}', // 6.0  [1] (❌)       cross mark
        '\x{274E}', // 6.0  [1] (❎)       cross mark button
        '[\x{2753}-\x{2755}]', // 6.0  [3] (❓..❕)    question mark..white exclamation mark
        '\x{2757}', // 5.2  [1] (❗)       exclamation mark
        '[\x{2763}-\x{2764}]', // 1.1  [2] (❣️..❤️)    heavy heart exclamation..red heart
        '[\x{2795}-\x{2797}]', // 6.0  [3] (➕..➗)    heavy plus sign..heavy division sign
        '\x{27A1}', // 1.1  [1] (➡️)       right arrow
        '\x{27B0}', // 6.0  [1] (➰)       curly loop
        '\x{27BF}', // 6.0  [1] (➿)       double curly loop
        '[\x{2934}-\x{2935}]', // 3.2  [2] (⤴️..⤵️)    right arrow curving up..right arrow curving down
        '[\x{2B05}-\x{2B07}]', // 4.0  [3] (⬅️..⬇️)    left arrow..down arrow
        '[\x{2B1B}-\x{2B1C}]', // 5.1  [2] (⬛..⬜)    black large square..white large square
        '\x{2B50}', // 5.1  [1] (⭐)       white medium star
        '\x{2B55}', // 5.2  [1] (⭕)       heavy large circle
        '\x{3030}', // 1.1  [1] (〰️)       wavy dash
        '\x{303D}', // 3.2  [1] (〽️)       part alternation mark
        '\x{3297}', // 1.1  [1] (㊗️)       Japanese “congratulations” button
        '\x{3299}', // 1.1  [1] (㊙️)       Japanese “secret” button
    ];

    /**
     * Patterns that match characters in the "Emoji Presentation" group. These characters are
     * rendered as Emoji by default, and do not need a variant selector, unlike `EmojiPatterns`.
     *
     * @var string[]
     */
    private static $presentationPatterns = [
        '\x{1F004}', // 5.1  [1] (🀄)       mahjong red dragon
        '\x{1F0CF}', // 6.0  [1] (🃏)       joker
        '\x{1F18E}', // 6.0  [1] (🆎)       AB button (blood type)
        '[\x{1F191}-\x{1F19A}]', // 6.0 [10] (🆑..🆚)    CL button..VS button
        '[\x{1F1E6}-\x{1F1FF}]', // 6.0 [26] (🇦..🇿)    REGIONAL INDICATOR SYMBOL LETTER A..REGIONAL INDICATOR SYMBOL LETTER Z
        '\x{1F201}', // 6.0  [1] (🈁)       Japanese “here” button
        '\x{1F21A}', // 5.2  [1] (🈚)       Japanese “free of charge” button
        '\x{1F22F}', // 5.2  [1] (🈯)       Japanese “reserved” button
        '[\x{1F232}-\x{1F236}]', // 6.0  [5] (🈲..🈶)    Japanese “prohibited” button..Japanese “not free of charge” button
        '[\x{1F238}-\x{1F23A}]', // 6.0  [3] (🈸..🈺)    Japanese “application” button..Japanese “open for business” button
        '[\x{1F250}-\x{1F251}]', // 6.0  [2] (🉐..🉑)    Japanese “bargain” button..Japanese “acceptable” button
        '[\x{1F300}-\x{1F320}]', // 6.0 [33] (🌀..🌠)    cyclone..shooting star
        '[\x{1F32D}-\x{1F32F}]', // 8.0  [3] (🌭..🌯)    hot dog..burrito
        '[\x{1F330}-\x{1F335}]', // 6.0  [6] (🌰..🌵)    chestnut..cactus
        '[\x{1F337}-\x{1F37C}]', // 6.0 [70] (🌷..🍼)    tulip..baby bottle
        '[\x{1F37E}-\x{1F37F}]', // 8.0  [2] (🍾..🍿)    bottle with popping cork..popcorn
        '[\x{1F380}-\x{1F393}]', // 6.0 [20] (🎀..🎓)    ribbon..graduation cap
        '[\x{1F3A0}-\x{1F3C4}]', // 6.0 [37] (🎠..🏄)    carousel horse..person surfing
        '\x{1F3C5}', // 7.0  [1] (🏅)       sports medal
        '[\x{1F3C6}-\x{1F3CA}]', // 6.0  [5] (🏆..🏊)    trophy..person swimming
        '[\x{1F3CF}-\x{1F3D3}]', // 8.0  [5] (🏏..🏓)    cricket..ping pong
        '[\x{1F3E0}-\x{1F3F0}]', // 6.0 [17] (🏠..🏰)    house..castle
        '\x{1F3F4}', // 7.0  [1] (🏴)       black flag
        '[\x{1F3F8}-\x{1F3FF}]', // 8.0  [8] (🏸..🏿)    badminton..dark skin tone
        '[\x{1F400}-\x{1F43E}]', // 6.0 [63] (🐀..🐾)    rat..paw prints
        '\x{1F440}', // 6.0  [1] (👀)       eyes
        '[\x{1F442}-\x{1F4F7}]', // 6.0[182] (👂..📷)    ear..camera
        '\x{1F4F8}', // 7.0  [1] (📸)       camera with flash
        '[\x{1F4F9}-\x{1F4FC}]', // 6.0  [4] (📹..📼)    video camera..videocassette
        '\x{1F4FF}', // 8.0  [1] (📿)       prayer beads
        '[\x{1F500}-\x{1F53D}]', // 6.0 [62] (🔀..🔽)    shuffle tracks button..down button
        '[\x{1F54B}-\x{1F54E}]', // 8.0  [4] (🕋..🕎)    kaaba..menorah
        '[\x{1F550}-\x{1F567}]', // 6.0 [24] (🕐..🕧)    one o’clock..twelve-thirty
        '\x{1F57A}', // 9.0  [1] (🕺)       man dancing
        '[\x{1F595}-\x{1F596}]', // 7.0  [2] (🖕..🖖)    middle finger..vulcan salute
        '\x{1F5A4}', // 9.0  [1] (🖤)       black heart
        '[\x{1F5FB}-\x{1F5FF}]', // 6.0  [5] (🗻..🗿)    mount fuji..moai
        '\x{1F600}', // 6.1  [1] (😀)       grinning face
        '[\x{1F601}-\x{1F610}]', // 6.0 [16] (😁..😐)    grinning face with smiling eyes..neutral face
        '\x{1F611}', // 6.1  [1] (😑)       expressionless face
        '[\x{1F612}-\x{1F614}]', // 6.0  [3] (😒..😔)    unamused face..pensive face
        '\x{1F615}', // 6.1  [1] (😕)       confused face
        '\x{1F616}', // 6.0  [1] (😖)       confounded face
        '\x{1F617}', // 6.1  [1] (😗)       kissing face
        '\x{1F618}', // 6.0  [1] (😘)       face blowing a kiss
        '\x{1F619}', // 6.1  [1] (😙)       kissing face with smiling eyes
        '\x{1F61A}', // 6.0  [1] (😚)       kissing face with closed eyes
        '\x{1F61B}', // 6.1  [1] (😛)       face with stuck-out tongue
        '[\x{1F61C}-\x{1F61E}]', // 6.0  [3] (😜..😞)    face with stuck-out tongue &amp; winking eye..disappointed face
        '\x{1F61F}', // 6.1  [1] (😟)       worried face
        '[\x{1F620}-\x{1F625}]', // 6.0  [6] (😠..😥)    angry face..disappointed but relieved face
        '[\x{1F626}-\x{1F627}]', // 6.1  [2] (😦..😧)    frowning face with open mouth..anguished face
        '[\x{1F628}-\x{1F62B}]', // 6.0  [4] (😨..😫)    fearful face..tired face
        '\x{1F62C}', // 6.1  [1] (😬)       grimacing face
        '\x{1F62D}', // 6.0  [1] (😭)       loudly crying face
        '[\x{1F62E}-\x{1F62F}]', // 6.1  [2] (😮..😯)    face with open mouth..hushed face
        '[\x{1F630}-\x{1F633}]', // 6.0  [4] (😰..😳)    face with open mouth &amp; cold sweat..flushed face
        '\x{1F634}', // 6.1  [1] (😴)       sleeping face
        '[\x{1F635}-\x{1F640}]', // 6.0 [12] (😵..🙀)    dizzy face..weary cat face
        '[\x{1F641}-\x{1F642}]', // 7.0  [2] (🙁..🙂)    slightly frowning face..slightly smiling face
        '[\x{1F643}-\x{1F644}]', // 8.0  [2] (🙃..🙄)    upside-down face..face with rolling eyes
        '[\x{1F645}-\x{1F64F}]', // 6.0 [11] (🙅..🙏)    person gesturing NO..folded hands
        '[\x{1F680}-\x{1F6C5}]', // 6.0 [70] (🚀..🛅)    rocket..left luggage
        '\x{1F6CC}', // 7.0  [1] (🛌)       person in bed
        '\x{1F6D0}', // 8.0  [1] (🛐)       place of worship
        '[\x{1F6D1}-\x{1F6D2}]', // 9.0  [2] (🛑..🛒)    stop sign..shopping cart
        '[\x{1F6EB}-\x{1F6EC}]', // 7.0  [2] (🛫..🛬)    airplane departure..airplane arrival
        '[\x{1F6F4}-\x{1F6F6}]', // 9.0  [3] (🛴..🛶)    kick scooter..canoe
        '[\x{1F910}-\x{1F918}]', // 8.0  [9] (🤐..🤘)    zipper-mouth face..sign of the horns
        '[\x{1F919}-\x{1F91E}]', // 9.0  [6] (🤙..🤞)    call me hand..crossed fingers
        '[\x{1F920}-\x{1F927}]', // 9.0  [8] (🤠..🤧)    cowboy hat face..sneezing face
        '\x{1F930}', // 9.0  [1] (🤰)       pregnant woman
        '[\x{1F933}-\x{1F93A}]', // 9.0  [8] (🤳..🤺)    selfie..person fencing
        '[\x{1F93C}-\x{1F93E}]', // 9.0  [3] (🤼..🤾)    people wrestling..person playing handball
        '[\x{1F940}-\x{1F945}]', // 9.0  [6] (🥀..🥅)    wilted flower..goal net
        '[\x{1F947}-\x{1F94B}]', // 9.0  [5] (🥇..🥋)    1st place medal..martial arts uniform
        '[\x{1F950}-\x{1F95E}]', // 9.0 [15] (🥐..🥞)    croissant..pancakes
        '[\x{1F980}-\x{1F984}]', // 8.0  [5] (🦀..🦄)    crab..unicorn face
        '[\x{1F985}-\x{1F991}]', // 9.0 [13] (🦅..🦑)    eagle..squid
        '\x{1F9C0}', // 8.0  [1] (🧀)       cheese wedge
        '[\x{231A}-\x{231B}]', // 1.1  [2] (⌚..⌛)    watch..hourglass
        '[\x{23E9}-\x{23EC}]', // 6.0  [4] (⏩..⏬)    fast-forward button..fast down button
        '\x{23F0}', // 6.0  [1] (⏰)       alarm clock
        '\x{23F3}', // 6.0  [1] (⏳)       hourglass with flowing sand
        '[\x{25FD}-\x{25FE}]', // 3.2  [2] (◽..◾)    white medium-small square..black medium-small square
        '[\x{2614}-\x{2615}]', // 4.0  [2] (☔..☕)    umbrella with rain drops..hot beverage
        '[\x{2648}-\x{2653}]', // 1.1 [12] (♈..♓)    Aries..Pisces
        '\x{267F}', // 4.1  [1] (♿)       wheelchair symbol
        '\x{2693}', // 4.1  [1] (⚓)       anchor
        '\x{26A1}', // 4.0  [1] (⚡)       high voltage
        '[\x{26AA}-\x{26AB}]', // 4.1  [2] (⚪..⚫)    white circle..black circle
        '[\x{26BD}-\x{26BE}]', // 5.2  [2] (⚽..⚾)    soccer ball..baseball
        '[\x{26C4}-\x{26C5}]', // 5.2  [2] (⛄..⛅)    snowman without snow..sun behind cloud
        '\x{26CE}', // 6.0  [1] (⛎)       Ophiuchus
        '\x{26D4}', // 5.2  [1] (⛔)       no entry
        '\x{26EA}', // 5.2  [1] (⛪)       church
        '[\x{26F2}-\x{26F3}]', // 5.2  [2] (⛲..⛳)    fountain..flag in hole
        '\x{26F5}', // 5.2  [1] (⛵)       sailboat
        '\x{26FA}', // 5.2  [1] (⛺)       tent
        '\x{26FD}', // 5.2  [1] (⛽)       fuel pump
        '\x{2705}', // 6.0  [1] (✅)       white heavy check mark
        '[\x{270A}-\x{270B}]', // 6.0  [2] (✊..✋)    raised fist..raised hand
        '\x{2728}', // 6.0  [1] (✨)       sparkles
        '\x{274C}', // 6.0  [1] (❌)       cross mark
        '\x{274E}', // 6.0  [1] (❎)       cross mark button
        '[\x{2753}-\x{2755}]', // 6.0  [3] (❓..❕)    question mark..white exclamation mark
        '\x{2757}', // 5.2  [1] (❗)       exclamation mark
        '[\x{2795}-\x{2797}]', // 6.0  [3] (➕..➗)    heavy plus sign..heavy division sign
        '\x{27B0}', // 6.0  [1] (➰)       curly loop
        '\x{27BF}', // 6.0  [1] (➿)       double curly loop
        '[\x{2B1B}-\x{2B1C}]', // 5.1  [2] (⬛..⬜)    black large square..white large square
        '\x{2B50}', // 5.1  [1] (⭐)       white medium star
        '\x{2B55}', // 5.2  [1] (⭕)       heavy large circle
    ];

    /**
     * Patterns that match emoji sequences. This includes keycap characters, flags, and skintone
     * variants, but not Zero-Width-Joiner (ZWJ) sequences used for "family" characters like "👨‍👩‍👧‍👧".
     *
     * @var string[]
     */
    private static $sequencePatterns = [
        '\x{0023}\x{FE0F}\x{20E3}', // # 3.0  [1] (#️⃣)
        '\x{002A}\x{FE0F}\x{20E3}', // 3.0  [1] (*️⃣)
        '\x{0030}\x{FE0F}\x{20E3}', // 3.0  [1] (0️⃣)
        '\x{0031}\x{FE0F}\x{20E3}', // 3.0  [1] (1️⃣)
        '\x{0032}\x{FE0F}\x{20E3}', // 3.0  [1] (2️⃣)
        '\x{0033}\x{FE0F}\x{20E3}', // 3.0  [1] (3️⃣)
        '\x{0034}\x{FE0F}\x{20E3}', // 3.0  [1] (4️⃣)
        '\x{0035}\x{FE0F}\x{20E3}', // 3.0  [1] (5️⃣)
        '\x{0036}\x{FE0F}\x{20E3}', // 3.0  [1] (6️⃣)
        '\x{0037}\x{FE0F}\x{20E3}', // 3.0  [1] (7️⃣)
        '\x{0038}\x{FE0F}\x{20E3}', // 3.0  [1] (8️⃣)
        '\x{0039}\x{FE0F}\x{20E3}', // 3.0  [1] (9️⃣)
        '\x{1F1E6}\x{1F1E8}', // 6.0  [1] (🇦🇨)
        '\x{1F1E6}\x{1F1E9}', // 6.0  [1] (🇦🇩)
        '\x{1F1E6}\x{1F1EA}', // 6.0  [1] (🇦🇪)
        '\x{1F1E6}\x{1F1EB}', // 6.0  [1] (🇦🇫)
        '\x{1F1E6}\x{1F1EC}', // 6.0  [1] (🇦🇬)
        '\x{1F1E6}\x{1F1EE}', // 6.0  [1] (🇦🇮)
        '\x{1F1E6}\x{1F1F1}', // 6.0  [1] (🇦🇱)
        '\x{1F1E6}\x{1F1F2}', // 6.0  [1] (🇦🇲)
        '\x{1F1E6}\x{1F1F4}', // 6.0  [1] (🇦🇴)
        '\x{1F1E6}\x{1F1F6}', // 6.0  [1] (🇦🇶)
        '\x{1F1E6}\x{1F1F7}', // 6.0  [1] (🇦🇷)
        '\x{1F1E6}\x{1F1F8}', // 6.0  [1] (🇦🇸)
        '\x{1F1E6}\x{1F1F9}', // 6.0  [1] (🇦🇹)
        '\x{1F1E6}\x{1F1FA}', // 6.0  [1] (🇦🇺)
        '\x{1F1E6}\x{1F1FC}', // 6.0  [1] (🇦🇼)
        '\x{1F1E6}\x{1F1FD}', // 6.0  [1] (🇦🇽)
        '\x{1F1E6}\x{1F1FF}', // 6.0  [1] (🇦🇿)
        '\x{1F1E7}\x{1F1E6}', // 6.0  [1] (🇧🇦)
        '\x{1F1E7}\x{1F1E7}', // 6.0  [1] (🇧🇧)
        '\x{1F1E7}\x{1F1E9}', // 6.0  [1] (🇧🇩)
        '\x{1F1E7}\x{1F1EA}', // 6.0  [1] (🇧🇪)
        '\x{1F1E7}\x{1F1EB}', // 6.0  [1] (🇧🇫)
        '\x{1F1E7}\x{1F1EC}', // 6.0  [1] (🇧🇬)
        '\x{1F1E7}\x{1F1ED}', // 6.0  [1] (🇧🇭)
        '\x{1F1E7}\x{1F1EE}', // 6.0  [1] (🇧🇮)
        '\x{1F1E7}\x{1F1EF}', // 6.0  [1] (🇧🇯)
        '\x{1F1E7}\x{1F1F1}', // 6.0  [1] (🇧🇱)
        '\x{1F1E7}\x{1F1F2}', // 6.0  [1] (🇧🇲)
        '\x{1F1E7}\x{1F1F3}', // 6.0  [1] (🇧🇳)
        '\x{1F1E7}\x{1F1F4}', // 6.0  [1] (🇧🇴)
        '\x{1F1E7}\x{1F1F6}', // 6.0  [1] (🇧🇶)
        '\x{1F1E7}\x{1F1F7}', // 6.0  [1] (🇧🇷)
        '\x{1F1E7}\x{1F1F8}', // 6.0  [1] (🇧🇸)
        '\x{1F1E7}\x{1F1F9}', // 6.0  [1] (🇧🇹)
        '\x{1F1E7}\x{1F1FB}', // 6.0  [1] (🇧🇻)
        '\x{1F1E7}\x{1F1FC}', // 6.0  [1] (🇧🇼)
        '\x{1F1E7}\x{1F1FE}', // 6.0  [1] (🇧🇾)
        '\x{1F1E7}\x{1F1FF}', // 6.0  [1] (🇧🇿)
        '\x{1F1E8}\x{1F1E6}', // 6.0  [1] (🇨🇦)
        '\x{1F1E8}\x{1F1E8}', // 6.0  [1] (🇨🇨)
        '\x{1F1E8}\x{1F1E9}', // 6.0  [1] (🇨🇩)
        '\x{1F1E8}\x{1F1EB}', // 6.0  [1] (🇨🇫)
        '\x{1F1E8}\x{1F1EC}', // 6.0  [1] (🇨🇬)
        '\x{1F1E8}\x{1F1ED}', // 6.0  [1] (🇨🇭)
        '\x{1F1E8}\x{1F1EE}', // 6.0  [1] (🇨🇮)
        '\x{1F1E8}\x{1F1F0}', // 6.0  [1] (🇨🇰)
        '\x{1F1E8}\x{1F1F1}', // 6.0  [1] (🇨🇱)
        '\x{1F1E8}\x{1F1F2}', // 6.0  [1] (🇨🇲)
        '\x{1F1E8}\x{1F1F3}', // 6.0  [1] (🇨🇳)
        '\x{1F1E8}\x{1F1F4}', // 6.0  [1] (🇨🇴)
        '\x{1F1E8}\x{1F1F5}', // 6.0  [1] (🇨🇵)
        '\x{1F1E8}\x{1F1F7}', // 6.0  [1] (🇨🇷)
        '\x{1F1E8}\x{1F1FA}', // 6.0  [1] (🇨🇺)
        '\x{1F1E8}\x{1F1FB}', // 6.0  [1] (🇨🇻)
        '\x{1F1E8}\x{1F1FC}', // 6.0  [1] (🇨🇼)
        '\x{1F1E8}\x{1F1FD}', // 6.0  [1] (🇨🇽)
        '\x{1F1E8}\x{1F1FE}', // 6.0  [1] (🇨🇾)
        '\x{1F1E8}\x{1F1FF}', // 6.0  [1] (🇨🇿)
        '\x{1F1E9}\x{1F1EA}', // 6.0  [1] (🇩🇪)
        '\x{1F1E9}\x{1F1EC}', // 6.0  [1] (🇩🇬)
        '\x{1F1E9}\x{1F1EF}', // 6.0  [1] (🇩🇯)
        '\x{1F1E9}\x{1F1F0}', // 6.0  [1] (🇩🇰)
        '\x{1F1E9}\x{1F1F2}', // 6.0  [1] (🇩🇲)
        '\x{1F1E9}\x{1F1F4}', // 6.0  [1] (🇩🇴)
        '\x{1F1E9}\x{1F1FF}', // 6.0  [1] (🇩🇿)
        '\x{1F1EA}\x{1F1E6}', // 6.0  [1] (🇪🇦)
        '\x{1F1EA}\x{1F1E8}', // 6.0  [1] (🇪🇨)
        '\x{1F1EA}\x{1F1EA}', // 6.0  [1] (🇪🇪)
        '\x{1F1EA}\x{1F1EC}', // 6.0  [1] (🇪🇬)
        '\x{1F1EA}\x{1F1ED}', // 6.0  [1] (🇪🇭)
        '\x{1F1EA}\x{1F1F7}', // 6.0  [1] (🇪🇷)
        '\x{1F1EA}\x{1F1F8}', // 6.0  [1] (🇪🇸)
        '\x{1F1EA}\x{1F1F9}', // 6.0  [1] (🇪🇹)
        '\x{1F1EA}\x{1F1FA}', // 6.0  [1] (🇪🇺)
        '\x{1F1EB}\x{1F1EE}', // 6.0  [1] (🇫🇮)
        '\x{1F1EB}\x{1F1EF}', // 6.0  [1] (🇫🇯)
        '\x{1F1EB}\x{1F1F0}', // 6.0  [1] (🇫🇰)
        '\x{1F1EB}\x{1F1F2}', // 6.0  [1] (🇫🇲)
        '\x{1F1EB}\x{1F1F4}', // 6.0  [1] (🇫🇴)
        '\x{1F1EB}\x{1F1F7}', // 6.0  [1] (🇫🇷)
        '\x{1F1EC}\x{1F1E6}', // 6.0  [1] (🇬🇦)
        '\x{1F1EC}\x{1F1E7}', // 6.0  [1] (🇬🇧)
        '\x{1F1EC}\x{1F1E9}', // 6.0  [1] (🇬🇩)
        '\x{1F1EC}\x{1F1EA}', // 6.0  [1] (🇬🇪)
        '\x{1F1EC}\x{1F1EB}', // 6.0  [1] (🇬🇫)
        '\x{1F1EC}\x{1F1EC}', // 6.0  [1] (🇬🇬)
        '\x{1F1EC}\x{1F1ED}', // 6.0  [1] (🇬🇭)
        '\x{1F1EC}\x{1F1EE}', // 6.0  [1] (🇬🇮)
        '\x{1F1EC}\x{1F1F1}', // 6.0  [1] (🇬🇱)
        '\x{1F1EC}\x{1F1F2}', // 6.0  [1] (🇬🇲)
        '\x{1F1EC}\x{1F1F3}', // 6.0  [1] (🇬🇳)
        '\x{1F1EC}\x{1F1F5}', // 6.0  [1] (🇬🇵)
        '\x{1F1EC}\x{1F1F6}', // 6.0  [1] (🇬🇶)
        '\x{1F1EC}\x{1F1F7}', // 6.0  [1] (🇬🇷)
        '\x{1F1EC}\x{1F1F8}', // 6.0  [1] (🇬🇸)
        '\x{1F1EC}\x{1F1F9}', // 6.0  [1] (🇬🇹)
        '\x{1F1EC}\x{1F1FA}', // 6.0  [1] (🇬🇺)
        '\x{1F1EC}\x{1F1FC}', // 6.0  [1] (🇬🇼)
        '\x{1F1EC}\x{1F1FE}', // 6.0  [1] (🇬🇾)
        '\x{1F1ED}\x{1F1F0}', // 6.0  [1] (🇭🇰)
        '\x{1F1ED}\x{1F1F2}', // 6.0  [1] (🇭🇲)
        '\x{1F1ED}\x{1F1F3}', // 6.0  [1] (🇭🇳)
        '\x{1F1ED}\x{1F1F7}', // 6.0  [1] (🇭🇷)
        '\x{1F1ED}\x{1F1F9}', // 6.0  [1] (🇭🇹)
        '\x{1F1ED}\x{1F1FA}', // 6.0  [1] (🇭🇺)
        '\x{1F1EE}\x{1F1E8}', // 6.0  [1] (🇮🇨)
        '\x{1F1EE}\x{1F1E9}', // 6.0  [1] (🇮🇩)
        '\x{1F1EE}\x{1F1EA}', // 6.0  [1] (🇮🇪)
        '\x{1F1EE}\x{1F1F1}', // 6.0  [1] (🇮🇱)
        '\x{1F1EE}\x{1F1F2}', // 6.0  [1] (🇮🇲)
        '\x{1F1EE}\x{1F1F3}', // 6.0  [1] (🇮🇳)
        '\x{1F1EE}\x{1F1F4}', // 6.0  [1] (🇮🇴)
        '\x{1F1EE}\x{1F1F6}', // 6.0  [1] (🇮🇶)
        '\x{1F1EE}\x{1F1F7}', // 6.0  [1] (🇮🇷)
        '\x{1F1EE}\x{1F1F8}', // 6.0  [1] (🇮🇸)
        '\x{1F1EE}\x{1F1F9}', // 6.0  [1] (🇮🇹)
        '\x{1F1EF}\x{1F1EA}', // 6.0  [1] (🇯🇪)
        '\x{1F1EF}\x{1F1F2}', // 6.0  [1] (🇯🇲)
        '\x{1F1EF}\x{1F1F4}', // 6.0  [1] (🇯🇴)
        '\x{1F1EF}\x{1F1F5}', // 6.0  [1] (🇯🇵)
        '\x{1F1F0}\x{1F1EA}', // 6.0  [1] (🇰🇪)
        '\x{1F1F0}\x{1F1EC}', // 6.0  [1] (🇰🇬)
        '\x{1F1F0}\x{1F1ED}', // 6.0  [1] (🇰🇭)
        '\x{1F1F0}\x{1F1EE}', // 6.0  [1] (🇰🇮)
        '\x{1F1F0}\x{1F1F2}', // 6.0  [1] (🇰🇲)
        '\x{1F1F0}\x{1F1F3}', // 6.0  [1] (🇰🇳)
        '\x{1F1F0}\x{1F1F5}', // 6.0  [1] (🇰🇵)
        '\x{1F1F0}\x{1F1F7}', // 6.0  [1] (🇰🇷)
        '\x{1F1F0}\x{1F1FC}', // 6.0  [1] (🇰🇼)
        '\x{1F1F0}\x{1F1FE}', // 6.0  [1] (🇰🇾)
        '\x{1F1F0}\x{1F1FF}', // 6.0  [1] (🇰🇿)
        '\x{1F1F1}\x{1F1E6}', // 6.0  [1] (🇱🇦)
        '\x{1F1F1}\x{1F1E7}', // 6.0  [1] (🇱🇧)
        '\x{1F1F1}\x{1F1E8}', // 6.0  [1] (🇱🇨)
        '\x{1F1F1}\x{1F1EE}', // 6.0  [1] (🇱🇮)
        '\x{1F1F1}\x{1F1F0}', // 6.0  [1] (🇱🇰)
        '\x{1F1F1}\x{1F1F7}', // 6.0  [1] (🇱🇷)
        '\x{1F1F1}\x{1F1F8}', // 6.0  [1] (🇱🇸)
        '\x{1F1F1}\x{1F1F9}', // 6.0  [1] (🇱🇹)
        '\x{1F1F1}\x{1F1FA}', // 6.0  [1] (🇱🇺)
        '\x{1F1F1}\x{1F1FB}', // 6.0  [1] (🇱🇻)
        '\x{1F1F1}\x{1F1FE}', // 6.0  [1] (🇱🇾)
        '\x{1F1F2}\x{1F1E6}', // 6.0  [1] (🇲🇦)
        '\x{1F1F2}\x{1F1E8}', // 6.0  [1] (🇲🇨)
        '\x{1F1F2}\x{1F1E9}', // 6.0  [1] (🇲🇩)
        '\x{1F1F2}\x{1F1EA}', // 6.0  [1] (🇲🇪)
        '\x{1F1F2}\x{1F1EB}', // 6.0  [1] (🇲🇫)
        '\x{1F1F2}\x{1F1EC}', // 6.0  [1] (🇲🇬)
        '\x{1F1F2}\x{1F1ED}', // 6.0  [1] (🇲🇭)
        '\x{1F1F2}\x{1F1F0}', // 6.0  [1] (🇲🇰)
        '\x{1F1F2}\x{1F1F1}', // 6.0  [1] (🇲🇱)
        '\x{1F1F2}\x{1F1F2}', // 6.0  [1] (🇲🇲)
        '\x{1F1F2}\x{1F1F3}', // 6.0  [1] (🇲🇳)
        '\x{1F1F2}\x{1F1F4}', // 6.0  [1] (🇲🇴)
        '\x{1F1F2}\x{1F1F5}', // 6.0  [1] (🇲🇵)
        '\x{1F1F2}\x{1F1F6}', // 6.0  [1] (🇲🇶)
        '\x{1F1F2}\x{1F1F7}', // 6.0  [1] (🇲🇷)
        '\x{1F1F2}\x{1F1F8}', // 6.0  [1] (🇲🇸)
        '\x{1F1F2}\x{1F1F9}', // 6.0  [1] (🇲🇹)
        '\x{1F1F2}\x{1F1FA}', // 6.0  [1] (🇲🇺)
        '\x{1F1F2}\x{1F1FB}', // 6.0  [1] (🇲🇻)
        '\x{1F1F2}\x{1F1FC}', // 6.0  [1] (🇲🇼)
        '\x{1F1F2}\x{1F1FD}', // 6.0  [1] (🇲🇽)
        '\x{1F1F2}\x{1F1FE}', // 6.0  [1] (🇲🇾)
        '\x{1F1F2}\x{1F1FF}', // 6.0  [1] (🇲🇿)
        '\x{1F1F3}\x{1F1E6}', // 6.0  [1] (🇳🇦)
        '\x{1F1F3}\x{1F1E8}', // 6.0  [1] (🇳🇨)
        '\x{1F1F3}\x{1F1EA}', // 6.0  [1] (🇳🇪)
        '\x{1F1F3}\x{1F1EB}', // 6.0  [1] (🇳🇫)
        '\x{1F1F3}\x{1F1EC}', // 6.0  [1] (🇳🇬)
        '\x{1F1F3}\x{1F1EE}', // 6.0  [1] (🇳🇮)
        '\x{1F1F3}\x{1F1F1}', // 6.0  [1] (🇳🇱)
        '\x{1F1F3}\x{1F1F4}', // 6.0  [1] (🇳🇴)
        '\x{1F1F3}\x{1F1F5}', // 6.0  [1] (🇳🇵)
        '\x{1F1F3}\x{1F1F7}', // 6.0  [1] (🇳🇷)
        '\x{1F1F3}\x{1F1FA}', // 6.0  [1] (🇳🇺)
        '\x{1F1F3}\x{1F1FF}', // 6.0  [1] (🇳🇿)
        '\x{1F1F4}\x{1F1F2}', // 6.0  [1] (🇴🇲)
        '\x{1F1F5}\x{1F1E6}', // 6.0  [1] (🇵🇦)
        '\x{1F1F5}\x{1F1EA}', // 6.0  [1] (🇵🇪)
        '\x{1F1F5}\x{1F1EB}', // 6.0  [1] (🇵🇫)
        '\x{1F1F5}\x{1F1EC}', // 6.0  [1] (🇵🇬)
        '\x{1F1F5}\x{1F1ED}', // 6.0  [1] (🇵🇭)
        '\x{1F1F5}\x{1F1F0}', // 6.0  [1] (🇵🇰)
        '\x{1F1F5}\x{1F1F1}', // 6.0  [1] (🇵🇱)
        '\x{1F1F5}\x{1F1F2}', // 6.0  [1] (🇵🇲)
        '\x{1F1F5}\x{1F1F3}', // 6.0  [1] (🇵🇳)
        '\x{1F1F5}\x{1F1F7}', // 6.0  [1] (🇵🇷)
        '\x{1F1F5}\x{1F1F8}', // 6.0  [1] (🇵🇸)
        '\x{1F1F5}\x{1F1F9}', // 6.0  [1] (🇵🇹)
        '\x{1F1F5}\x{1F1FC}', // 6.0  [1] (🇵🇼)
        '\x{1F1F5}\x{1F1FE}', // 6.0  [1] (🇵🇾)
        '\x{1F1F6}\x{1F1E6}', // 6.0  [1] (🇶🇦)
        '\x{1F1F7}\x{1F1EA}', // 6.0  [1] (🇷🇪)
        '\x{1F1F7}\x{1F1F4}', // 6.0  [1] (🇷🇴)
        '\x{1F1F7}\x{1F1F8}', // 6.0  [1] (🇷🇸)
        '\x{1F1F7}\x{1F1FA}', // 6.0  [1] (🇷🇺)
        '\x{1F1F7}\x{1F1FC}', // 6.0  [1] (🇷🇼)
        '\x{1F1F8}\x{1F1E6}', // 6.0  [1] (🇸🇦)
        '\x{1F1F8}\x{1F1E7}', // 6.0  [1] (🇸🇧)
        '\x{1F1F8}\x{1F1E8}', // 6.0  [1] (🇸🇨)
        '\x{1F1F8}\x{1F1E9}', // 6.0  [1] (🇸🇩)
        '\x{1F1F8}\x{1F1EA}', // 6.0  [1] (🇸🇪)
        '\x{1F1F8}\x{1F1EC}', // 6.0  [1] (🇸🇬)
        '\x{1F1F8}\x{1F1ED}', // 6.0  [1] (🇸🇭)
        '\x{1F1F8}\x{1F1EE}', // 6.0  [1] (🇸🇮)
        '\x{1F1F8}\x{1F1EF}', // 6.0  [1] (🇸🇯)
        '\x{1F1F8}\x{1F1F0}', // 6.0  [1] (🇸🇰)
        '\x{1F1F8}\x{1F1F1}', // 6.0  [1] (🇸🇱)
        '\x{1F1F8}\x{1F1F2}', // 6.0  [1] (🇸🇲)
        '\x{1F1F8}\x{1F1F3}', // 6.0  [1] (🇸🇳)
        '\x{1F1F8}\x{1F1F4}', // 6.0  [1] (🇸🇴)
        '\x{1F1F8}\x{1F1F7}', // 6.0  [1] (🇸🇷)
        '\x{1F1F8}\x{1F1F8}', // 6.0  [1] (🇸🇸)
        '\x{1F1F8}\x{1F1F9}', // 6.0  [1] (🇸🇹)
        '\x{1F1F8}\x{1F1FB}', // 6.0  [1] (🇸🇻)
        '\x{1F1F8}\x{1F1FD}', // 6.0  [1] (🇸🇽)
        '\x{1F1F8}\x{1F1FE}', // 6.0  [1] (🇸🇾)
        '\x{1F1F8}\x{1F1FF}', // 6.0  [1] (🇸🇿)
        '\x{1F1F9}\x{1F1E6}', // 6.0  [1] (🇹🇦)
        '\x{1F1F9}\x{1F1E8}', // 6.0  [1] (🇹🇨)
        '\x{1F1F9}\x{1F1E9}', // 6.0  [1] (🇹🇩)
        '\x{1F1F9}\x{1F1EB}', // 6.0  [1] (🇹🇫)
        '\x{1F1F9}\x{1F1EC}', // 6.0  [1] (🇹🇬)
        '\x{1F1F9}\x{1F1ED}', // 6.0  [1] (🇹🇭)
        '\x{1F1F9}\x{1F1EF}', // 6.0  [1] (🇹🇯)
        '\x{1F1F9}\x{1F1F0}', // 6.0  [1] (🇹🇰)
        '\x{1F1F9}\x{1F1F1}', // 6.0  [1] (🇹🇱)
        '\x{1F1F9}\x{1F1F2}', // 6.0  [1] (🇹🇲)
        '\x{1F1F9}\x{1F1F3}', // 6.0  [1] (🇹🇳)
        '\x{1F1F9}\x{1F1F4}', // 6.0  [1] (🇹🇴)
        '\x{1F1F9}\x{1F1F7}', // 6.0  [1] (🇹🇷)
        '\x{1F1F9}\x{1F1F9}', // 6.0  [1] (🇹🇹)
        '\x{1F1F9}\x{1F1FB}', // 6.0  [1] (🇹🇻)
        '\x{1F1F9}\x{1F1FC}', // 6.0  [1] (🇹🇼)
        '\x{1F1F9}\x{1F1FF}', // 6.0  [1] (🇹🇿)
        '\x{1F1FA}\x{1F1E6}', // 6.0  [1] (🇺🇦)
        '\x{1F1FA}\x{1F1EC}', // 6.0  [1] (🇺🇬)
        '\x{1F1FA}\x{1F1F2}', // 6.0  [1] (🇺🇲)
        '\x{1F1FA}\x{1F1F3}', // 6.0  [1] (🇺🇳)
        '\x{1F1FA}\x{1F1F8}', // 6.0  [1] (🇺🇸)
        '\x{1F1FA}\x{1F1FE}', // 6.0  [1] (🇺🇾)
        '\x{1F1FA}\x{1F1FF}', // 6.0  [1] (🇺🇿)
        '\x{1F1FB}\x{1F1E6}', // 6.0  [1] (🇻🇦)
        '\x{1F1FB}\x{1F1E8}', // 6.0  [1] (🇻🇨)
        '\x{1F1FB}\x{1F1EA}', // 6.0  [1] (🇻🇪)
        '\x{1F1FB}\x{1F1EC}', // 6.0  [1] (🇻🇬)
        '\x{1F1FB}\x{1F1EE}', // 6.0  [1] (🇻🇮)
        '\x{1F1FB}\x{1F1F3}', // 6.0  [1] (🇻🇳)
        '\x{1F1FB}\x{1F1FA}', // 6.0  [1] (🇻🇺)
        '\x{1F1FC}\x{1F1EB}', // 6.0  [1] (🇼🇫)
        '\x{1F1FC}\x{1F1F8}', // 6.0  [1] (🇼🇸)
        '\x{1F1FD}\x{1F1F0}', // 6.0  [1] (🇽🇰)
        '\x{1F1FE}\x{1F1EA}', // 6.0  [1] (🇾🇪)
        '\x{1F1FE}\x{1F1F9}', // 6.0  [1] (🇾🇹)
        '\x{1F1FF}\x{1F1E6}', // 6.0  [1] (🇿🇦)
        '\x{1F1FF}\x{1F1F2}', // 6.0  [1] (🇿🇲)
        '\x{1F1FF}\x{1F1FC}', // 6.0  [1] (🇿🇼)
        '\x{1F385}\x{1F3FB}', // 8.0  [1] (🎅🏻)
        '\x{1F385}\x{1F3FC}', // 8.0  [1] (🎅🏼)
        '\x{1F385}\x{1F3FD}', // 8.0  [1] (🎅🏽)
        '\x{1F385}\x{1F3FE}', // 8.0  [1] (🎅🏾)
        '\x{1F385}\x{1F3FF}', // 8.0  [1] (🎅🏿)
        '\x{1F3C2}\x{1F3FB}', // 8.0  [1] (🏂🏻)
        '\x{1F3C2}\x{1F3FC}', // 8.0  [1] (🏂🏼)
        '\x{1F3C2}\x{1F3FD}', // 8.0  [1] (🏂🏽)
        '\x{1F3C2}\x{1F3FE}', // 8.0  [1] (🏂🏾)
        '\x{1F3C2}\x{1F3FF}', // 8.0  [1] (🏂🏿)
        '\x{1F3C3}\x{1F3FB}', // 8.0  [1] (🏃🏻)
        '\x{1F3C3}\x{1F3FC}', // 8.0  [1] (🏃🏼)
        '\x{1F3C3}\x{1F3FD}', // 8.0  [1] (🏃🏽)
        '\x{1F3C3}\x{1F3FE}', // 8.0  [1] (🏃🏾)
        '\x{1F3C3}\x{1F3FF}', // 8.0  [1] (🏃🏿)
        '\x{1F3C4}\x{1F3FB}', // 8.0  [1] (🏄🏻)
        '\x{1F3C4}\x{1F3FC}', // 8.0  [1] (🏄🏼)
        '\x{1F3C4}\x{1F3FD}', // 8.0  [1] (🏄🏽)
        '\x{1F3C4}\x{1F3FE}', // 8.0  [1] (🏄🏾)
        '\x{1F3C4}\x{1F3FF}', // 8.0  [1] (🏄🏿)
        '\x{1F3C7}\x{1F3FB}', // 8.0  [1] (🏇🏻)
        '\x{1F3C7}\x{1F3FC}', // 8.0  [1] (🏇🏼)
        '\x{1F3C7}\x{1F3FD}', // 8.0  [1] (🏇🏽)
        '\x{1F3C7}\x{1F3FE}', // 8.0  [1] (🏇🏾)
        '\x{1F3C7}\x{1F3FF}', // 8.0  [1] (🏇🏿)
        '\x{1F3CA}\x{1F3FB}', // 8.0  [1] (🏊🏻)
        '\x{1F3CA}\x{1F3FC}', // 8.0  [1] (🏊🏼)
        '\x{1F3CA}\x{1F3FD}', // 8.0  [1] (🏊🏽)
        '\x{1F3CA}\x{1F3FE}', // 8.0  [1] (🏊🏾)
        '\x{1F3CA}\x{1F3FF}', // 8.0  [1] (🏊🏿)
        '\x{1F3CB}\x{1F3FB}', // 8.0  [1] (🏋🏻)
        '\x{1F3CB}\x{1F3FC}', // 8.0  [1] (🏋🏼)
        '\x{1F3CB}\x{1F3FD}', // 8.0  [1] (🏋🏽)
        '\x{1F3CB}\x{1F3FE}', // 8.0  [1] (🏋🏾)
        '\x{1F3CB}\x{1F3FF}', // 8.0  [1] (🏋🏿)
        '\x{1F3CC}\x{1F3FB}', // 8.0  [1] (🏌🏻)
        '\x{1F3CC}\x{1F3FC}', // 8.0  [1] (🏌🏼)
        '\x{1F3CC}\x{1F3FD}', // 8.0  [1] (🏌🏽)
        '\x{1F3CC}\x{1F3FE}', // 8.0  [1] (🏌🏾)
        '\x{1F3CC}\x{1F3FF}', // 8.0  [1] (🏌🏿)
        '\x{1F442}\x{1F3FB}', // 8.0  [1] (👂🏻)
        '\x{1F442}\x{1F3FC}', // 8.0  [1] (👂🏼)
        '\x{1F442}\x{1F3FD}', // 8.0  [1] (👂🏽)
        '\x{1F442}\x{1F3FE}', // 8.0  [1] (👂🏾)
        '\x{1F442}\x{1F3FF}', // 8.0  [1] (👂🏿)
        '\x{1F443}\x{1F3FB}', // 8.0  [1] (👃🏻)
        '\x{1F443}\x{1F3FC}', // 8.0  [1] (👃🏼)
        '\x{1F443}\x{1F3FD}', // 8.0  [1] (👃🏽)
        '\x{1F443}\x{1F3FE}', // 8.0  [1] (👃🏾)
        '\x{1F443}\x{1F3FF}', // 8.0  [1] (👃🏿)
        '\x{1F446}\x{1F3FB}', // 8.0  [1] (👆🏻)
        '\x{1F446}\x{1F3FC}', // 8.0  [1] (👆🏼)
        '\x{1F446}\x{1F3FD}', // 8.0  [1] (👆🏽)
        '\x{1F446}\x{1F3FE}', // 8.0  [1] (👆🏾)
        '\x{1F446}\x{1F3FF}', // 8.0  [1] (👆🏿)
        '\x{1F447}\x{1F3FB}', // 8.0  [1] (👇🏻)
        '\x{1F447}\x{1F3FC}', // 8.0  [1] (👇🏼)
        '\x{1F447}\x{1F3FD}', // 8.0  [1] (👇🏽)
        '\x{1F447}\x{1F3FE}', // 8.0  [1] (👇🏾)
        '\x{1F447}\x{1F3FF}', // 8.0  [1] (👇🏿)
        '\x{1F448}\x{1F3FB}', // 8.0  [1] (👈🏻)
        '\x{1F448}\x{1F3FC}', // 8.0  [1] (👈🏼)
        '\x{1F448}\x{1F3FD}', // 8.0  [1] (👈🏽)
        '\x{1F448}\x{1F3FE}', // 8.0  [1] (👈🏾)
        '\x{1F448}\x{1F3FF}', // 8.0  [1] (👈🏿)
        '\x{1F449}\x{1F3FB}', // 8.0  [1] (👉🏻)
        '\x{1F449}\x{1F3FC}', // 8.0  [1] (👉🏼)
        '\x{1F449}\x{1F3FD}', // 8.0  [1] (👉🏽)
        '\x{1F449}\x{1F3FE}', // 8.0  [1] (👉🏾)
        '\x{1F449}\x{1F3FF}', // 8.0  [1] (👉🏿)
        '\x{1F44A}\x{1F3FB}', // 8.0  [1] (👊🏻)
        '\x{1F44A}\x{1F3FC}', // 8.0  [1] (👊🏼)
        '\x{1F44A}\x{1F3FD}', // 8.0  [1] (👊🏽)
        '\x{1F44A}\x{1F3FE}', // 8.0  [1] (👊🏾)
        '\x{1F44A}\x{1F3FF}', // 8.0  [1] (👊🏿)
        '\x{1F44B}\x{1F3FB}', // 8.0  [1] (👋🏻)
        '\x{1F44B}\x{1F3FC}', // 8.0  [1] (👋🏼)
        '\x{1F44B}\x{1F3FD}', // 8.0  [1] (👋🏽)
        '\x{1F44B}\x{1F3FE}', // 8.0  [1] (👋🏾)
        '\x{1F44B}\x{1F3FF}', // 8.0  [1] (👋🏿)
        '\x{1F44C}\x{1F3FB}', // 8.0  [1] (👌🏻)
        '\x{1F44C}\x{1F3FC}', // 8.0  [1] (👌🏼)
        '\x{1F44C}\x{1F3FD}', // 8.0  [1] (👌🏽)
        '\x{1F44C}\x{1F3FE}', // 8.0  [1] (👌🏾)
        '\x{1F44C}\x{1F3FF}', // 8.0  [1] (👌🏿)
        '\x{1F44D}\x{1F3FB}', // 8.0  [1] (👍🏻)
        '\x{1F44D}\x{1F3FC}', // 8.0  [1] (👍🏼)
        '\x{1F44D}\x{1F3FD}', // 8.0  [1] (👍🏽)
        '\x{1F44D}\x{1F3FE}', // 8.0  [1] (👍🏾)
        '\x{1F44D}\x{1F3FF}', // 8.0  [1] (👍🏿)
        '\x{1F44E}\x{1F3FB}', // 8.0  [1] (👎🏻)
        '\x{1F44E}\x{1F3FC}', // 8.0  [1] (👎🏼)
        '\x{1F44E}\x{1F3FD}', // 8.0  [1] (👎🏽)
        '\x{1F44E}\x{1F3FE}', // 8.0  [1] (👎🏾)
        '\x{1F44E}\x{1F3FF}', // 8.0  [1] (👎🏿)
        '\x{1F44F}\x{1F3FB}', // 8.0  [1] (👏🏻)
        '\x{1F44F}\x{1F3FC}', // 8.0  [1] (👏🏼)
        '\x{1F44F}\x{1F3FD}', // 8.0  [1] (👏🏽)
        '\x{1F44F}\x{1F3FE}', // 8.0  [1] (👏🏾)
        '\x{1F44F}\x{1F3FF}', // 8.0  [1] (👏🏿)
        '\x{1F450}\x{1F3FB}', // 8.0  [1] (👐🏻)
        '\x{1F450}\x{1F3FC}', // 8.0  [1] (👐🏼)
        '\x{1F450}\x{1F3FD}', // 8.0  [1] (👐🏽)
        '\x{1F450}\x{1F3FE}', // 8.0  [1] (👐🏾)
        '\x{1F450}\x{1F3FF}', // 8.0  [1] (👐🏿)
        '\x{1F466}\x{1F3FB}', // 8.0  [1] (👦🏻)
        '\x{1F466}\x{1F3FC}', // 8.0  [1] (👦🏼)
        '\x{1F466}\x{1F3FD}', // 8.0  [1] (👦🏽)
        '\x{1F466}\x{1F3FE}', // 8.0  [1] (👦🏾)
        '\x{1F466}\x{1F3FF}', // 8.0  [1] (👦🏿)
        '\x{1F467}\x{1F3FB}', // 8.0  [1] (👧🏻)
        '\x{1F467}\x{1F3FC}', // 8.0  [1] (👧🏼)
        '\x{1F467}\x{1F3FD}', // 8.0  [1] (👧🏽)
        '\x{1F467}\x{1F3FE}', // 8.0  [1] (👧🏾)
        '\x{1F467}\x{1F3FF}', // 8.0  [1] (👧🏿)
        '\x{1F468}\x{1F3FB}', // 8.0  [1] (👨🏻)
        '\x{1F468}\x{1F3FC}', // 8.0  [1] (👨🏼)
        '\x{1F468}\x{1F3FD}', // 8.0  [1] (👨🏽)
        '\x{1F468}\x{1F3FE}', // 8.0  [1] (👨🏾)
        '\x{1F468}\x{1F3FF}', // 8.0  [1] (👨🏿)
        '\x{1F469}\x{1F3FB}', // 8.0  [1] (👩🏻)
        '\x{1F469}\x{1F3FC}', // 8.0  [1] (👩🏼)
        '\x{1F469}\x{1F3FD}', // 8.0  [1] (👩🏽)
        '\x{1F469}\x{1F3FE}', // 8.0  [1] (👩🏾)
        '\x{1F469}\x{1F3FF}', // 8.0  [1] (👩🏿)
        '\x{1F46E}\x{1F3FB}', // 8.0  [1] (👮🏻)
        '\x{1F46E}\x{1F3FC}', // 8.0  [1] (👮🏼)
        '\x{1F46E}\x{1F3FD}', // 8.0  [1] (👮🏽)
        '\x{1F46E}\x{1F3FE}', // 8.0  [1] (👮🏾)
        '\x{1F46E}\x{1F3FF}', // 8.0  [1] (👮🏿)
        '\x{1F470}\x{1F3FB}', // 8.0  [1] (👰🏻)
        '\x{1F470}\x{1F3FC}', // 8.0  [1] (👰🏼)
        '\x{1F470}\x{1F3FD}', // 8.0  [1] (👰🏽)
        '\x{1F470}\x{1F3FE}', // 8.0  [1] (👰🏾)
        '\x{1F470}\x{1F3FF}', // 8.0  [1] (👰🏿)
        '\x{1F471}\x{1F3FB}', // 8.0  [1] (👱🏻)
        '\x{1F471}\x{1F3FC}', // 8.0  [1] (👱🏼)
        '\x{1F471}\x{1F3FD}', // 8.0  [1] (👱🏽)
        '\x{1F471}\x{1F3FE}', // 8.0  [1] (👱🏾)
        '\x{1F471}\x{1F3FF}', // 8.0  [1] (👱🏿)
        '\x{1F472}\x{1F3FB}', // 8.0  [1] (👲🏻)
        '\x{1F472}\x{1F3FC}', // 8.0  [1] (👲🏼)
        '\x{1F472}\x{1F3FD}', // 8.0  [1] (👲🏽)
        '\x{1F472}\x{1F3FE}', // 8.0  [1] (👲🏾)
        '\x{1F472}\x{1F3FF}', // 8.0  [1] (👲🏿)
        '\x{1F473}\x{1F3FB}', // 8.0  [1] (👳🏻)
        '\x{1F473}\x{1F3FC}', // 8.0  [1] (👳🏼)
        '\x{1F473}\x{1F3FD}', // 8.0  [1] (👳🏽)
        '\x{1F473}\x{1F3FE}', // 8.0  [1] (👳🏾)
        '\x{1F473}\x{1F3FF}', // 8.0  [1] (👳🏿)
        '\x{1F474}\x{1F3FB}', // 8.0  [1] (👴🏻)
        '\x{1F474}\x{1F3FC}', // 8.0  [1] (👴🏼)
        '\x{1F474}\x{1F3FD}', // 8.0  [1] (👴🏽)
        '\x{1F474}\x{1F3FE}', // 8.0  [1] (👴🏾)
        '\x{1F474}\x{1F3FF}', // 8.0  [1] (👴🏿)
        '\x{1F475}\x{1F3FB}', // 8.0  [1] (👵🏻)
        '\x{1F475}\x{1F3FC}', // 8.0  [1] (👵🏼)
        '\x{1F475}\x{1F3FD}', // 8.0  [1] (👵🏽)
        '\x{1F475}\x{1F3FE}', // 8.0  [1] (👵🏾)
        '\x{1F475}\x{1F3FF}', // 8.0  [1] (👵🏿)
        '\x{1F476}\x{1F3FB}', // 8.0  [1] (👶🏻)
        '\x{1F476}\x{1F3FC}', // 8.0  [1] (👶🏼)
        '\x{1F476}\x{1F3FD}', // 8.0  [1] (👶🏽)
        '\x{1F476}\x{1F3FE}', // 8.0  [1] (👶🏾)
        '\x{1F476}\x{1F3FF}', // 8.0  [1] (👶🏿)
        '\x{1F477}\x{1F3FB}', // 8.0  [1] (👷🏻)
        '\x{1F477}\x{1F3FC}', // 8.0  [1] (👷🏼)
        '\x{1F477}\x{1F3FD}', // 8.0  [1] (👷🏽)
        '\x{1F477}\x{1F3FE}', // 8.0  [1] (👷🏾)
        '\x{1F477}\x{1F3FF}', // 8.0  [1] (👷🏿)
        '\x{1F478}\x{1F3FB}', // 8.0  [1] (👸🏻)
        '\x{1F478}\x{1F3FC}', // 8.0  [1] (👸🏼)
        '\x{1F478}\x{1F3FD}', // 8.0  [1] (👸🏽)
        '\x{1F478}\x{1F3FE}', // 8.0  [1] (👸🏾)
        '\x{1F478}\x{1F3FF}', // 8.0  [1] (👸🏿)
        '\x{1F47C}\x{1F3FB}', // 8.0  [1] (👼🏻)
        '\x{1F47C}\x{1F3FC}', // 8.0  [1] (👼🏼)
        '\x{1F47C}\x{1F3FD}', // 8.0  [1] (👼🏽)
        '\x{1F47C}\x{1F3FE}', // 8.0  [1] (👼🏾)
        '\x{1F47C}\x{1F3FF}', // 8.0  [1] (👼🏿)
        '\x{1F481}\x{1F3FB}', // 8.0  [1] (💁🏻)
        '\x{1F481}\x{1F3FC}', // 8.0  [1] (💁🏼)
        '\x{1F481}\x{1F3FD}', // 8.0  [1] (💁🏽)
        '\x{1F481}\x{1F3FE}', // 8.0  [1] (💁🏾)
        '\x{1F481}\x{1F3FF}', // 8.0  [1] (💁🏿)
        '\x{1F482}\x{1F3FB}', // 8.0  [1] (💂🏻)
        '\x{1F482}\x{1F3FC}', // 8.0  [1] (💂🏼)
        '\x{1F482}\x{1F3FD}', // 8.0  [1] (💂🏽)
        '\x{1F482}\x{1F3FE}', // 8.0  [1] (💂🏾)
        '\x{1F482}\x{1F3FF}', // 8.0  [1] (💂🏿)
        '\x{1F483}\x{1F3FB}', // 8.0  [1] (💃🏻)
        '\x{1F483}\x{1F3FC}', // 8.0  [1] (💃🏼)
        '\x{1F483}\x{1F3FD}', // 8.0  [1] (💃🏽)
        '\x{1F483}\x{1F3FE}', // 8.0  [1] (💃🏾)
        '\x{1F483}\x{1F3FF}', // 8.0  [1] (💃🏿)
        '\x{1F485}\x{1F3FB}', // 8.0  [1] (💅🏻)
        '\x{1F485}\x{1F3FC}', // 8.0  [1] (💅🏼)
        '\x{1F485}\x{1F3FD}', // 8.0  [1] (💅🏽)
        '\x{1F485}\x{1F3FE}', // 8.0  [1] (💅🏾)
        '\x{1F485}\x{1F3FF}', // 8.0  [1] (💅🏿)
        '\x{1F486}\x{1F3FB}', // 8.0  [1] (💆🏻)
        '\x{1F486}\x{1F3FC}', // 8.0  [1] (💆🏼)
        '\x{1F486}\x{1F3FD}', // 8.0  [1] (💆🏽)
        '\x{1F486}\x{1F3FE}', // 8.0  [1] (💆🏾)
        '\x{1F486}\x{1F3FF}', // 8.0  [1] (💆🏿)
        '\x{1F487}\x{1F3FB}', // 8.0  [1] (💇🏻)
        '\x{1F487}\x{1F3FC}', // 8.0  [1] (💇🏼)
        '\x{1F487}\x{1F3FD}', // 8.0  [1] (💇🏽)
        '\x{1F487}\x{1F3FE}', // 8.0  [1] (💇🏾)
        '\x{1F487}\x{1F3FF}', // 8.0  [1] (💇🏿)
        '\x{1F4AA}\x{1F3FB}', // 8.0  [1] (💪🏻)
        '\x{1F4AA}\x{1F3FC}', // 8.0  [1] (💪🏼)
        '\x{1F4AA}\x{1F3FD}', // 8.0  [1] (💪🏽)
        '\x{1F4AA}\x{1F3FE}', // 8.0  [1] (💪🏾)
        '\x{1F4AA}\x{1F3FF}', // 8.0  [1] (💪🏿)
        '\x{1F574}\x{1F3FB}', // 8.0  [1] (🕴🏻)
        '\x{1F574}\x{1F3FC}', // 8.0  [1] (🕴🏼)
        '\x{1F574}\x{1F3FD}', // 8.0  [1] (🕴🏽)
        '\x{1F574}\x{1F3FE}', // 8.0  [1] (🕴🏾)
        '\x{1F574}\x{1F3FF}', // 8.0  [1] (🕴🏿)
        '\x{1F575}\x{1F3FB}', // 8.0  [1] (🕵🏻)
        '\x{1F575}\x{1F3FC}', // 8.0  [1] (🕵🏼)
        '\x{1F575}\x{1F3FD}', // 8.0  [1] (🕵🏽)
        '\x{1F575}\x{1F3FE}', // 8.0  [1] (🕵🏾)
        '\x{1F575}\x{1F3FF}', // 8.0  [1] (🕵🏿)
        '\x{1F57A}\x{1F3FB}', // 9.0  [1] (🕺🏻)
        '\x{1F57A}\x{1F3FC}', // 9.0  [1] (🕺🏼)
        '\x{1F57A}\x{1F3FD}', // 9.0  [1] (🕺🏽)
        '\x{1F57A}\x{1F3FE}', // 9.0  [1] (🕺🏾)
        '\x{1F57A}\x{1F3FF}', // 9.0  [1] (🕺🏿)
        '\x{1F590}\x{1F3FB}', // 8.0  [1] (🖐🏻)
        '\x{1F590}\x{1F3FC}', // 8.0  [1] (🖐🏼)
        '\x{1F590}\x{1F3FD}', // 8.0  [1] (🖐🏽)
        '\x{1F590}\x{1F3FE}', // 8.0  [1] (🖐🏾)
        '\x{1F590}\x{1F3FF}', // 8.0  [1] (🖐🏿)
        '\x{1F595}\x{1F3FB}', // 8.0  [1] (🖕🏻)
        '\x{1F595}\x{1F3FC}', // 8.0  [1] (🖕🏼)
        '\x{1F595}\x{1F3FD}', // 8.0  [1] (🖕🏽)
        '\x{1F595}\x{1F3FE}', // 8.0  [1] (🖕🏾)
        '\x{1F595}\x{1F3FF}', // 8.0  [1] (🖕🏿)
        '\x{1F596}\x{1F3FB}', // 8.0  [1] (🖖🏻)
        '\x{1F596}\x{1F3FC}', // 8.0  [1] (🖖🏼)
        '\x{1F596}\x{1F3FD}', // 8.0  [1] (🖖🏽)
        '\x{1F596}\x{1F3FE}', // 8.0  [1] (🖖🏾)
        '\x{1F596}\x{1F3FF}', // 8.0  [1] (🖖🏿)
        '\x{1F645}\x{1F3FB}', // 8.0  [1] (🙅🏻)
        '\x{1F645}\x{1F3FC}', // 8.0  [1] (🙅🏼)
        '\x{1F645}\x{1F3FD}', // 8.0  [1] (🙅🏽)
        '\x{1F645}\x{1F3FE}', // 8.0  [1] (🙅🏾)
        '\x{1F645}\x{1F3FF}', // 8.0  [1] (🙅🏿)
        '\x{1F646}\x{1F3FB}', // 8.0  [1] (🙆🏻)
        '\x{1F646}\x{1F3FC}', // 8.0  [1] (🙆🏼)
        '\x{1F646}\x{1F3FD}', // 8.0  [1] (🙆🏽)
        '\x{1F646}\x{1F3FE}', // 8.0  [1] (🙆🏾)
        '\x{1F646}\x{1F3FF}', // 8.0  [1] (🙆🏿)
        '\x{1F647}\x{1F3FB}', // 8.0  [1] (🙇🏻)
        '\x{1F647}\x{1F3FC}', // 8.0  [1] (🙇🏼)
        '\x{1F647}\x{1F3FD}', // 8.0  [1] (🙇🏽)
        '\x{1F647}\x{1F3FE}', // 8.0  [1] (🙇🏾)
        '\x{1F647}\x{1F3FF}', // 8.0  [1] (🙇🏿)
        '\x{1F64B}\x{1F3FB}', // 8.0  [1] (🙋🏻)
        '\x{1F64B}\x{1F3FC}', // 8.0  [1] (🙋🏼)
        '\x{1F64B}\x{1F3FD}', // 8.0  [1] (🙋🏽)
        '\x{1F64B}\x{1F3FE}', // 8.0  [1] (🙋🏾)
        '\x{1F64B}\x{1F3FF}', // 8.0  [1] (🙋🏿)
        '\x{1F64C}\x{1F3FB}', // 8.0  [1] (🙌🏻)
        '\x{1F64C}\x{1F3FC}', // 8.0  [1] (🙌🏼)
        '\x{1F64C}\x{1F3FD}', // 8.0  [1] (🙌🏽)
        '\x{1F64C}\x{1F3FE}', // 8.0  [1] (🙌🏾)
        '\x{1F64C}\x{1F3FF}', // 8.0  [1] (🙌🏿)
        '\x{1F64D}\x{1F3FB}', // 8.0  [1] (🙍🏻)
        '\x{1F64D}\x{1F3FC}', // 8.0  [1] (🙍🏼)
        '\x{1F64D}\x{1F3FD}', // 8.0  [1] (🙍🏽)
        '\x{1F64D}\x{1F3FE}', // 8.0  [1] (🙍🏾)
        '\x{1F64D}\x{1F3FF}', // 8.0  [1] (🙍🏿)
        '\x{1F64E}\x{1F3FB}', // 8.0  [1] (🙎🏻)
        '\x{1F64E}\x{1F3FC}', // 8.0  [1] (🙎🏼)
        '\x{1F64E}\x{1F3FD}', // 8.0  [1] (🙎🏽)
        '\x{1F64E}\x{1F3FE}', // 8.0  [1] (🙎🏾)
        '\x{1F64E}\x{1F3FF}', // 8.0  [1] (🙎🏿)
        '\x{1F64F}\x{1F3FB}', // 8.0  [1] (🙏🏻)
        '\x{1F64F}\x{1F3FC}', // 8.0  [1] (🙏🏼)
        '\x{1F64F}\x{1F3FD}', // 8.0  [1] (🙏🏽)
        '\x{1F64F}\x{1F3FE}', // 8.0  [1] (🙏🏾)
        '\x{1F64F}\x{1F3FF}', // 8.0  [1] (🙏🏿)
        '\x{1F6A3}\x{1F3FB}', // 8.0  [1] (🚣🏻)
        '\x{1F6A3}\x{1F3FC}', // 8.0  [1] (🚣🏼)
        '\x{1F6A3}\x{1F3FD}', // 8.0  [1] (🚣🏽)
        '\x{1F6A3}\x{1F3FE}', // 8.0  [1] (🚣🏾)
        '\x{1F6A3}\x{1F3FF}', // 8.0  [1] (🚣🏿)
        '\x{1F6B4}\x{1F3FB}', // 8.0  [1] (🚴🏻)
        '\x{1F6B4}\x{1F3FC}', // 8.0  [1] (🚴🏼)
        '\x{1F6B4}\x{1F3FD}', // 8.0  [1] (🚴🏽)
        '\x{1F6B4}\x{1F3FE}', // 8.0  [1] (🚴🏾)
        '\x{1F6B4}\x{1F3FF}', // 8.0  [1] (🚴🏿)
        '\x{1F6B5}\x{1F3FB}', // 8.0  [1] (🚵🏻)
        '\x{1F6B5}\x{1F3FC}', // 8.0  [1] (🚵🏼)
        '\x{1F6B5}\x{1F3FD}', // 8.0  [1] (🚵🏽)
        '\x{1F6B5}\x{1F3FE}', // 8.0  [1] (🚵🏾)
        '\x{1F6B5}\x{1F3FF}', // 8.0  [1] (🚵🏿)
        '\x{1F6B6}\x{1F3FB}', // 8.0  [1] (🚶🏻)
        '\x{1F6B6}\x{1F3FC}', // 8.0  [1] (🚶🏼)
        '\x{1F6B6}\x{1F3FD}', // 8.0  [1] (🚶🏽)
        '\x{1F6B6}\x{1F3FE}', // 8.0  [1] (🚶🏾)
        '\x{1F6B6}\x{1F3FF}', // 8.0  [1] (🚶🏿)
        '\x{1F6C0}\x{1F3FB}', // 8.0  [1] (🛀🏻)
        '\x{1F6C0}\x{1F3FC}', // 8.0  [1] (🛀🏼)
        '\x{1F6C0}\x{1F3FD}', // 8.0  [1] (🛀🏽)
        '\x{1F6C0}\x{1F3FE}', // 8.0  [1] (🛀🏾)
        '\x{1F6C0}\x{1F3FF}', // 8.0  [1] (🛀🏿)
        '\x{1F6CC}\x{1F3FB}', // 8.0  [1] (🛌🏻)
        '\x{1F6CC}\x{1F3FC}', // 8.0  [1] (🛌🏼)
        '\x{1F6CC}\x{1F3FD}', // 8.0  [1] (🛌🏽)
        '\x{1F6CC}\x{1F3FE}', // 8.0  [1] (🛌🏾)
        '\x{1F6CC}\x{1F3FF}', // 8.0  [1] (🛌🏿)
        '\x{1F918}\x{1F3FB}', // 8.0  [1] (🤘🏻)
        '\x{1F918}\x{1F3FC}', // 8.0  [1] (🤘🏼)
        '\x{1F918}\x{1F3FD}', // 8.0  [1] (🤘🏽)
        '\x{1F918}\x{1F3FE}', // 8.0  [1] (🤘🏾)
        '\x{1F918}\x{1F3FF}', // 8.0  [1] (🤘🏿)
        '\x{1F919}\x{1F3FB}', // 9.0  [1] (🤙🏻)
        '\x{1F919}\x{1F3FC}', // 9.0  [1] (🤙🏼)
        '\x{1F919}\x{1F3FD}', // 9.0  [1] (🤙🏽)
        '\x{1F919}\x{1F3FE}', // 9.0  [1] (🤙🏾)
        '\x{1F919}\x{1F3FF}', // 9.0  [1] (🤙🏿)
        '\x{1F91A}\x{1F3FB}', // 9.0  [1] (🤚🏻)
        '\x{1F91A}\x{1F3FC}', // 9.0  [1] (🤚🏼)
        '\x{1F91A}\x{1F3FD}', // 9.0  [1] (🤚🏽)
        '\x{1F91A}\x{1F3FE}', // 9.0  [1] (🤚🏾)
        '\x{1F91A}\x{1F3FF}', // 9.0  [1] (🤚🏿)
        '\x{1F91B}\x{1F3FB}', // 9.0  [1] (🤛🏻)
        '\x{1F91B}\x{1F3FC}', // 9.0  [1] (🤛🏼)
        '\x{1F91B}\x{1F3FD}', // 9.0  [1] (🤛🏽)
        '\x{1F91B}\x{1F3FE}', // 9.0  [1] (🤛🏾)
        '\x{1F91B}\x{1F3FF}', // 9.0  [1] (🤛🏿)
        '\x{1F91C}\x{1F3FB}', // 9.0  [1] (🤜🏻)
        '\x{1F91C}\x{1F3FC}', // 9.0  [1] (🤜🏼)
        '\x{1F91C}\x{1F3FD}', // 9.0  [1] (🤜🏽)
        '\x{1F91C}\x{1F3FE}', // 9.0  [1] (🤜🏾)
        '\x{1F91C}\x{1F3FF}', // 9.0  [1] (🤜🏿)
        '\x{1F91E}\x{1F3FB}', // 9.0  [1] (🤞🏻)
        '\x{1F91E}\x{1F3FC}', // 9.0  [1] (🤞🏼)
        '\x{1F91E}\x{1F3FD}', // 9.0  [1] (🤞🏽)
        '\x{1F91E}\x{1F3FE}', // 9.0  [1] (🤞🏾)
        '\x{1F91E}\x{1F3FF}', // 9.0  [1] (🤞🏿)
        '\x{1F926}\x{1F3FB}', // 9.0  [1] (🤦🏻)
        '\x{1F926}\x{1F3FC}', // 9.0  [1] (🤦🏼)
        '\x{1F926}\x{1F3FD}', // 9.0  [1] (🤦🏽)
        '\x{1F926}\x{1F3FE}', // 9.0  [1] (🤦🏾)
        '\x{1F926}\x{1F3FF}', // 9.0  [1] (🤦🏿)
        '\x{1F930}\x{1F3FB}', // 9.0  [1] (🤰🏻)
        '\x{1F930}\x{1F3FC}', // 9.0  [1] (🤰🏼)
        '\x{1F930}\x{1F3FD}', // 9.0  [1] (🤰🏽)
        '\x{1F930}\x{1F3FE}', // 9.0  [1] (🤰🏾)
        '\x{1F930}\x{1F3FF}', // 9.0  [1] (🤰🏿)
        '\x{1F933}\x{1F3FB}', // 9.0  [1] (🤳🏻)
        '\x{1F933}\x{1F3FC}', // 9.0  [1] (🤳🏼)
        '\x{1F933}\x{1F3FD}', // 9.0  [1] (🤳🏽)
        '\x{1F933}\x{1F3FE}', // 9.0  [1] (🤳🏾)
        '\x{1F933}\x{1F3FF}', // 9.0  [1] (🤳🏿)
        '\x{1F934}\x{1F3FB}', // 9.0  [1] (🤴🏻)
        '\x{1F934}\x{1F3FC}', // 9.0  [1] (🤴🏼)
        '\x{1F934}\x{1F3FD}', // 9.0  [1] (🤴🏽)
        '\x{1F934}\x{1F3FE}', // 9.0  [1] (🤴🏾)
        '\x{1F934}\x{1F3FF}', // 9.0  [1] (🤴🏿)
        '\x{1F935}\x{1F3FB}', // 9.0  [1] (🤵🏻)
        '\x{1F935}\x{1F3FC}', // 9.0  [1] (🤵🏼)
        '\x{1F935}\x{1F3FD}', // 9.0  [1] (🤵🏽)
        '\x{1F935}\x{1F3FE}', // 9.0  [1] (🤵🏾)
        '\x{1F935}\x{1F3FF}', // 9.0  [1] (🤵🏿)
        '\x{1F936}\x{1F3FB}', // 9.0  [1] (🤶🏻)
        '\x{1F936}\x{1F3FC}', // 9.0  [1] (🤶🏼)
        '\x{1F936}\x{1F3FD}', // 9.0  [1] (🤶🏽)
        '\x{1F936}\x{1F3FE}', // 9.0  [1] (🤶🏾)
        '\x{1F936}\x{1F3FF}', // 9.0  [1] (🤶🏿)
        '\x{1F937}\x{1F3FB}', // 9.0  [1] (🤷🏻)
        '\x{1F937}\x{1F3FC}', // 9.0  [1] (🤷🏼)
        '\x{1F937}\x{1F3FD}', // 9.0  [1] (🤷🏽)
        '\x{1F937}\x{1F3FE}', // 9.0  [1] (🤷🏾)
        '\x{1F937}\x{1F3FF}', // 9.0  [1] (🤷🏿)
        '\x{1F938}\x{1F3FB}', // 9.0  [1] (🤸🏻)
        '\x{1F938}\x{1F3FC}', // 9.0  [1] (🤸🏼)
        '\x{1F938}\x{1F3FD}', // 9.0  [1] (🤸🏽)
        '\x{1F938}\x{1F3FE}', // 9.0  [1] (🤸🏾)
        '\x{1F938}\x{1F3FF}', // 9.0  [1] (🤸🏿)
        '\x{1F939}\x{1F3FB}', // 9.0  [1] (🤹🏻)
        '\x{1F939}\x{1F3FC}', // 9.0  [1] (🤹🏼)
        '\x{1F939}\x{1F3FD}', // 9.0  [1] (🤹🏽)
        '\x{1F939}\x{1F3FE}', // 9.0  [1] (🤹🏾)
        '\x{1F939}\x{1F3FF}', // 9.0  [1] (🤹🏿)
        '\x{1F93D}\x{1F3FB}', // 9.0  [1] (🤽🏻)
        '\x{1F93D}\x{1F3FC}', // 9.0  [1] (🤽🏼)
        '\x{1F93D}\x{1F3FD}', // 9.0  [1] (🤽🏽)
        '\x{1F93D}\x{1F3FE}', // 9.0  [1] (🤽🏾)
        '\x{1F93D}\x{1F3FF}', // 9.0  [1] (🤽🏿)
        '\x{1F93E}\x{1F3FB}', // 9.0  [1] (🤾🏻)
        '\x{1F93E}\x{1F3FC}', // 9.0  [1] (🤾🏼)
        '\x{1F93E}\x{1F3FD}', // 9.0  [1] (🤾🏽)
        '\x{1F93E}\x{1F3FE}', // 9.0  [1] (🤾🏾)
        '\x{1F93E}\x{1F3FF}', // 9.0  [1] (🤾🏿)
        '\x{261D}\x{1F3FB}', // 8.0  [1] (☝🏻)
        '\x{261D}\x{1F3FC}', // 8.0  [1] (☝🏼)
        '\x{261D}\x{1F3FD}', // 8.0  [1] (☝🏽)
        '\x{261D}\x{1F3FE}', // 8.0  [1] (☝🏾)
        '\x{261D}\x{1F3FF}', // 8.0  [1] (☝🏿)
        '\x{26F9}\x{1F3FB}', // 8.0  [1] (⛹🏻)
        '\x{26F9}\x{1F3FC}', // 8.0  [1] (⛹🏼)
        '\x{26F9}\x{1F3FD}', // 8.0  [1] (⛹🏽)
        '\x{26F9}\x{1F3FE}', // 8.0  [1] (⛹🏾)
        '\x{26F9}\x{1F3FF}', // 8.0  [1] (⛹🏿)
        '\x{270A}\x{1F3FB}', // 8.0  [1] (✊🏻)
        '\x{270A}\x{1F3FC}', // 8.0  [1] (✊🏼)
        '\x{270A}\x{1F3FD}', // 8.0  [1] (✊🏽)
        '\x{270A}\x{1F3FE}', // 8.0  [1] (✊🏾)
        '\x{270A}\x{1F3FF}', // 8.0  [1] (✊🏿)
        '\x{270B}\x{1F3FB}', // 8.0  [1] (✋🏻)
        '\x{270B}\x{1F3FC}', // 8.0  [1] (✋🏼)
        '\x{270B}\x{1F3FD}', // 8.0  [1] (✋🏽)
        '\x{270B}\x{1F3FE}', // 8.0  [1] (✋🏾)
        '\x{270B}\x{1F3FF}', // 8.0  [1] (✋🏿)
        '\x{270C}\x{1F3FB}', // 8.0  [1] (✌🏻)
        '\x{270C}\x{1F3FC}', // 8.0  [1] (✌🏼)
        '\x{270C}\x{1F3FD}', // 8.0  [1] (✌🏽)
        '\x{270C}\x{1F3FE}', // 8.0  [1] (✌🏾)
        '\x{270C}\x{1F3FF}', // 8.0  [1] (✌🏿)
        '\x{270D}\x{1F3FB}', // 8.0  [1] (✍🏻)
        '\x{270D}\x{1F3FC}', // 8.0  [1] (✍🏼)
        '\x{270D}\x{1F3FD}', // 8.0  [1] (✍🏽)
        '\x{270D}\x{1F3FE}', // 8.0  [1] (✍🏾)
        '\x{270D}\x{1F3FF}', // 8.0  [1] (✍🏿)
    ];

    /**
     * Patterns that match Zero-Width-Joiner (ZWJ) sequences used for "family" characters like "👨‍👩‍👧‍👧".
     *
     * @var string[]
     */
    private static $zeroWidthJoinerSequencePatterns = [
        '\x{1F3C3}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏃🏻‍♀️)
        '\x{1F3C3}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏃🏻‍♂️)
        '\x{1F3C3}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏃🏼‍♀️)
        '\x{1F3C3}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏃🏼‍♂️)
        '\x{1F3C3}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏃🏽‍♀️)
        '\x{1F3C3}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏃🏽‍♂️)
        '\x{1F3C3}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏃🏾‍♀️)
        '\x{1F3C3}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏃🏾‍♂️)
        '\x{1F3C3}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏃🏿‍♀️)
        '\x{1F3C3}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏃🏿‍♂️)
        '\x{1F3C3}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🏃‍♀️)
        '\x{1F3C3}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🏃‍♂️)
        '\x{1F3C4}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏄🏻‍♀️)
        '\x{1F3C4}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏄🏻‍♂️)
        '\x{1F3C4}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏄🏼‍♀️)
        '\x{1F3C4}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏄🏼‍♂️)
        '\x{1F3C4}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏄🏽‍♀️)
        '\x{1F3C4}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏄🏽‍♂️)
        '\x{1F3C4}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏄🏾‍♀️)
        '\x{1F3C4}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏄🏾‍♂️)
        '\x{1F3C4}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏄🏿‍♀️)
        '\x{1F3C4}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏄🏿‍♂️)
        '\x{1F3C4}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🏄‍♀️)
        '\x{1F3C4}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🏄‍♂️)
        '\x{1F3CA}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏊🏻‍♀️)
        '\x{1F3CA}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏊🏻‍♂️)
        '\x{1F3CA}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏊🏼‍♀️)
        '\x{1F3CA}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏊🏼‍♂️)
        '\x{1F3CA}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏊🏽‍♀️)
        '\x{1F3CA}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏊🏽‍♂️)
        '\x{1F3CA}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏊🏾‍♀️)
        '\x{1F3CA}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏊🏾‍♂️)
        '\x{1F3CA}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏊🏿‍♀️)
        '\x{1F3CA}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏊🏿‍♂️)
        '\x{1F3CA}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🏊‍♀️)
        '\x{1F3CA}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🏊‍♂️)
        '\x{1F3CB}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏋🏻‍♀️)
        '\x{1F3CB}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏋🏻‍♂️)
        '\x{1F3CB}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏋🏼‍♀️)
        '\x{1F3CB}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏋🏼‍♂️)
        '\x{1F3CB}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏋🏽‍♀️)
        '\x{1F3CB}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏋🏽‍♂️)
        '\x{1F3CB}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏋🏾‍♀️)
        '\x{1F3CB}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏋🏾‍♂️)
        '\x{1F3CB}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏋🏿‍♀️)
        '\x{1F3CB}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏋🏿‍♂️)
        '\x{1F3CB}\x{FE0F}\x{200D}\x{2640}\x{FE0F}', // 7.0  [1] (🏋️‍♀️)
        '\x{1F3CB}\x{FE0F}\x{200D}\x{2642}\x{FE0F}', // 7.0  [1] (🏋️‍♂️)
        '\x{1F3CC}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏌🏻‍♀️)
        '\x{1F3CC}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏌🏻‍♂️)
        '\x{1F3CC}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏌🏼‍♀️)
        '\x{1F3CC}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏌🏼‍♂️)
        '\x{1F3CC}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏌🏽‍♀️)
        '\x{1F3CC}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏌🏽‍♂️)
        '\x{1F3CC}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏌🏾‍♀️)
        '\x{1F3CC}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏌🏾‍♂️)
        '\x{1F3CC}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🏌🏿‍♀️)
        '\x{1F3CC}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🏌🏿‍♂️)
        '\x{1F3CC}\x{FE0F}\x{200D}\x{2640}\x{FE0F}', // 7.0  [1] (🏌️‍♀️)
        '\x{1F3CC}\x{FE0F}\x{200D}\x{2642}\x{FE0F}', // 7.0  [1] (🏌️‍♂️)
        '\x{1F3F3}\x{FE0F}\x{200D}\x{1F308}', // 7.0  [1] (🏳️‍🌈)
        '\x{1F441}\x{FE0F}\x{200D}\x{1F5E8}\x{FE0F}', // 7.0  [1] (👁️‍🗨️)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F33E}', // 8.0  [1] (👨🏻‍🌾)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F373}', // 8.0  [1] (👨🏻‍🍳)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F393}', // 8.0  [1] (👨🏻‍🎓)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F3A4}', // 8.0  [1] (👨🏻‍🎤)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F3A8}', // 8.0  [1] (👨🏻‍🎨)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F3EB}', // 8.0  [1] (👨🏻‍🏫)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F3ED}', // 8.0  [1] (👨🏻‍🏭)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F4BB}', // 8.0  [1] (👨🏻‍💻)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F4BC}', // 8.0  [1] (👨🏻‍💼)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F527}', // 8.0  [1] (👨🏻‍🔧)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F52C}', // 8.0  [1] (👨🏻‍🔬)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F680}', // 8.0  [1] (👨🏻‍🚀)
        '\x{1F468}\x{1F3FB}\x{200D}\x{1F692}', // 8.0  [1] (👨🏻‍🚒)
        '\x{1F468}\x{1F3FB}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👨🏻‍⚕️)
        '\x{1F468}\x{1F3FB}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👨🏻‍⚖️)
        '\x{1F468}\x{1F3FB}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👨🏻‍✈️)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F33E}', // 8.0  [1] (👨🏼‍🌾)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F373}', // 8.0  [1] (👨🏼‍🍳)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F393}', // 8.0  [1] (👨🏼‍🎓)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F3A4}', // 8.0  [1] (👨🏼‍🎤)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F3A8}', // 8.0  [1] (👨🏼‍🎨)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F3EB}', // 8.0  [1] (👨🏼‍🏫)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F3ED}', // 8.0  [1] (👨🏼‍🏭)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F4BB}', // 8.0  [1] (👨🏼‍💻)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F4BC}', // 8.0  [1] (👨🏼‍💼)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F527}', // 8.0  [1] (👨🏼‍🔧)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F52C}', // 8.0  [1] (👨🏼‍🔬)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F680}', // 8.0  [1] (👨🏼‍🚀)
        '\x{1F468}\x{1F3FC}\x{200D}\x{1F692}', // 8.0  [1] (👨🏼‍🚒)
        '\x{1F468}\x{1F3FC}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👨🏼‍⚕️)
        '\x{1F468}\x{1F3FC}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👨🏼‍⚖️)
        '\x{1F468}\x{1F3FC}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👨🏼‍✈️)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F33E}', // 8.0  [1] (👨🏽‍🌾)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F373}', // 8.0  [1] (👨🏽‍🍳)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F393}', // 8.0  [1] (👨🏽‍🎓)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F3A4}', // 8.0  [1] (👨🏽‍🎤)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F3A8}', // 8.0  [1] (👨🏽‍🎨)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F3EB}', // 8.0  [1] (👨🏽‍🏫)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F3ED}', // 8.0  [1] (👨🏽‍🏭)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F4BB}', // 8.0  [1] (👨🏽‍💻)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F4BC}', // 8.0  [1] (👨🏽‍💼)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F527}', // 8.0  [1] (👨🏽‍🔧)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F52C}', // 8.0  [1] (👨🏽‍🔬)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F680}', // 8.0  [1] (👨🏽‍🚀)
        '\x{1F468}\x{1F3FD}\x{200D}\x{1F692}', // 8.0  [1] (👨🏽‍🚒)
        '\x{1F468}\x{1F3FD}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👨🏽‍⚕️)
        '\x{1F468}\x{1F3FD}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👨🏽‍⚖️)
        '\x{1F468}\x{1F3FD}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👨🏽‍✈️)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F33E}', // 8.0  [1] (👨🏾‍🌾)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F373}', // 8.0  [1] (👨🏾‍🍳)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F393}', // 8.0  [1] (👨🏾‍🎓)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F3A4}', // 8.0  [1] (👨🏾‍🎤)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F3A8}', // 8.0  [1] (👨🏾‍🎨)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F3EB}', // 8.0  [1] (👨🏾‍🏫)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F3ED}', // 8.0  [1] (👨🏾‍🏭)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F4BB}', // 8.0  [1] (👨🏾‍💻)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F4BC}', // 8.0  [1] (👨🏾‍💼)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F527}', // 8.0  [1] (👨🏾‍🔧)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F52C}', // 8.0  [1] (👨🏾‍🔬)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F680}', // 8.0  [1] (👨🏾‍🚀)
        '\x{1F468}\x{1F3FE}\x{200D}\x{1F692}', // 8.0  [1] (👨🏾‍🚒)
        '\x{1F468}\x{1F3FE}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👨🏾‍⚕️)
        '\x{1F468}\x{1F3FE}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👨🏾‍⚖️)
        '\x{1F468}\x{1F3FE}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👨🏾‍✈️)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F33E}', // 8.0  [1] (👨🏿‍🌾)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F373}', // 8.0  [1] (👨🏿‍🍳)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F393}', // 8.0  [1] (👨🏿‍🎓)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F3A4}', // 8.0  [1] (👨🏿‍🎤)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F3A8}', // 8.0  [1] (👨🏿‍🎨)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F3EB}', // 8.0  [1] (👨🏿‍🏫)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F3ED}', // 8.0  [1] (👨🏿‍🏭)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F4BB}', // 8.0  [1] (👨🏿‍💻)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F4BC}', // 8.0  [1] (👨🏿‍💼)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F527}', // 8.0  [1] (👨🏿‍🔧)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F52C}', // 8.0  [1] (👨🏿‍🔬)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F680}', // 8.0  [1] (👨🏿‍🚀)
        '\x{1F468}\x{1F3FF}\x{200D}\x{1F692}', // 8.0  [1] (👨🏿‍🚒)
        '\x{1F468}\x{1F3FF}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👨🏿‍⚕️)
        '\x{1F468}\x{1F3FF}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👨🏿‍⚖️)
        '\x{1F468}\x{1F3FF}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👨🏿‍✈️)
        '\x{1F468}\x{200D}\x{1F33E}', // 6.0  [1] (👨‍🌾)
        '\x{1F468}\x{200D}\x{1F373}', // 6.0  [1] (👨‍🍳)
        '\x{1F468}\x{200D}\x{1F393}', // 6.0  [1] (👨‍🎓)
        '\x{1F468}\x{200D}\x{1F3A4}', // 6.0  [1] (👨‍🎤)
        '\x{1F468}\x{200D}\x{1F3A8}', // 6.0  [1] (👨‍🎨)
        '\x{1F468}\x{200D}\x{1F3EB}', // 6.0  [1] (👨‍🏫)
        '\x{1F468}\x{200D}\x{1F3ED}', // 6.0  [1] (👨‍🏭)
        '\x{1F468}\x{200D}\x{1F466}', // 6.0  [1] (👨‍👦)
        '\x{1F468}\x{200D}\x{1F466}\x{200D}\x{1F466}', // 6.0  [1] (👨‍👦‍👦)
        '\x{1F468}\x{200D}\x{1F467}', // 6.0  [1] (👨‍👧)
        '\x{1F468}\x{200D}\x{1F467}\x{200D}\x{1F466}', // 6.0  [1] (👨‍👧‍👦)
        '\x{1F468}\x{200D}\x{1F467}\x{200D}\x{1F467}', // 6.0  [1] (👨‍👧‍👧)
        '\x{1F468}\x{200D}\x{1F468}\x{200D}\x{1F466}', // 6.0  [1] (👨‍👨‍👦)
        '\x{1F468}\x{200D}\x{1F468}\x{200D}\x{1F466}\x{200D}\x{1F466}', // 6.0  [1] (👨‍👨‍👦‍👦)
        '\x{1F468}\x{200D}\x{1F468}\x{200D}\x{1F467}', // 6.0  [1] (👨‍👨‍👧)
        '\x{1F468}\x{200D}\x{1F468}\x{200D}\x{1F467}\x{200D}\x{1F466}', // 6.0  [1] (👨‍👨‍👧‍👦)
        '\x{1F468}\x{200D}\x{1F468}\x{200D}\x{1F467}\x{200D}\x{1F467}', // 6.0  [1] (👨‍👨‍👧‍👧)
        '\x{1F468}\x{200D}\x{1F469}\x{200D}\x{1F466}', // 6.0  [1] (👨‍👩‍👦)
        '\x{1F468}\x{200D}\x{1F469}\x{200D}\x{1F466}\x{200D}\x{1F466}', // 6.0  [1] (👨‍👩‍👦‍👦)
        '\x{1F468}\x{200D}\x{1F469}\x{200D}\x{1F467}', // 6.0  [1] (👨‍👩‍👧)
        '\x{1F468}\x{200D}\x{1F469}\x{200D}\x{1F467}\x{200D}\x{1F466}', // 6.0  [1] (👨‍👩‍👧‍👦)
        '\x{1F468}\x{200D}\x{1F469}\x{200D}\x{1F467}\x{200D}\x{1F467}', // 6.0  [1] (👨‍👩‍👧‍👧)
        '\x{1F468}\x{200D}\x{1F4BB}', // 6.0  [1] (👨‍💻)
        '\x{1F468}\x{200D}\x{1F4BC}', // 6.0  [1] (👨‍💼)
        '\x{1F468}\x{200D}\x{1F527}', // 6.0  [1] (👨‍🔧)
        '\x{1F468}\x{200D}\x{1F52C}', // 6.0  [1] (👨‍🔬)
        '\x{1F468}\x{200D}\x{1F680}', // 6.0  [1] (👨‍🚀)
        '\x{1F468}\x{200D}\x{1F692}', // 6.0  [1] (👨‍🚒)
        '\x{1F468}\x{200D}\x{2695}\x{FE0F}', // 6.0  [1] (👨‍⚕️)
        '\x{1F468}\x{200D}\x{2696}\x{FE0F}', // 6.0  [1] (👨‍⚖️)
        '\x{1F468}\x{200D}\x{2708}\x{FE0F}', // 6.0  [1] (👨‍✈️)
        '\x{1F468}\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F468}', // 6.0  [1] (👨‍❤️‍👨)
        '\x{1F468}\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F48B}\x{200D}\x{1F468}', // 6.0  [1] (👨‍❤️‍💋‍👨)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F33E}', // 8.0  [1] (👩🏻‍🌾)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F373}', // 8.0  [1] (👩🏻‍🍳)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F393}', // 8.0  [1] (👩🏻‍🎓)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F3A4}', // 8.0  [1] (👩🏻‍🎤)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F3A8}', // 8.0  [1] (👩🏻‍🎨)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F3EB}', // 8.0  [1] (👩🏻‍🏫)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F3ED}', // 8.0  [1] (👩🏻‍🏭)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F4BB}', // 8.0  [1] (👩🏻‍💻)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F4BC}', // 8.0  [1] (👩🏻‍💼)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F527}', // 8.0  [1] (👩🏻‍🔧)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F52C}', // 8.0  [1] (👩🏻‍🔬)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F680}', // 8.0  [1] (👩🏻‍🚀)
        '\x{1F469}\x{1F3FB}\x{200D}\x{1F692}', // 8.0  [1] (👩🏻‍🚒)
        '\x{1F469}\x{1F3FB}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👩🏻‍⚕️)
        '\x{1F469}\x{1F3FB}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👩🏻‍⚖️)
        '\x{1F469}\x{1F3FB}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👩🏻‍✈️)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F33E}', // 8.0  [1] (👩🏼‍🌾)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F373}', // 8.0  [1] (👩🏼‍🍳)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F393}', // 8.0  [1] (👩🏼‍🎓)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F3A4}', // 8.0  [1] (👩🏼‍🎤)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F3A8}', // 8.0  [1] (👩🏼‍🎨)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F3EB}', // 8.0  [1] (👩🏼‍🏫)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F3ED}', // 8.0  [1] (👩🏼‍🏭)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F4BB}', // 8.0  [1] (👩🏼‍💻)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F4BC}', // 8.0  [1] (👩🏼‍💼)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F527}', // 8.0  [1] (👩🏼‍🔧)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F52C}', // 8.0  [1] (👩🏼‍🔬)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F680}', // 8.0  [1] (👩🏼‍🚀)
        '\x{1F469}\x{1F3FC}\x{200D}\x{1F692}', // 8.0  [1] (👩🏼‍🚒)
        '\x{1F469}\x{1F3FC}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👩🏼‍⚕️)
        '\x{1F469}\x{1F3FC}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👩🏼‍⚖️)
        '\x{1F469}\x{1F3FC}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👩🏼‍✈️)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F33E}', // 8.0  [1] (👩🏽‍🌾)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F373}', // 8.0  [1] (👩🏽‍🍳)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F393}', // 8.0  [1] (👩🏽‍🎓)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F3A4}', // 8.0  [1] (👩🏽‍🎤)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F3A8}', // 8.0  [1] (👩🏽‍🎨)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F3EB}', // 8.0  [1] (👩🏽‍🏫)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F3ED}', // 8.0  [1] (👩🏽‍🏭)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F4BB}', // 8.0  [1] (👩🏽‍💻)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F4BC}', // 8.0  [1] (👩🏽‍💼)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F527}', // 8.0  [1] (👩🏽‍🔧)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F52C}', // 8.0  [1] (👩🏽‍🔬)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F680}', // 8.0  [1] (👩🏽‍🚀)
        '\x{1F469}\x{1F3FD}\x{200D}\x{1F692}', // 8.0  [1] (👩🏽‍🚒)
        '\x{1F469}\x{1F3FD}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👩🏽‍⚕️)
        '\x{1F469}\x{1F3FD}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👩🏽‍⚖️)
        '\x{1F469}\x{1F3FD}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👩🏽‍✈️)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F33E}', // 8.0  [1] (👩🏾‍🌾)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F373}', // 8.0  [1] (👩🏾‍🍳)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F393}', // 8.0  [1] (👩🏾‍🎓)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F3A4}', // 8.0  [1] (👩🏾‍🎤)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F3A8}', // 8.0  [1] (👩🏾‍🎨)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F3EB}', // 8.0  [1] (👩🏾‍🏫)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F3ED}', // 8.0  [1] (👩🏾‍🏭)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F4BB}', // 8.0  [1] (👩🏾‍💻)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F4BC}', // 8.0  [1] (👩🏾‍💼)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F527}', // 8.0  [1] (👩🏾‍🔧)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F52C}', // 8.0  [1] (👩🏾‍🔬)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F680}', // 8.0  [1] (👩🏾‍🚀)
        '\x{1F469}\x{1F3FE}\x{200D}\x{1F692}', // 8.0  [1] (👩🏾‍🚒)
        '\x{1F469}\x{1F3FE}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👩🏾‍⚕️)
        '\x{1F469}\x{1F3FE}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👩🏾‍⚖️)
        '\x{1F469}\x{1F3FE}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👩🏾‍✈️)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F33E}', // 8.0  [1] (👩🏿‍🌾)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F373}', // 8.0  [1] (👩🏿‍🍳)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F393}', // 8.0  [1] (👩🏿‍🎓)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F3A4}', // 8.0  [1] (👩🏿‍🎤)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F3A8}', // 8.0  [1] (👩🏿‍🎨)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F3EB}', // 8.0  [1] (👩🏿‍🏫)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F3ED}', // 8.0  [1] (👩🏿‍🏭)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F4BB}', // 8.0  [1] (👩🏿‍💻)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F4BC}', // 8.0  [1] (👩🏿‍💼)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F527}', // 8.0  [1] (👩🏿‍🔧)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F52C}', // 8.0  [1] (👩🏿‍🔬)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F680}', // 8.0  [1] (👩🏿‍🚀)
        '\x{1F469}\x{1F3FF}\x{200D}\x{1F692}', // 8.0  [1] (👩🏿‍🚒)
        '\x{1F469}\x{1F3FF}\x{200D}\x{2695}\x{FE0F}', // 8.0  [1] (👩🏿‍⚕️)
        '\x{1F469}\x{1F3FF}\x{200D}\x{2696}\x{FE0F}', // 8.0  [1] (👩🏿‍⚖️)
        '\x{1F469}\x{1F3FF}\x{200D}\x{2708}\x{FE0F}', // 8.0  [1] (👩🏿‍✈️)
        '\x{1F469}\x{200D}\x{1F33E}', // 6.0  [1] (👩‍🌾)
        '\x{1F469}\x{200D}\x{1F373}', // 6.0  [1] (👩‍🍳)
        '\x{1F469}\x{200D}\x{1F393}', // 6.0  [1] (👩‍🎓)
        '\x{1F469}\x{200D}\x{1F3A4}', // 6.0  [1] (👩‍🎤)
        '\x{1F469}\x{200D}\x{1F3A8}', // 6.0  [1] (👩‍🎨)
        '\x{1F469}\x{200D}\x{1F3EB}', // 6.0  [1] (👩‍🏫)
        '\x{1F469}\x{200D}\x{1F3ED}', // 6.0  [1] (👩‍🏭)
        '\x{1F469}\x{200D}\x{1F466}', // 6.0  [1] (👩‍👦)
        '\x{1F469}\x{200D}\x{1F466}\x{200D}\x{1F466}', // 6.0  [1] (👩‍👦‍👦)
        '\x{1F469}\x{200D}\x{1F467}', // 6.0  [1] (👩‍👧)
        '\x{1F469}\x{200D}\x{1F467}\x{200D}\x{1F466}', // 6.0  [1] (👩‍👧‍👦)
        '\x{1F469}\x{200D}\x{1F467}\x{200D}\x{1F467}', // 6.0  [1] (👩‍👧‍👧)
        '\x{1F469}\x{200D}\x{1F469}\x{200D}\x{1F466}', // 6.0  [1] (👩‍👩‍👦)
        '\x{1F469}\x{200D}\x{1F469}\x{200D}\x{1F466}\x{200D}\x{1F466}', // 6.0  [1] (👩‍👩‍👦‍👦)
        '\x{1F469}\x{200D}\x{1F469}\x{200D}\x{1F467}', // 6.0  [1] (👩‍👩‍👧)
        '\x{1F469}\x{200D}\x{1F469}\x{200D}\x{1F467}\x{200D}\x{1F466}', // 6.0  [1] (👩‍👩‍👧‍👦)
        '\x{1F469}\x{200D}\x{1F469}\x{200D}\x{1F467}\x{200D}\x{1F467}', // 6.0  [1] (👩‍👩‍👧‍👧)
        '\x{1F469}\x{200D}\x{1F4BB}', // 6.0  [1] (👩‍💻)
        '\x{1F469}\x{200D}\x{1F4BC}', // 6.0  [1] (👩‍💼)
        '\x{1F469}\x{200D}\x{1F527}', // 6.0  [1] (👩‍🔧)
        '\x{1F469}\x{200D}\x{1F52C}', // 6.0  [1] (👩‍🔬)
        '\x{1F469}\x{200D}\x{1F680}', // 6.0  [1] (👩‍🚀)
        '\x{1F469}\x{200D}\x{1F692}', // 6.0  [1] (👩‍🚒)
        '\x{1F469}\x{200D}\x{2695}\x{FE0F}', // 6.0  [1] (👩‍⚕️)
        '\x{1F469}\x{200D}\x{2696}\x{FE0F}', // 6.0  [1] (👩‍⚖️)
        '\x{1F469}\x{200D}\x{2708}\x{FE0F}', // 6.0  [1] (👩‍✈️)
        '\x{1F469}\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F468}', // 6.0  [1] (👩‍❤️‍👨)
        '\x{1F469}\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F469}', // 6.0  [1] (👩‍❤️‍👩)
        '\x{1F469}\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F48B}\x{200D}\x{1F468}', // 6.0  [1] (👩‍❤️‍💋‍👨)
        '\x{1F469}\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F48B}\x{200D}\x{1F469}', // 6.0  [1] (👩‍❤️‍💋‍👩)
        '\x{1F46E}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👮🏻‍♀️)
        '\x{1F46E}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👮🏻‍♂️)
        '\x{1F46E}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👮🏼‍♀️)
        '\x{1F46E}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👮🏼‍♂️)
        '\x{1F46E}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👮🏽‍♀️)
        '\x{1F46E}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👮🏽‍♂️)
        '\x{1F46E}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👮🏾‍♀️)
        '\x{1F46E}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👮🏾‍♂️)
        '\x{1F46E}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👮🏿‍♀️)
        '\x{1F46E}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👮🏿‍♂️)
        '\x{1F46E}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (👮‍♀️)
        '\x{1F46E}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (👮‍♂️)
        '\x{1F46F}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (👯‍♀️)
        '\x{1F46F}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (👯‍♂️)
        '\x{1F471}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👱🏻‍♀️)
        '\x{1F471}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👱🏻‍♂️)
        '\x{1F471}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👱🏼‍♀️)
        '\x{1F471}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👱🏼‍♂️)
        '\x{1F471}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👱🏽‍♀️)
        '\x{1F471}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👱🏽‍♂️)
        '\x{1F471}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👱🏾‍♀️)
        '\x{1F471}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👱🏾‍♂️)
        '\x{1F471}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👱🏿‍♀️)
        '\x{1F471}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👱🏿‍♂️)
        '\x{1F471}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (👱‍♀️)
        '\x{1F471}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (👱‍♂️)
        '\x{1F473}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👳🏻‍♀️)
        '\x{1F473}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👳🏻‍♂️)
        '\x{1F473}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👳🏼‍♀️)
        '\x{1F473}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👳🏼‍♂️)
        '\x{1F473}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👳🏽‍♀️)
        '\x{1F473}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👳🏽‍♂️)
        '\x{1F473}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👳🏾‍♀️)
        '\x{1F473}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👳🏾‍♂️)
        '\x{1F473}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👳🏿‍♀️)
        '\x{1F473}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👳🏿‍♂️)
        '\x{1F473}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (👳‍♀️)
        '\x{1F473}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (👳‍♂️)
        '\x{1F477}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👷🏻‍♀️)
        '\x{1F477}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👷🏻‍♂️)
        '\x{1F477}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👷🏼‍♀️)
        '\x{1F477}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👷🏼‍♂️)
        '\x{1F477}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👷🏽‍♀️)
        '\x{1F477}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👷🏽‍♂️)
        '\x{1F477}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👷🏾‍♀️)
        '\x{1F477}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👷🏾‍♂️)
        '\x{1F477}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (👷🏿‍♀️)
        '\x{1F477}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (👷🏿‍♂️)
        '\x{1F477}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (👷‍♀️)
        '\x{1F477}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (👷‍♂️)
        '\x{1F481}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💁🏻‍♀️)
        '\x{1F481}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💁🏻‍♂️)
        '\x{1F481}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💁🏼‍♀️)
        '\x{1F481}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💁🏼‍♂️)
        '\x{1F481}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💁🏽‍♀️)
        '\x{1F481}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💁🏽‍♂️)
        '\x{1F481}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💁🏾‍♀️)
        '\x{1F481}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💁🏾‍♂️)
        '\x{1F481}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💁🏿‍♀️)
        '\x{1F481}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💁🏿‍♂️)
        '\x{1F481}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (💁‍♀️)
        '\x{1F481}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (💁‍♂️)
        '\x{1F482}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💂🏻‍♀️)
        '\x{1F482}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💂🏻‍♂️)
        '\x{1F482}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💂🏼‍♀️)
        '\x{1F482}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💂🏼‍♂️)
        '\x{1F482}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💂🏽‍♀️)
        '\x{1F482}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💂🏽‍♂️)
        '\x{1F482}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💂🏾‍♀️)
        '\x{1F482}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💂🏾‍♂️)
        '\x{1F482}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💂🏿‍♀️)
        '\x{1F482}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💂🏿‍♂️)
        '\x{1F482}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (💂‍♀️)
        '\x{1F482}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (💂‍♂️)
        '\x{1F486}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💆🏻‍♀️)
        '\x{1F486}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💆🏻‍♂️)
        '\x{1F486}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💆🏼‍♀️)
        '\x{1F486}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💆🏼‍♂️)
        '\x{1F486}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💆🏽‍♀️)
        '\x{1F486}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💆🏽‍♂️)
        '\x{1F486}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💆🏾‍♀️)
        '\x{1F486}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💆🏾‍♂️)
        '\x{1F486}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💆🏿‍♀️)
        '\x{1F486}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💆🏿‍♂️)
        '\x{1F486}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (💆‍♀️)
        '\x{1F486}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (💆‍♂️)
        '\x{1F487}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💇🏻‍♀️)
        '\x{1F487}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💇🏻‍♂️)
        '\x{1F487}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💇🏼‍♀️)
        '\x{1F487}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💇🏼‍♂️)
        '\x{1F487}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💇🏽‍♀️)
        '\x{1F487}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💇🏽‍♂️)
        '\x{1F487}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💇🏾‍♀️)
        '\x{1F487}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💇🏾‍♂️)
        '\x{1F487}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (💇🏿‍♀️)
        '\x{1F487}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (💇🏿‍♂️)
        '\x{1F487}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (💇‍♀️)
        '\x{1F487}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (💇‍♂️)
        '\x{1F575}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🕵🏻‍♀️)
        '\x{1F575}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🕵🏻‍♂️)
        '\x{1F575}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🕵🏼‍♀️)
        '\x{1F575}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🕵🏼‍♂️)
        '\x{1F575}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🕵🏽‍♀️)
        '\x{1F575}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🕵🏽‍♂️)
        '\x{1F575}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🕵🏾‍♀️)
        '\x{1F575}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🕵🏾‍♂️)
        '\x{1F575}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🕵🏿‍♀️)
        '\x{1F575}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🕵🏿‍♂️)
        '\x{1F575}\x{FE0F}\x{200D}\x{2640}\x{FE0F}', // 7.0  [1] (🕵️‍♀️)
        '\x{1F575}\x{FE0F}\x{200D}\x{2642}\x{FE0F}', // 7.0  [1] (🕵️‍♂️)
        '\x{1F645}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙅🏻‍♀️)
        '\x{1F645}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙅🏻‍♂️)
        '\x{1F645}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙅🏼‍♀️)
        '\x{1F645}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙅🏼‍♂️)
        '\x{1F645}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙅🏽‍♀️)
        '\x{1F645}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙅🏽‍♂️)
        '\x{1F645}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙅🏾‍♀️)
        '\x{1F645}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙅🏾‍♂️)
        '\x{1F645}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙅🏿‍♀️)
        '\x{1F645}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙅🏿‍♂️)
        '\x{1F645}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🙅‍♀️)
        '\x{1F645}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🙅‍♂️)
        '\x{1F646}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙆🏻‍♀️)
        '\x{1F646}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙆🏻‍♂️)
        '\x{1F646}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙆🏼‍♀️)
        '\x{1F646}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙆🏼‍♂️)
        '\x{1F646}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙆🏽‍♀️)
        '\x{1F646}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙆🏽‍♂️)
        '\x{1F646}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙆🏾‍♀️)
        '\x{1F646}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙆🏾‍♂️)
        '\x{1F646}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙆🏿‍♀️)
        '\x{1F646}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙆🏿‍♂️)
        '\x{1F646}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🙆‍♀️)
        '\x{1F646}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🙆‍♂️)
        '\x{1F647}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙇🏻‍♀️)
        '\x{1F647}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙇🏻‍♂️)
        '\x{1F647}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙇🏼‍♀️)
        '\x{1F647}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙇🏼‍♂️)
        '\x{1F647}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙇🏽‍♀️)
        '\x{1F647}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙇🏽‍♂️)
        '\x{1F647}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙇🏾‍♀️)
        '\x{1F647}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙇🏾‍♂️)
        '\x{1F647}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙇🏿‍♀️)
        '\x{1F647}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙇🏿‍♂️)
        '\x{1F647}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🙇‍♀️)
        '\x{1F647}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🙇‍♂️)
        '\x{1F64B}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙋🏻‍♀️)
        '\x{1F64B}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙋🏻‍♂️)
        '\x{1F64B}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙋🏼‍♀️)
        '\x{1F64B}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙋🏼‍♂️)
        '\x{1F64B}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙋🏽‍♀️)
        '\x{1F64B}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙋🏽‍♂️)
        '\x{1F64B}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙋🏾‍♀️)
        '\x{1F64B}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙋🏾‍♂️)
        '\x{1F64B}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙋🏿‍♀️)
        '\x{1F64B}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙋🏿‍♂️)
        '\x{1F64B}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🙋‍♀️)
        '\x{1F64B}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🙋‍♂️)
        '\x{1F64D}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙍🏻‍♀️)
        '\x{1F64D}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙍🏻‍♂️)
        '\x{1F64D}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙍🏼‍♀️)
        '\x{1F64D}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙍🏼‍♂️)
        '\x{1F64D}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙍🏽‍♀️)
        '\x{1F64D}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙍🏽‍♂️)
        '\x{1F64D}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙍🏾‍♀️)
        '\x{1F64D}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙍🏾‍♂️)
        '\x{1F64D}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙍🏿‍♀️)
        '\x{1F64D}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙍🏿‍♂️)
        '\x{1F64D}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🙍‍♀️)
        '\x{1F64D}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🙍‍♂️)
        '\x{1F64E}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙎🏻‍♀️)
        '\x{1F64E}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙎🏻‍♂️)
        '\x{1F64E}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙎🏼‍♀️)
        '\x{1F64E}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙎🏼‍♂️)
        '\x{1F64E}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙎🏽‍♀️)
        '\x{1F64E}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙎🏽‍♂️)
        '\x{1F64E}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙎🏾‍♀️)
        '\x{1F64E}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙎🏾‍♂️)
        '\x{1F64E}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🙎🏿‍♀️)
        '\x{1F64E}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🙎🏿‍♂️)
        '\x{1F64E}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🙎‍♀️)
        '\x{1F64E}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🙎‍♂️)
        '\x{1F6A3}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚣🏻‍♀️)
        '\x{1F6A3}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚣🏻‍♂️)
        '\x{1F6A3}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚣🏼‍♀️)
        '\x{1F6A3}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚣🏼‍♂️)
        '\x{1F6A3}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚣🏽‍♀️)
        '\x{1F6A3}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚣🏽‍♂️)
        '\x{1F6A3}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚣🏾‍♀️)
        '\x{1F6A3}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚣🏾‍♂️)
        '\x{1F6A3}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚣🏿‍♀️)
        '\x{1F6A3}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚣🏿‍♂️)
        '\x{1F6A3}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🚣‍♀️)
        '\x{1F6A3}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🚣‍♂️)
        '\x{1F6B4}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚴🏻‍♀️)
        '\x{1F6B4}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚴🏻‍♂️)
        '\x{1F6B4}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚴🏼‍♀️)
        '\x{1F6B4}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚴🏼‍♂️)
        '\x{1F6B4}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚴🏽‍♀️)
        '\x{1F6B4}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚴🏽‍♂️)
        '\x{1F6B4}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚴🏾‍♀️)
        '\x{1F6B4}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚴🏾‍♂️)
        '\x{1F6B4}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚴🏿‍♀️)
        '\x{1F6B4}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚴🏿‍♂️)
        '\x{1F6B4}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🚴‍♀️)
        '\x{1F6B4}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🚴‍♂️)
        '\x{1F6B5}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚵🏻‍♀️)
        '\x{1F6B5}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚵🏻‍♂️)
        '\x{1F6B5}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚵🏼‍♀️)
        '\x{1F6B5}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚵🏼‍♂️)
        '\x{1F6B5}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚵🏽‍♀️)
        '\x{1F6B5}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚵🏽‍♂️)
        '\x{1F6B5}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚵🏾‍♀️)
        '\x{1F6B5}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚵🏾‍♂️)
        '\x{1F6B5}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚵🏿‍♀️)
        '\x{1F6B5}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚵🏿‍♂️)
        '\x{1F6B5}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🚵‍♀️)
        '\x{1F6B5}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🚵‍♂️)
        '\x{1F6B6}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚶🏻‍♀️)
        '\x{1F6B6}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚶🏻‍♂️)
        '\x{1F6B6}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚶🏼‍♀️)
        '\x{1F6B6}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚶🏼‍♂️)
        '\x{1F6B6}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚶🏽‍♀️)
        '\x{1F6B6}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚶🏽‍♂️)
        '\x{1F6B6}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚶🏾‍♀️)
        '\x{1F6B6}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚶🏾‍♂️)
        '\x{1F6B6}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (🚶🏿‍♀️)
        '\x{1F6B6}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (🚶🏿‍♂️)
        '\x{1F6B6}\x{200D}\x{2640}\x{FE0F}', // 6.0  [1] (🚶‍♀️)
        '\x{1F6B6}\x{200D}\x{2642}\x{FE0F}', // 6.0  [1] (🚶‍♂️)
        '\x{1F926}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤦🏻‍♀️)
        '\x{1F926}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤦🏻‍♂️)
        '\x{1F926}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤦🏼‍♀️)
        '\x{1F926}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤦🏼‍♂️)
        '\x{1F926}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤦🏽‍♀️)
        '\x{1F926}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤦🏽‍♂️)
        '\x{1F926}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤦🏾‍♀️)
        '\x{1F926}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤦🏾‍♂️)
        '\x{1F926}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤦🏿‍♀️)
        '\x{1F926}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤦🏿‍♂️)
        '\x{1F926}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤦‍♀️)
        '\x{1F926}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤦‍♂️)
        '\x{1F937}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤷🏻‍♀️)
        '\x{1F937}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤷🏻‍♂️)
        '\x{1F937}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤷🏼‍♀️)
        '\x{1F937}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤷🏼‍♂️)
        '\x{1F937}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤷🏽‍♀️)
        '\x{1F937}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤷🏽‍♂️)
        '\x{1F937}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤷🏾‍♀️)
        '\x{1F937}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤷🏾‍♂️)
        '\x{1F937}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤷🏿‍♀️)
        '\x{1F937}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤷🏿‍♂️)
        '\x{1F937}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤷‍♀️)
        '\x{1F937}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤷‍♂️)
        '\x{1F938}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤸🏻‍♀️)
        '\x{1F938}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤸🏻‍♂️)
        '\x{1F938}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤸🏼‍♀️)
        '\x{1F938}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤸🏼‍♂️)
        '\x{1F938}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤸🏽‍♀️)
        '\x{1F938}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤸🏽‍♂️)
        '\x{1F938}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤸🏾‍♀️)
        '\x{1F938}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤸🏾‍♂️)
        '\x{1F938}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤸🏿‍♀️)
        '\x{1F938}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤸🏿‍♂️)
        '\x{1F938}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤸‍♀️)
        '\x{1F938}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤸‍♂️)
        '\x{1F939}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤹🏻‍♀️)
        '\x{1F939}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤹🏻‍♂️)
        '\x{1F939}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤹🏼‍♀️)
        '\x{1F939}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤹🏼‍♂️)
        '\x{1F939}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤹🏽‍♀️)
        '\x{1F939}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤹🏽‍♂️)
        '\x{1F939}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤹🏾‍♀️)
        '\x{1F939}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤹🏾‍♂️)
        '\x{1F939}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤹🏿‍♀️)
        '\x{1F939}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤹🏿‍♂️)
        '\x{1F939}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤹‍♀️)
        '\x{1F939}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤹‍♂️)
        '\x{1F93C}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤼‍♀️)
        '\x{1F93C}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤼‍♂️)
        '\x{1F93D}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤽🏻‍♀️)
        '\x{1F93D}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤽🏻‍♂️)
        '\x{1F93D}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤽🏼‍♀️)
        '\x{1F93D}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤽🏼‍♂️)
        '\x{1F93D}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤽🏽‍♀️)
        '\x{1F93D}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤽🏽‍♂️)
        '\x{1F93D}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤽🏾‍♀️)
        '\x{1F93D}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤽🏾‍♂️)
        '\x{1F93D}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤽🏿‍♀️)
        '\x{1F93D}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤽🏿‍♂️)
        '\x{1F93D}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤽‍♀️)
        '\x{1F93D}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤽‍♂️)
        '\x{1F93E}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤾🏻‍♀️)
        '\x{1F93E}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤾🏻‍♂️)
        '\x{1F93E}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤾🏼‍♀️)
        '\x{1F93E}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤾🏼‍♂️)
        '\x{1F93E}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤾🏽‍♀️)
        '\x{1F93E}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤾🏽‍♂️)
        '\x{1F93E}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤾🏾‍♀️)
        '\x{1F93E}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤾🏾‍♂️)
        '\x{1F93E}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤾🏿‍♀️)
        '\x{1F93E}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤾🏿‍♂️)
        '\x{1F93E}\x{200D}\x{2640}\x{FE0F}', // 9.0  [1] (🤾‍♀️)
        '\x{1F93E}\x{200D}\x{2642}\x{FE0F}', // 9.0  [1] (🤾‍♂️)
        '\x{26F9}\x{1F3FB}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (⛹🏻‍♀️)
        '\x{26F9}\x{1F3FB}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (⛹🏻‍♂️)
        '\x{26F9}\x{1F3FC}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (⛹🏼‍♀️)
        '\x{26F9}\x{1F3FC}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (⛹🏼‍♂️)
        '\x{26F9}\x{1F3FD}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (⛹🏽‍♀️)
        '\x{26F9}\x{1F3FD}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (⛹🏽‍♂️)
        '\x{26F9}\x{1F3FE}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (⛹🏾‍♀️)
        '\x{26F9}\x{1F3FE}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (⛹🏾‍♂️)
        '\x{26F9}\x{1F3FF}\x{200D}\x{2640}\x{FE0F}', // 8.0  [1] (⛹🏿‍♀️)
        '\x{26F9}\x{1F3FF}\x{200D}\x{2642}\x{FE0F}', // 8.0  [1] (⛹🏿‍♂️)
        '\x{26F9}\x{FE0F}\x{200D}\x{2640}\x{FE0F}', // 5.2  [1] (⛹️‍♀️)
        '\x{26F9}\x{FE0F}\x{200D}\x{2642}\x{FE0F}', // 5.2  [1] (⛹️‍♂️)
    ];
}
