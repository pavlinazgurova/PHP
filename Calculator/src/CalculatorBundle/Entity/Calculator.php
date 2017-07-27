<?php

namespace CalculatorBundle\Entity;

class Calculator
{
    /*
     * @var float
     */
    private $leftOperand;

    /*
     * @var float
     */
    private $rightOperand;

    /*
     * @var string
     */
    private $operator;

    /*
     * @return float
     */
    public function getLeftOperand()
    {
        return $this->leftOperand;
    }

    /*
     *@param float $operand
     *
     * @return Calculator
     */
    public function setLeftOperand($operand)
    {
        $this->leftOperand = $operand;
        return $this;
    }

    /*
     * @var float
     */

    public function getRightOperand()
    {
        return $this->rightOperand;
    }

    /*
     *@param float $operand
     *
     * @return Calculator
     */

    public function setRightOperand($operand)
    {
        $this->rightOperand = $operand;

        return $this;
    }

    /*
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /*
     *@param string $operator
     *
     * @return Calculator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        return $this;
    }
}

?>