<?php

namespace LuoguLite\ProblemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use LuoguLite\UserBundle\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="luogulite_problem")
 */
class Problem implements \JsonSerializable
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
     * @var string
     *
     * @ORM\Column(type="string", length=1024, nullable=false)
     * @Assert\Length(min=3, max=1024)
     */
    protected $title = '新建题目';

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $description = '';

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $inputFormat = '';

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $outputFormat = '';

    /**
     * @var SampleTestcase[]
     *
     * @ORM\Column(type="array")
     */
    protected $sampleTestcases = [];

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $hint = '';

    /**
     * @var TestcaseInfo[]
     *
     * @ORM\Column(type="array")
     */
    protected $testcaseInfo = [];

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="LuoguLite\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $provider = null;

    /**
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Problem
     */
    public function setId(int $id): Problem {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Problem
     */
    public function setTitle(string $title): Problem {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Problem
     */
    public function setDescription(string $description): Problem {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputFormat(): string {
        return $this->inputFormat;
    }

    /**
     * @param string $inputFormat
     * @return Problem
     */
    public function setInputFormat(string $inputFormat): Problem {
        $this->inputFormat = $inputFormat;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutputFormat(): string {
        return $this->outputFormat;
    }

    /**
     * @param string $outputFormat
     * @return Problem
     */
    public function setOutputFormat(string $outputFormat): Problem {
        $this->outputFormat = $outputFormat;
        return $this;
    }

    /**
     * @return SampleTestcase[]
     */
    public function getSampleTestcases(): array {
        return $this->sampleTestcases;
    }

    /**
     * @param SampleTestcase[] $sampleTestcases
     * @return Problem
     */
    public function setSampleTestcases(array $sampleTestcases): Problem {
        $this->sampleTestcases = $sampleTestcases;
        return $this;
    }

    /**
     * @return string
     */
    public function getHint(): string {
        return $this->hint;
    }

    /**
     * @param string $hint
     * @return Problem
     */
    public function setHint(string $hint): Problem {
        $this->hint = $hint;
        return $this;
    }

    /**
     * @return TestcaseInfo[]
     */
    public function getTestcaseInfo(): array {
        return $this->testcaseInfo;
    }

    /**
     * @param TestcaseInfo[] $testcaseInfo
     * @return Problem
     */
    public function setTestcaseInfo(array $testcaseInfo): Problem {
        $this->testcaseInfo = $testcaseInfo;
        return $this;
    }

    /**
     * @return null|User
     */
    public function getProvider(): ?User {
        return $this->provider;
    }

    /**
     * @param null|User $provider
     * @return Problem
     */
    public function setProvider(?User $provider): Problem {
        $this->provider = $provider;
        return $this;
    }

    public function serializeForList() {
        return [
            "id" => $this->getId(),
            "title" => $this->getTitle(),
            "provider" => $this->getProvider()
        ];
    }

    public function jsonSerialize() {
        return $this->serializeForList();
    }
}
