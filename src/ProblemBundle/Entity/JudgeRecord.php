<?php

namespace LuoguLite\ProblemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Fresh\DoctrineEnumBundle\Validator\Constraints as EnumAssert;
use LuoguLite\UserBundle\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="luogulite_judgerecord")
 */
class JudgeRecord
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="LuoguLite\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $user;

    /**
     * @var Problem
     *
     * @ORM\ManyToOne(targetEntity="Problem")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $problem;

    /**
     * @ORM\Column(name="position", type="JudgeRecordStatusType", nullable=false)
     * @EnumAssert\Enum(entity="LuoguLite\ProblemBundle\DBAL\Types\JudgeRecordStatusType")
     */
    protected $status;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    protected $score;
}
