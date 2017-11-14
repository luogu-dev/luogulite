<?php
namespace LuoguLite\ProblemBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class JudgeRecordStatusType extends AbstractEnumType
{
    const ACCEPTED = 'AC';
    const UNACCEPTED = 'UN_AC';
    const COMPILE_ERROR = 'CE';

    protected static $choices = [
        self::ACCEPTED => 'Accepted',
        self::UNACCEPTED => 'Unaccepted',
        self::COMPILE_ERROR => 'Compile Error'
    ];
}