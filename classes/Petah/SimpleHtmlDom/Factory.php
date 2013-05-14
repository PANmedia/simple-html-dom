<?php
/**
 * PanMedia\SimpleHthmlDom\Factory
 *
 * @author David Neilsen <d.c.neilsen@gmail.com>
 */
namespace PanMedia\SimpleHthmlDom;
use PanMedia\SimpleHtmlDom;

class Factory {

    public function fromString($string, $lowercase = true, $forceTagsClosed = true, $targetCharset = DEFAULT_TARGET_CHARSET, $stripRN = true, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT) {
        $dom = new SimpleHtmlDom(null, $lowercase, $forceTagsClosed, $targetCharset, $stripRN, $defaultBRText, $defaultSpanText);
        if (empty($string) || strlen($string) > MAX_FILE_SIZE) {
            $dom->clear();
            return false;
        }
        $dom->load($string, $lowercase, $stripRN);
        return $dom;
    }

}
