<?php
/**
 * PAN\SimpleHtmlDom\NodeCollection
 *
 * @author David Neilsen <david@panmedia.co.nz>
 */
namespace PAN\SimpleHtmlDom;
use ArrayObject;

class NodeCollection extends ArrayObject {

    public function dump() {
        $result = [];
        foreach ($this as $node) {
            $result[] = $node->dump();
        }
        return implode(PHP_EOL, $result);
    }

    public function __call($name, $arguments) {
        if (isset($this[0])) {
            return call_user_func_array([$this[0], $name], $arguments);
        }
        return null;
    }

}
