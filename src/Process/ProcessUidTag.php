<?php
declare(strict_types=1);

namespace CodeTool\OpenTracing\Process;

use CodeTool\OpenTracing\Tag\LongTag;

class ProcessUidTag extends LongTag
{
    public function __construct()
    {
        parent::__construct('process.uid', getmyuid());
    }
}
