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
     * @EnumAssert\Enum(entity="LuoguLite\ProblemBundle\DBAL\Type\JudgeRecordStatusType")
     */
    protected $status;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    protected $score;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     * @return JudgeRecord
     */
    public function setId(int $id): JudgeRecord {
        $this->id = $id;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User {
        return $this->user;
    }

    /**
     * @param User $user
     * @return JudgeRecord
     */
    public function setUser(User $user): JudgeRecord {
        $this->user = $user;
        return $this;
    }

    /**
     * @return Problem
     */
    public function getProblem(): Problem {
        return $this->problem;
    }

    /**
     * @param Problem $problem
     * @return JudgeRecord
     */
    public function setProblem(Problem $problem): JudgeRecord {
        $this->problem = $problem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return JudgeRecord
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getScore(): int {
        return $this->score;
    }

    /**
     * @param int $score
     * @return JudgeRecord
     */
    public function setScore(int $score): JudgeRecord {
        $this->score = $score;
        return $this;
    }
}
