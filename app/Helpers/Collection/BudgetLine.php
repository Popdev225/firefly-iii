<?php

namespace FireflyIII\Helpers\Collection;

use FireflyIII\Models\Budget as BudgetModel;
use FireflyIII\Models\LimitRepetition;

/**
 * @codeCoverageIgnore
 *
 * Class BudgetLine
 *
 * @package FireflyIII\Helpers\Collection
 */
class BudgetLine
{

    /** @var  BudgetModel */
    protected $budget;
    /** @var string */
    protected $budgeted = '0';
    /** @var string */
    protected $left = '0';
    /** @var string */
    protected $overspent = '0';
    /** @var  LimitRepetition */
    protected $repetition;
    /** @var string */
    protected $spent = '0';

    /**
     * @return BudgetModel
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param BudgetModel $budget
     */
    public function setBudget(BudgetModel $budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return string
     */
    public function getBudgeted()
    {
        return $this->budgeted;
    }

    /**
     * @param string $budgeted
     */
    public function setBudgeted(string $budgeted)
    {
        $this->budgeted = $budgeted;
    }

    /**
     * @return string
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @param string $left
     */
    public function setLeft(string $left)
    {
        $this->left = $left;
    }

    /**
     * @return string
     */
    public function getOverspent()
    {
        return $this->overspent;
    }

    /**
     * @param string $overspent
     */
    public function setOverspent(string $overspent)
    {
        $this->overspent = $overspent;
    }

    /**
     * @return LimitRepetition
     */
    public function getRepetition()
    {
        return $this->repetition;
    }

    /**
     * @param LimitRepetition $repetition
     */
    public function setRepetition(LimitRepetition $repetition)
    {
        $this->repetition = $repetition;
    }

    /**
     * @return string
     */
    public function getSpent()
    {
        return $this->spent;
    }

    /**
     * @param string $spent
     */
    public function setSpent(string $spent)
    {
        $this->spent = $spent;
    }


}
