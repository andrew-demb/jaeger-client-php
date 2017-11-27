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

final class TagType
{
    const STRING = 0;
    const DOUBLE = 1;
    const BOOL = 2;
    const LONG = 3;
    const BINARY = 4;

    static public $__names = array(
        0 => 'STRING',
        1 => 'DOUBLE',
        2 => 'BOOL',
        3 => 'LONG',
        4 => 'BINARY',
    );
}
