<?php
declare(strict_types=1);

namespace Jaeger\Codec;

class CodecRegistry implements \ArrayAccess
{
    private $codecs = [];

    /**
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->codecs);
    }

    /**
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        if (false === array_key_exists($offset, $this->codecs)) {
            return null;
        }

        return $this->codecs[$offset];
    }

    /**
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        $this->codecs[$offset] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        if (false === array_key_exists($offset, $this->codecs)) {
            return $this;
        }
        unset($this->codecs[$offset]);

        return $this;
    }
}
