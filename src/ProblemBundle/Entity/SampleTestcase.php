<?php
namespace LuoguLite\ProblemBundle\Entity;

/**
 * @package LuoguLite\ProblemBundle\Entity
 */
class SampleTestcase
{
    /**
     * @var string
     */
    protected $input;

    /**
     * @var string
     */
    protected $output;

    /**
     * @return string
     */
    public function getInput(): string {
        return $this->input;
    }

    /**
     * @param string $input
     * @return SampleTestcase
     */
    public function setInput(string $input): SampleTestcase {
        $this->input = $input;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutput(): string {
        return $this->output;
    }

    /**
     * @param string $output
     * @return SampleTestcase
     */
    public function setOutput(string $output): SampleTestcase {
        $this->output = $output;
        return $this;
    }
}