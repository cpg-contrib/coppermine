<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.2
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/
/*
        MBFS - MultiByte Functions Simulator
        Functions that simulate the mb_*() extension functionality
        NOTE: only Unicode possible with these

        @author DJ Maze
        @copyright 2005 http://moocms.com
*/

global $mb_uppercase, $mb_lowercase;

# PHP 4 >= 4.0.6, PHP 5
if (!function_exists('mb_strlen')) {

        function mb_strlen($str) {
                global $mb_utf8_regex;
                return preg_match_all("#$mb_utf8_regex".'|[\x00-\x7F]#', $str, $dummy);
        }

        function mb_substr($str, $start, $end=null) {
                global $mb_utf8_regex;
                preg_match_all("#$mb_utf8_regex".'|[\x00-\x7F]#', $str, $str);
                $str = array_slice($str[0], $start, $end);
                return implode('', $str);
        }

}

# PHP 4 >= 4.3.0, PHP 5
function mb_strtolower($str) {
        global $mb_uppercase, $mb_lowercase;
        return str_replace($mb_uppercase, $mb_lowercase, $str);
}

function mb_strtoupper($str) {
        global $mb_uppercase, $mb_lowercase;
        return str_replace($mb_lowercase, $mb_uppercase, $str);
}

$mb_uppercase = array(
        'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
        '&Icirc;ú',
        '√Ä','√Å','√Ç','√É','√Ñ','√Ö','√Ü','√á','√à','√â','√ä','√ã','√å','√ç','√é','√è','√ê','√ë','√í','√ì','√î','√ï','√ñ','√ò','√ô','√ö','√õ','√ú','√ù','√û','≈∏','&Auml;Ä','&Auml;Ç','&Auml;Ñ','&Auml;Ü','&Auml;à','&Auml;ä','&Auml;å','&Auml;é','&Auml;ê','&Auml;í','&Auml;î','&Auml;ñ','&Auml;ò','&Auml;ö','&Auml;ú','&Auml;û','&Auml;†','&Auml;¢','&Auml;§','&Auml;¶','&Auml;®','&Auml;™','&Auml;¨','&Auml;Æ','I','&Auml;&sup2;','&Auml;¥','&Auml;∂',
        '&Auml;π','&Auml;ª','&Auml;Ω','&Auml;ø','≈Å','≈É','≈Ö','≈á',
        '≈ä','≈å','≈é','≈ê','≈í','≈î','≈ñ','≈ò','≈ö','≈ú','≈û','≈†','≈¢','≈§','≈¶','≈®','≈™','≈¨','≈Æ','≈∞','≈&sup2;','≈¥','≈∂','≈π','≈ª','≈Ω','S',
        '∆Ç','∆Ñ','∆á','∆ã',
        '∆ë','«∂','∆ò','&Egrave;Ω',
        '&Egrave;†','∆†','∆¢','∆§','∆ß',
        '∆¨','∆Ø','∆&sup3;','∆&micro;','∆∏',
        '∆º',
        '«∑','«Ö','«à','«ã','«ç','«è','«ë','«ì','«ï','«ó','«ô','«õ','∆é','«û','«†','«¢','«§','«¶','«®','«™','«¨','«Æ',
        '«&sup2;','«¥','«∏','«∫','«º','«æ','&Egrave;Ä','&Egrave;Ç','&Egrave;Ñ','&Egrave;Ü','&Egrave;à','&Egrave;ä','&Egrave;å','&Egrave;é','&Egrave;ê','&Egrave;í','&Egrave;î','&Egrave;ñ','&Egrave;ò','&Egrave;ö','&Egrave;ú','&Egrave;û',
        '&Egrave;¢','&Egrave;§','&Egrave;¶','&Egrave;®','&Egrave;™','&Egrave;¨','&Egrave;Æ','&Egrave;∞','&Egrave;&sup2;',
        '&Egrave;ª',
        '∆Å','∆Ü',
        '∆â','∆ä',
        '∆è',
        '∆ê',
        '∆ì',
        '∆î',
        '∆ó','∆ñ',
        '∆ú',
        '∆ù',
        '∆ü',
        '∆¶',
        '∆©',
        '∆Æ',
        '∆±','∆&sup2;',
        '∆∑',
        '&Eacute;Å',
        '&Icirc;Ü','&Icirc;à','&Icirc;â','&Icirc;ä',
        '&Icirc;ë','&Icirc;í','&Icirc;ì','&Icirc;î','&Icirc;ï','&Icirc;ñ','&Icirc;ó','&Icirc;ò','&Icirc;ô','&Icirc;ö','&Icirc;õ','&Icirc;ú','&Icirc;ù','&Icirc;û','&Icirc;ü','&Icirc;†','&Icirc;°','&Icirc;£','&Icirc;£','&Icirc;§','&Icirc;•','&Icirc;¶','&Icirc;ß','&Icirc;®','&Icirc;©','&Icirc;™','&Icirc;´','&Icirc;å','&Icirc;é','&Icirc;è','&Icirc;í','&Icirc;ò','&Icirc;¶','&Icirc;†',
        'œò','œö','œú','œû','œ†','œ¢','œ§','œ¶','œ®','œ™','œ¨','œÆ','&Icirc;ö','&Icirc;°','œπ',
        '&Icirc;ï','œ∑','œ∫',
        '–ê','–ë','–í','–ì','–î','–ï','–ñ','–ó','–ò','–ô','–ö','–õ','–ú','–ù','–û','–ü','–†','–°','–¢','–£','–§','–•','–¶','–ß','–®','–©','–™','–´','–¨','–≠','–Æ','–Ø','–Ä','–Å','–Ç','–É','–Ñ','–Ö','–Ü','–á','–à','–â','–ä','–ã','–å','–ç','–é','–è','—†','—¢','—§','—¶','—®','—™','—¨','—Æ','—∞','—&sup2;','—¥','—∂','—∏','—∫','—º','—æ','&Ograve;Ä','&Ograve;ä','&Ograve;å','&Ograve;é','&Ograve;ê','&Ograve;í','&Ograve;î','&Ograve;ñ','&Ograve;ò','&Ograve;ö','&Ograve;ú','&Ograve;û','&Ograve;†','&Ograve;¢','&Ograve;§','&Ograve;¶','&Ograve;®','&Ograve;™','&Ograve;¨','&Ograve;Æ','&Ograve;∞','&Ograve;&sup2;','&Ograve;¥','&Ograve;∂','&Ograve;∏','&Ograve;∫','&Ograve;º','&Ograve;æ','&Oacute;Å','&Oacute;É','&Oacute;Ö','&Oacute;á','&Oacute;â','&Oacute;ã','&Oacute;ç','&Oacute;ê','&Oacute;í','&Oacute;î','&Oacute;ñ','&Oacute;ò','&Oacute;ö','&Oacute;ú','&Oacute;û','&Oacute;†','&Oacute;¢','&Oacute;§','&Oacute;¶','&Oacute;®','&Oacute;™','&Oacute;¨','&Oacute;Æ','&Oacute;∞','&Oacute;&sup2;','&Oacute;¥','&Oacute;∂','&Oacute;∏','&Ocirc;Ä','&Ocirc;Ç','&Ocirc;Ñ','&Ocirc;Ü','&Ocirc;à','&Ocirc;ä','&Ocirc;å','&Ocirc;é','&Ocirc;±','&Ocirc;&sup2;','&Ocirc;&sup3;','&Ocirc;¥','&Ocirc;&micro;','&Ocirc;∂','&Ocirc;∑','&Ocirc;∏','&Ocirc;π','&Ocirc;∫','&Ocirc;ª','&Ocirc;º','&Ocirc;Ω','&Ocirc;æ','&Ocirc;ø','’Ä','’Å','’Ç','’É','’Ñ','’Ö','’Ü','’á','’à','’â','’ä','’ã','’å','’ç','’é','’è','’ê','’ë','’í','’ì','’î','’ï','’ñ',
        '&aacute;∏Ä','&aacute;∏Ç','&aacute;∏Ñ','&aacute;∏Ü','&aacute;∏à','&aacute;∏ä','&aacute;∏å','&aacute;∏é','&aacute;∏ê','&aacute;∏í','&aacute;∏î','&aacute;∏ñ','&aacute;∏ò','&aacute;∏ö','&aacute;∏ú','&aacute;∏û','&aacute;∏†','&aacute;∏¢','&aacute;∏§','&aacute;∏¶','&aacute;∏®','&aacute;∏™','&aacute;∏¨','&aacute;∏Æ','&aacute;∏∞','&aacute;∏&sup2;','&aacute;∏¥','&aacute;∏∂','&aacute;∏∏','&aacute;∏∫','&aacute;∏º','&aacute;∏æ','&aacute;πÄ','&aacute;πÇ','&aacute;πÑ','&aacute;πÜ','&aacute;πà','&aacute;πä','&aacute;πå','&aacute;πé','&aacute;πê','&aacute;πí','&aacute;πî','&aacute;πñ','&aacute;πò','&aacute;πö','&aacute;πú','&aacute;πû','&aacute;π†','&aacute;π¢','&aacute;π§','&aacute;π¶','&aacute;π®','&aacute;π™','&aacute;π¨','&aacute;πÆ','&aacute;π∞','&aacute;π&sup2;','&aacute;π¥','&aacute;π∂','&aacute;π∏','&aacute;π∫','&aacute;πº','&aacute;πæ','&aacute;∫Ä','&aacute;∫Ç','&aacute;∫Ñ','&aacute;∫Ü','&aacute;∫à','&aacute;∫ä','&aacute;∫å','&aacute;∫é','&aacute;∫ê','&aacute;∫í','&aacute;∫î',
        '&aacute;π†','&aacute;∫†','&aacute;∫¢','&aacute;∫§','&aacute;∫¶','&aacute;∫®','&aacute;∫™','&aacute;∫¨','&aacute;∫Æ','&aacute;∫∞','&aacute;∫&sup2;','&aacute;∫¥','&aacute;∫∂','&aacute;∫∏','&aacute;∫∫','&aacute;∫º','&aacute;∫æ','&aacute;ªÄ','&aacute;ªÇ','&aacute;ªÑ','&aacute;ªÜ','&aacute;ªà','&aacute;ªä','&aacute;ªå','&aacute;ªé','&aacute;ªê','&aacute;ªí','&aacute;ªî','&aacute;ªñ','&aacute;ªò','&aacute;ªö','&aacute;ªú','&aacute;ªû','&aacute;ª†','&aacute;ª¢','&aacute;ª§','&aacute;ª¶','&aacute;ª®','&aacute;ª™','&aacute;ª¨','&aacute;ªÆ','&aacute;ª∞','&aacute;ª&sup2;','&aacute;ª¥','&aacute;ª∂','&aacute;ª∏','&aacute;ºà','&aacute;ºâ','&aacute;ºä','&aacute;ºã','&aacute;ºå','&aacute;ºç','&aacute;ºé','&aacute;ºè','&aacute;ºò','&aacute;ºô','&aacute;ºö','&aacute;ºõ','&aacute;ºú','&aacute;ºù','&aacute;º®','&aacute;º©','&aacute;º™','&aacute;º´','&aacute;º¨','&aacute;º≠','&aacute;ºÆ','&aacute;ºØ','&aacute;º∏','&aacute;ºπ','&aacute;º∫','&aacute;ºª','&aacute;ºº','&aacute;ºΩ','&aacute;ºæ','&aacute;ºø','&aacute;Ωà','&aacute;Ωâ','&aacute;Ωä','&aacute;Ωã','&aacute;Ωå','&aacute;Ωç',
        '&aacute;Ωô',
        '&aacute;Ωõ',
        '&aacute;Ωù',
        '&aacute;Ωü','&aacute;Ω®','&aacute;Ω©','&aacute;Ω™','&aacute;Ω´','&aacute;Ω¨','&aacute;Ω≠','&aacute;ΩÆ','&aacute;ΩØ','&aacute;æ∫','&aacute;æª','&aacute;øà','&aacute;øâ','&aacute;øä','&aacute;øã','&aacute;øö','&aacute;øõ','&aacute;ø∏','&aacute;øπ','&aacute;ø™','&aacute;ø´','&aacute;ø∫','&aacute;øª','&aacute;æà','&aacute;æâ','&aacute;æä','&aacute;æã','&aacute;æå','&aacute;æç','&aacute;æé','&aacute;æè','&aacute;æò','&aacute;æô','&aacute;æö','&aacute;æõ','&aacute;æú','&aacute;æù','&aacute;æû','&aacute;æü','&aacute;æ®','&aacute;æ©','&aacute;æ™','&aacute;æ´','&aacute;æ¨','&aacute;æ≠','&aacute;æÆ','&aacute;æØ','&aacute;æ∏','&aacute;æπ',
        '&aacute;æº',
        '&Icirc;ô',
        '&aacute;øå',
        '&aacute;øò','&aacute;øô',
        '&aacute;ø®','&aacute;ø©',
        '&aacute;ø¨',
        '&aacute;øº',
        '&acirc;∞Ä','&acirc;∞Å','&acirc;∞Ç','&acirc;∞É','&acirc;∞Ñ','&acirc;∞Ö','&acirc;∞Ü','&acirc;∞á','&acirc;∞à','&acirc;∞â','&acirc;∞ä','&acirc;∞ã','&acirc;∞å','&acirc;∞ç','&acirc;∞é','&acirc;∞è','&acirc;∞ê','&acirc;∞ë','&acirc;∞í','&acirc;∞ì','&acirc;∞î','&acirc;∞ï','&acirc;∞ñ','&acirc;∞ó','&acirc;∞ò','&acirc;∞ô','&acirc;∞ö','&acirc;∞õ','&acirc;∞ú','&acirc;∞ù','&acirc;∞û','&acirc;∞ü','&acirc;∞†','&acirc;∞°','&acirc;∞¢','&acirc;∞£','&acirc;∞§','&acirc;∞•','&acirc;∞¶','&acirc;∞ß','&acirc;∞®','&acirc;∞©','&acirc;∞™','&acirc;∞´','&acirc;∞¨','&acirc;∞≠','&acirc;∞Æ','&acirc;&sup2;Ä','&acirc;&sup2;Ç','&acirc;&sup2;Ñ','&acirc;&sup2;Ü','&acirc;&sup2;à','&acirc;&sup2;ä','&acirc;&sup2;å','&acirc;&sup2;é','&acirc;&sup2;ê','&acirc;&sup2;í','&acirc;&sup2;î','&acirc;&sup2;ñ','&acirc;&sup2;ò','&acirc;&sup2;ö','&acirc;&sup2;ú','&acirc;&sup2;û','&acirc;&sup2;†','&acirc;&sup2;¢','&acirc;&sup2;§','&acirc;&sup2;¶','&acirc;&sup2;®','&acirc;&sup2;™','&acirc;&sup2;¨','&acirc;&sup2;Æ','&acirc;&sup2;∞','&acirc;&sup2;&sup2;','&acirc;&sup2;¥','&acirc;&sup2;∂','&acirc;&sup2;∏','&acirc;&sup2;∫','&acirc;&sup2;º','&acirc;&sup2;æ','&acirc;&sup3;Ä','&acirc;&sup3;Ç','&acirc;&sup3;Ñ','&acirc;&sup3;Ü','&acirc;&sup3;à','&acirc;&sup3;ä','&acirc;&sup3;å','&acirc;&sup3;é','&acirc;&sup3;ê','&acirc;&sup3;í','&acirc;&sup3;î','&acirc;&sup3;ñ','&acirc;&sup3;ò','&acirc;&sup3;ö','&acirc;&sup3;ú','&acirc;&sup3;û','&acirc;&sup3;†','&acirc;&sup3;¢',
        '&aacute;Ç†','&aacute;Ç°','&aacute;Ç¢','&aacute;Ç£','&aacute;Ç§','&aacute;Ç•','&aacute;Ç¶','&aacute;Çß','&aacute;Ç®','&aacute;Ç©','&aacute;Ç™','&aacute;Ç´','&aacute;Ç¨','&aacute;Ç≠','&aacute;ÇÆ','&aacute;ÇØ','&aacute;Ç∞','&aacute;Ç±','&aacute;Ç&sup2;','&aacute;Ç&sup3;','&aacute;Ç¥','&aacute;Ç&micro;','&aacute;Ç∂','&aacute;Ç∑','&aacute;Ç∏','&aacute;Çπ','&aacute;Ç∫','&aacute;Çª','&aacute;Çº','&aacute;ÇΩ','&aacute;Çæ','&aacute;Çø','&aacute;ÉÄ','&aacute;ÉÅ','&aacute;ÉÇ','&aacute;ÉÉ','&aacute;ÉÑ','&aacute;ÉÖ',
        'Ôº°','Ôº¢','Ôº£','Ôº§','Ôº•','Ôº¶','Ôºß','Ôº®','Ôº©','Ôº™','Ôº´','Ôº¨','Ôº≠','ÔºÆ','ÔºØ','Ôº∞','Ôº±','Ôº&sup2;','Ôº&sup3;','Ôº¥','Ôº&micro;','Ôº∂','Ôº∑','Ôº∏','Ôºπ','Ôº∫',
);
$mb_lowercase = array(
        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
        '&Acirc;&micro;',
        '√†','√°','√¢','√£','√§','√•','√¶','√ß','√®','√©','√™','√´','√¨','√≠','√Æ','√Ø','√∞','√±','√&sup2;','√&sup3;','√¥','√&micro;','√∂','√∏','√π','√∫','√ª','√º','√Ω','√æ','√ø','&Auml;Å','&Auml;É','&Auml;Ö','&Auml;á','&Auml;â','&Auml;ã','&Auml;ç','&Auml;è','&Auml;ë','&Auml;ì','&Auml;ï','&Auml;ó','&Auml;ô','&Auml;õ','&Auml;ù','&Auml;ü','&Auml;°','&Auml;£','&Auml;•','&Auml;ß','&Auml;©','&Auml;´','&Auml;≠','&Auml;Ø','&Auml;±','&Auml;&sup3;','&Auml;&micro;','&Auml;∑',
        '&Auml;∫','&Auml;º','&Auml;æ','≈Ä','≈Ç','≈Ñ','≈Ü','≈à',
        '≈ã','≈ç','≈è','≈ë','≈ì','≈ï','≈ó','≈ô','≈õ','≈ù','≈ü','≈°','≈£','≈•','≈ß','≈©','≈´','≈≠','≈Ø','≈±','≈&sup3;','≈&micro;','≈∑','≈∫','≈º','≈æ','≈ø',
        '∆É','∆Ö','∆à','∆å',
        '∆í','∆ï','∆ô','∆ö',
        '∆û','∆°','∆£','∆•','∆®',
        '∆≠','∆∞','∆¥','∆∂','∆π',
        '∆Ω',
        '∆ø','«Ü','«â','«å','«é','«ê','«í','«î','«ñ','«ò','«ö','«ú','«ù','«ü','«°','«£','«•','«ß','«©','«´','«≠','«Ø',
        '«&sup3;','«&micro;','«π','«ª','«Ω','«ø','&Egrave;Å','&Egrave;É','&Egrave;Ö','&Egrave;á','&Egrave;â','&Egrave;ã','&Egrave;ç','&Egrave;è','&Egrave;ë','&Egrave;ì','&Egrave;ï','&Egrave;ó','&Egrave;ô','&Egrave;õ','&Egrave;ù','&Egrave;ü',
        '&Egrave;£','&Egrave;•','&Egrave;ß','&Egrave;©','&Egrave;´','&Egrave;≠','&Egrave;Ø','&Egrave;±','&Egrave;&sup3;',
        '&Egrave;º',
        '&Eacute;ì','&Eacute;î',
        '&Eacute;ñ','&Eacute;ó',
        '&Eacute;ô',
        '&Eacute;õ',
        '&Eacute;†',
        '&Eacute;£',
        '&Eacute;®','&Eacute;©',
        '&Eacute;Ø',
        '&Eacute;&sup2;',
        '&Eacute;&micro;',
        '&Ecirc;Ä',
        '&Ecirc;É',
        '&Ecirc;à',
        '&Ecirc;ä','&Ecirc;ã',
        '&Ecirc;í',
        '&Ecirc;î',
        '&Icirc;¨','&Icirc;≠','&Icirc;Æ','&Icirc;Ø',
        '&Icirc;±','&Icirc;&sup2;','&Icirc;&sup3;','&Icirc;¥','&Icirc;&micro;','&Icirc;∂','&Icirc;∑','&Icirc;∏','&Icirc;π','&Icirc;∫','&Icirc;ª','&Icirc;º','&Icirc;Ω','&Icirc;æ','&Icirc;ø','œÄ','œÅ','œÇ','œÉ','œÑ','œÖ','œÜ','œá','œà','œâ','œä','œã','œå','œç','œé','œê','œë','œï','œñ',
        'œô','œõ','œù','œü','œ°','œ£','œ•','œß','œ©','œ´','œ≠','œØ','œ∞','œ±','œ&sup2;',
        'œ&micro;','œ∏','œª',
        '–∞','–±','–&sup2;','–&sup3;','–¥','–&micro;','–∂','–∑','–∏','–π','–∫','–ª','–º','–Ω','–æ','–ø','—Ä','—Å','—Ç','—É','—Ñ','—Ö','—Ü','—á','—à','—â','—ä','—ã','—å','—ç','—é','—è','—ê','—ë','—í','—ì','—î','—ï','—ñ','—ó','—ò','—ô','—ö','—õ','—ú','—ù','—û','—ü','—°','—£','—•','—ß','—©','—´','—≠','—Ø','—±','—&sup3;','—&micro;','—∑','—π','—ª','—Ω','—ø','&Ograve;Å','&Ograve;ã','&Ograve;ç','&Ograve;è','&Ograve;ë','&Ograve;ì','&Ograve;ï','&Ograve;ó','&Ograve;ô','&Ograve;õ','&Ograve;ù','&Ograve;ü','&Ograve;°','&Ograve;£','&Ograve;•','&Ograve;ß','&Ograve;©','&Ograve;´','&Ograve;≠','&Ograve;Ø','&Ograve;±','&Ograve;&sup3;','&Ograve;&micro;','&Ograve;∑','&Ograve;π','&Ograve;ª','&Ograve;Ω','&Ograve;ø','&Oacute;Ç','&Oacute;Ñ','&Oacute;Ü','&Oacute;à','&Oacute;ä','&Oacute;å','&Oacute;é','&Oacute;ë','&Oacute;ì','&Oacute;ï','&Oacute;ó','&Oacute;ô','&Oacute;õ','&Oacute;ù','&Oacute;ü','&Oacute;°','&Oacute;£','&Oacute;•','&Oacute;ß','&Oacute;©','&Oacute;´','&Oacute;≠','&Oacute;Ø','&Oacute;±','&Oacute;&sup3;','&Oacute;&micro;','&Oacute;∑','&Oacute;π','&Ocirc;Å','&Ocirc;É','&Ocirc;Ö','&Ocirc;á','&Ocirc;â','&Ocirc;ã','&Ocirc;ç','&Ocirc;è','’°','’¢','’£','’§','’•','’¶','’ß','’®','’©','’™','’´','’¨','’≠','’Æ','’Ø','’∞','’±','’&sup2;','’&sup3;','’¥','’&micro;','’∂','’∑','’∏','’π','’∫','’ª','’º','’Ω','’æ','’ø','&Ouml;Ä','&Ouml;Å','&Ouml;Ç','&Ouml;É','&Ouml;Ñ','&Ouml;Ö','&Ouml;Ü',
        '&aacute;∏Å','&aacute;∏É','&aacute;∏Ö','&aacute;∏á','&aacute;∏â','&aacute;∏ã','&aacute;∏ç','&aacute;∏è','&aacute;∏ë','&aacute;∏ì','&aacute;∏ï','&aacute;∏ó','&aacute;∏ô','&aacute;∏õ','&aacute;∏ù','&aacute;∏ü','&aacute;∏°','&aacute;∏£','&aacute;∏•','&aacute;∏ß','&aacute;∏©','&aacute;∏´','&aacute;∏≠','&aacute;∏Ø','&aacute;∏±','&aacute;∏&sup3;','&aacute;∏&micro;','&aacute;∏∑','&aacute;∏π','&aacute;∏ª','&aacute;∏Ω','&aacute;∏ø','&aacute;πÅ','&aacute;πÉ','&aacute;πÖ','&aacute;πá','&aacute;πâ','&aacute;πã','&aacute;πç','&aacute;πè','&aacute;πë','&aacute;πì','&aacute;πï','&aacute;πó','&aacute;πô','&aacute;πõ','&aacute;πù','&aacute;πü','&aacute;π°','&aacute;π£','&aacute;π•','&aacute;πß','&aacute;π©','&aacute;π´','&aacute;π≠','&aacute;πØ','&aacute;π±','&aacute;π&sup3;','&aacute;π&micro;','&aacute;π∑','&aacute;ππ','&aacute;πª','&aacute;πΩ','&aacute;πø','&aacute;∫Å','&aacute;∫É','&aacute;∫Ö','&aacute;∫á','&aacute;∫â','&aacute;∫ã','&aacute;∫ç','&aacute;∫è','&aacute;∫ë','&aacute;∫ì','&aacute;∫ï',
        '&aacute;∫õ','&aacute;∫°','&aacute;∫£','&aacute;∫•','&aacute;∫ß','&aacute;∫©','&aacute;∫´','&aacute;∫≠','&aacute;∫Ø','&aacute;∫±','&aacute;∫&sup3;','&aacute;∫&micro;','&aacute;∫∑','&aacute;∫π','&aacute;∫ª','&aacute;∫Ω','&aacute;∫ø','&aacute;ªÅ','&aacute;ªÉ','&aacute;ªÖ','&aacute;ªá','&aacute;ªâ','&aacute;ªã','&aacute;ªç','&aacute;ªè','&aacute;ªë','&aacute;ªì','&aacute;ªï','&aacute;ªó','&aacute;ªô','&aacute;ªõ','&aacute;ªù','&aacute;ªü','&aacute;ª°','&aacute;ª£','&aacute;ª•','&aacute;ªß','&aacute;ª©','&aacute;ª´','&aacute;ª≠','&aacute;ªØ','&aacute;ª±','&aacute;ª&sup3;','&aacute;ª&micro;','&aacute;ª∑','&aacute;ªπ','&aacute;ºÄ','&aacute;ºÅ','&aacute;ºÇ','&aacute;ºÉ','&aacute;ºÑ','&aacute;ºÖ','&aacute;ºÜ','&aacute;ºá','&aacute;ºê','&aacute;ºë','&aacute;ºí','&aacute;ºì','&aacute;ºî','&aacute;ºï','&aacute;º†','&aacute;º°','&aacute;º¢','&aacute;º£','&aacute;º§','&aacute;º•','&aacute;º¶','&aacute;ºß','&aacute;º∞','&aacute;º±','&aacute;º&sup2;','&aacute;º&sup3;','&aacute;º¥','&aacute;º&micro;','&aacute;º∂','&aacute;º∑','&aacute;ΩÄ','&aacute;ΩÅ','&aacute;ΩÇ','&aacute;ΩÉ','&aacute;ΩÑ','&aacute;ΩÖ',
        '&aacute;Ωë',
        '&aacute;Ωì',
        '&aacute;Ωï',
        '&aacute;Ωó','&aacute;Ω†','&aacute;Ω°','&aacute;Ω¢','&aacute;Ω£','&aacute;Ω§','&aacute;Ω•','&aacute;Ω¶','&aacute;Ωß','&aacute;Ω∞','&aacute;Ω±','&aacute;Ω&sup2;','&aacute;Ω&sup3;','&aacute;Ω¥','&aacute;Ω&micro;','&aacute;Ω∂','&aacute;Ω∑','&aacute;Ω∏','&aacute;Ωπ','&aacute;Ω∫','&aacute;Ωª','&aacute;Ωº','&aacute;ΩΩ','&aacute;æÄ','&aacute;æÅ','&aacute;æÇ','&aacute;æÉ','&aacute;æÑ','&aacute;æÖ','&aacute;æÜ','&aacute;æá','&aacute;æê','&aacute;æë','&aacute;æí','&aacute;æì','&aacute;æî','&aacute;æï','&aacute;æñ','&aacute;æó','&aacute;æ†','&aacute;æ°','&aacute;æ¢','&aacute;æ£','&aacute;æ§','&aacute;æ•','&aacute;æ¶','&aacute;æß','&aacute;æ∞','&aacute;æ±',
        '&aacute;æ&sup3;',
        '&aacute;ææ',
        '&aacute;øÉ',
        '&aacute;øê','&aacute;øë',
        '&aacute;ø†','&aacute;ø°',
        '&aacute;ø•',
        '&aacute;ø&sup3;',
        '&acirc;∞∞','&acirc;∞±','&acirc;∞&sup2;','&acirc;∞&sup3;','&acirc;∞¥','&acirc;∞&micro;','&acirc;∞∂','&acirc;∞∑','&acirc;∞∏','&acirc;∞π','&acirc;∞∫','&acirc;∞ª','&acirc;∞º','&acirc;∞Ω','&acirc;∞æ','&acirc;∞ø','&acirc;±Ä','&acirc;±Å','&acirc;±Ç','&acirc;±É','&acirc;±Ñ','&acirc;±Ö','&acirc;±Ü','&acirc;±á','&acirc;±à','&acirc;±â','&acirc;±ä','&acirc;±ã','&acirc;±å','&acirc;±ç','&acirc;±é','&acirc;±è','&acirc;±ê','&acirc;±ë','&acirc;±í','&acirc;±ì','&acirc;±î','&acirc;±ï','&acirc;±ñ','&acirc;±ó','&acirc;±ò','&acirc;±ô','&acirc;±ö','&acirc;±õ','&acirc;±ú','&acirc;±ù','&acirc;±û','&acirc;&sup2;Å','&acirc;&sup2;É','&acirc;&sup2;Ö','&acirc;&sup2;á','&acirc;&sup2;â','&acirc;&sup2;ã','&acirc;&sup2;ç','&acirc;&sup2;è','&acirc;&sup2;ë','&acirc;&sup2;ì','&acirc;&sup2;ï','&acirc;&sup2;ó','&acirc;&sup2;ô','&acirc;&sup2;õ','&acirc;&sup2;ù','&acirc;&sup2;ü','&acirc;&sup2;°','&acirc;&sup2;£','&acirc;&sup2;•','&acirc;&sup2;ß','&acirc;&sup2;©','&acirc;&sup2;´','&acirc;&sup2;≠','&acirc;&sup2;Ø','&acirc;&sup2;±','&acirc;&sup2;&sup3;','&acirc;&sup2;&micro;','&acirc;&sup2;∑','&acirc;&sup2;π','&acirc;&sup2;ª','&acirc;&sup2;Ω','&acirc;&sup2;ø','&acirc;&sup3;Å','&acirc;&sup3;É','&acirc;&sup3;Ö','&acirc;&sup3;á','&acirc;&sup3;â','&acirc;&sup3;ã','&acirc;&sup3;ç','&acirc;&sup3;è','&acirc;&sup3;ë','&acirc;&sup3;ì','&acirc;&sup3;ï','&acirc;&sup3;ó','&acirc;&sup3;ô','&acirc;&sup3;õ','&acirc;&sup3;ù','&acirc;&sup3;ü','&acirc;&sup3;°','&acirc;&sup3;£',
        '&acirc;¥Ä','&acirc;¥Å','&acirc;¥Ç','&acirc;¥É','&acirc;¥Ñ','&acirc;¥Ö','&acirc;¥Ü','&acirc;¥á','&acirc;¥à','&acirc;¥â','&acirc;¥ä','&acirc;¥ã','&acirc;¥å','&acirc;¥ç','&acirc;¥é','&acirc;¥è','&acirc;¥ê','&acirc;¥ë','&acirc;¥í','&acirc;¥ì','&acirc;¥î','&acirc;¥ï','&acirc;¥ñ','&acirc;¥ó','&acirc;¥ò','&acirc;¥ô','&acirc;¥ö','&acirc;¥õ','&acirc;¥ú','&acirc;¥ù','&acirc;¥û','&acirc;¥ü','&acirc;¥†','&acirc;¥°','&acirc;¥¢','&acirc;¥£','&acirc;¥§','&acirc;¥•',
        'ÔΩÅ','ÔΩÇ','ÔΩÉ','ÔΩÑ','ÔΩÖ','ÔΩÜ','ÔΩá','ÔΩà','ÔΩâ','ÔΩä','ÔΩã','ÔΩå','ÔΩç','ÔΩé','ÔΩè','ÔΩê','ÔΩë','ÔΩí','ÔΩì','ÔΩî','ÔΩï','ÔΩñ','ÔΩó','ÔΩò','ÔΩô','ÔΩö',
);