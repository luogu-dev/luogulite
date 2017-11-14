<?php
namespace LuoguLite\ProblemBundle\Entity;

/**
 * @package LuoguLite\ProblemBundle\Entity
 */
class TestcaseInfo
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $timeLimit;

    /**
     * @var int
     */
    protected $memoryLimit;

    /**
     * @var int
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
     * @return TestcaseInfo
     */
    public function setId(int $id): TestcaseInfo {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeLimit(): int {
        return $this->timeLimit;
    }

    /**
     * @param int $timeLimit
     * @return TestcaseInfo
     */
    public function setTimeLimit(int $timeLimit): TestcaseInfo {
        $this->timeLimit = $timeLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemoryLimit(): int {
        return $this->memoryLimit;
    }

    /**
     * @param int $memoryLimit
     * @return TestcaseInfo
     */
    public function setMemoryLimit(int $memoryLimit): TestcaseInfo {
        $this->memoryLimit = $memoryLimit;
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
     * @return TestcaseInfo
     */
    public function setScore(int $score): TestcaseInfo {
        $this->score = $score;
        return $this;
    }
}