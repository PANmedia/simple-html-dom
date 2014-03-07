<?php
/**
 * PAN\SimpleHtmlDom\Factory
 *
 * @author David Neilsen <david@panmedia.co.nz>
 */
namespace PAN\SimpleHtmlDom;
use PAN\SimpleHtmlDom;

class Factory {

    public static function fromString($string, $lowercase = true, $forceTagsClosed = true, $targetCharset = DEFAULT_TARGET_CHARSET, $stripRN = false, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT) {
        $dom = new SimpleHtmlDom(null, $lowercase, $forceTagsClosed, $targetCharset, $stripRN, $defaultBRText, $defaultSpanText);
        if (empty($string) || strlen($string) > MAX_FILE_SIZE) {
            $dom->clear();
            return false;
        }
        $dom->load($string, $lowercase, $stripRN);
        return $dom;
    }

}
