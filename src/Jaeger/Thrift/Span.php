<?php

namespace CodeTool\OpenTracing\Jaeger\Thrift;

/**
 * Autogenerated by Thrift Compiler (1.0.0-dev)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 * @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class Span
{
    static $isValidate = false;

    static $_TSPEC = array(
        1 => array(
            'var' => 'traceIdLow',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'traceIdHigh',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        3 => array(
            'var' => 'spanId',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        4 => array(
            'var' => 'parentSpanId',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        5 => array(
            'var' => 'operationName',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'references',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\CodeTool\OpenTracing\Jaeger\Thrift\SpanRef',
            ),
        ),
        7 => array(
            'var' => 'flags',
            'isRequired' => true,
            'type' => TType::I32,
        ),
        8 => array(
            'var' => 'startTime',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        9 => array(
            'var' => 'duration',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        10 => array(
            'var' => 'tags',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\CodeTool\OpenTracing\Jaeger\Thrift\Tag',
            ),
        ),
        11 => array(
            'var' => 'logs',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\CodeTool\OpenTracing\Jaeger\Thrift\Log',
            ),
        ),
    );

    /**
     * @var int
     */
    public $traceIdLow = null;

    /**
     * @var int
     */
    public $traceIdHigh = null;

    /**
     * @var int
     */
    public $spanId = null;

    /**
     * @var int
     */
    public $parentSpanId = null;

    /**
     * @var string
     */
    public $operationName = null;

    /**
     * @var \CodeTool\OpenTracing\Jaeger\Thrift\SpanRef[]
     */
    public $references = null;

    /**
     * @var int
     */
    public $flags = null;

    /**
     * @var int
     */
    public $startTime = null;

    /**
     * @var int
     */
    public $duration = null;

    /**
     * @var \CodeTool\OpenTracing\Jaeger\Thrift\Tag[]
     */
    public $tags = null;

    /**
     * @var \CodeTool\OpenTracing\Jaeger\Thrift\Log[]
     */
    public $logs = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['traceIdLow'])) {
                $this->traceIdLow = $vals['traceIdLow'];
            }
            if (isset($vals['traceIdHigh'])) {
                $this->traceIdHigh = $vals['traceIdHigh'];
            }
            if (isset($vals['spanId'])) {
                $this->spanId = $vals['spanId'];
            }
            if (isset($vals['parentSpanId'])) {
                $this->parentSpanId = $vals['parentSpanId'];
            }
            if (isset($vals['operationName'])) {
                $this->operationName = $vals['operationName'];
            }
            if (isset($vals['references'])) {
                $this->references = $vals['references'];
            }
            if (isset($vals['flags'])) {
                $this->flags = $vals['flags'];
            }
            if (isset($vals['startTime'])) {
                $this->startTime = $vals['startTime'];
            }
            if (isset($vals['duration'])) {
                $this->duration = $vals['duration'];
            }
            if (isset($vals['tags'])) {
                $this->tags = $vals['tags'];
            }
            if (isset($vals['logs'])) {
                $this->logs = $vals['logs'];
            }
        }
    }

    public function getName()
    {
        return 'Span';
    }

    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->traceIdLow);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->traceIdHigh);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->spanId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->parentSpanId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->operationName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::LST) {
                        $this->references = array();
                        $_size7 = 0;
                        $_etype10 = 0;
                        $xfer += $input->readListBegin($_etype10, $_size7);
                        for ($_i11 = 0; $_i11 < $_size7; ++$_i11) {
                            $elem12 = null;
                            $elem12 = new \CodeTool\OpenTracing\Jaeger\Thrift\SpanRef();
                            $xfer += $elem12->read($input);
                            $this->references [] = $elem12;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->flags);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->startTime);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->duration);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::LST) {
                        $this->tags = array();
                        $_size13 = 0;
                        $_etype16 = 0;
                        $xfer += $input->readListBegin($_etype16, $_size13);
                        for ($_i17 = 0; $_i17 < $_size13; ++$_i17) {
                            $elem18 = null;
                            $elem18 = new \CodeTool\OpenTracing\Jaeger\Thrift\Tag();
                            $xfer += $elem18->read($input);
                            $this->tags [] = $elem18;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::LST) {
                        $this->logs = array();
                        $_size19 = 0;
                        $_etype22 = 0;
                        $xfer += $input->readListBegin($_etype22, $_size19);
                        for ($_i23 = 0; $_i23 < $_size19; ++$_i23) {
                            $elem24 = null;
                            $elem24 = new \CodeTool\OpenTracing\Jaeger\Thrift\Log();
                            $xfer += $elem24->read($input);
                            $this->logs [] = $elem24;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();

        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('Span');
        if ($this->traceIdLow !== null) {
            $xfer += $output->writeFieldBegin('traceIdLow', TType::I64, 1);
            $xfer += $output->writeI64($this->traceIdLow);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->traceIdHigh !== null) {
            $xfer += $output->writeFieldBegin('traceIdHigh', TType::I64, 2);
            $xfer += $output->writeI64($this->traceIdHigh);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->spanId !== null) {
            $xfer += $output->writeFieldBegin('spanId', TType::I64, 3);
            $xfer += $output->writeI64($this->spanId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->parentSpanId !== null) {
            $xfer += $output->writeFieldBegin('parentSpanId', TType::I64, 4);
            $xfer += $output->writeI64($this->parentSpanId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->operationName !== null) {
            $xfer += $output->writeFieldBegin('operationName', TType::STRING, 5);
            $xfer += $output->writeString($this->operationName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->references !== null) {
            if (!is_array($this->references)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('references', TType::LST, 6);
            {
                $output->writeListBegin(TType::STRUCT, count($this->references));
                {
                    foreach ($this->references as $iter25) {
                        $xfer += $iter25->write($output);
                    }
                }
                $output->writeListEnd();
            }
            $xfer += $output->writeFieldEnd();
        }
        if ($this->flags !== null) {
            $xfer += $output->writeFieldBegin('flags', TType::I32, 7);
            $xfer += $output->writeI32($this->flags);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->startTime !== null) {
            $xfer += $output->writeFieldBegin('startTime', TType::I64, 8);
            $xfer += $output->writeI64($this->startTime);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->duration !== null) {
            $xfer += $output->writeFieldBegin('duration', TType::I64, 9);
            $xfer += $output->writeI64($this->duration);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tags !== null) {
            if (!is_array($this->tags)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tags', TType::LST, 10);
            {
                $output->writeListBegin(TType::STRUCT, count($this->tags));
                {
                    foreach ($this->tags as $iter26) {
                        $xfer += $iter26->write($output);
                    }
                }
                $output->writeListEnd();
            }
            $xfer += $output->writeFieldEnd();
        }
        if ($this->logs !== null) {
            if (!is_array($this->logs)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('logs', TType::LST, 11);
            {
                $output->writeListBegin(TType::STRUCT, count($this->logs));
                {
                    foreach ($this->logs as $iter27) {
                        $xfer += $iter27->write($output);
                    }
                }
                $output->writeListEnd();
            }
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();

        return $xfer;
    }
}
