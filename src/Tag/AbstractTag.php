<?php
declare(strict_types=1);

namespace Jaeger\Tag;

use Jaeger\Thrift\Tag;

abstract class AbstractTag extends Tag implements TagInterface
{
    public function __construct(
        string $key,
        int $type,
        ?string $vStr = null,
        ?float $vDouble = null,
        ?bool $vBool = null,
        ?int $vLong = null,
        ?string $vBinary = null
    ) {
        $this->key = $key;
        $this->vType = $type;
        $this->vStr = $vStr;
        $this->vDouble = $vDouble;
        $this->vBool = $vBool;
        $this->vLong = $vLong;
        $this->vBinary = $vBinary;
        parent::__construct();
    }
}
