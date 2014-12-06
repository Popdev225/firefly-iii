<?php

namespace FireflyIII\Collection;


use Carbon\Carbon;

class PiggybankPart
{
    /** @var  float */
    public $amountPerBar;

    /** @var  float */
    public $currentamount;

    /** @var  float */
    public $cumulativeAmount;

    /** @var  \Reminder */
    public $reminder;

    /** @var  \PiggybankRepetition */
    public $repetition;

    /** @var  Carbon */
    public $startdate;

    /** @var  Carbon */
    public $targetdate;

    /**
     * @return \Reminder
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * @param \Reminder $reminder
     */
    public function setReminder($reminder)
    {
        $this->reminder = $reminder;
    }

    /**
     * @return \PiggybankRepetition
     */
    public function getRepetition()
    {
        return $this->repetition;
    }

    /**
     * @param \PiggybankRepetition $repetition
     */
    public function setRepetition($repetition)
    {
        $this->repetition = $repetition;
    }

    /**
     * @return Carbon
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param Carbon $startdate
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;
    }

    /**
     * @return Carbon
     */
    public function getTargetdate()
    {
        return $this->targetdate;
    }

    /**
     * @param Carbon $targetdate
     */
    public function setTargetdate($targetdate)
    {
        $this->targetdate = $targetdate;
    }

    public function hasReminder()
    {
        return !is_null($this->reminder);
    }

    public function percentage()
    {
        if ($this->getCurrentamount() < $this->getCumulativeAmount()) {
            $pct = 0;
            // calculate halway point?
            if ($this->getCumulativeAmount() - $this->getCurrentamount() < $this->getAmountPerBar()) {
                $left = $this->getCurrentamount() % $this->getAmountPerBar();
                $pct  = round($left / $this->getAmountPerBar() * 100);
            }

            return $pct;
        } else {
            return 100;
        }
    }

    /**
     * @return float
     */
    public function getCurrentamount()
    {
        return $this->currentamount;
    }

    /**
     * @param float $currentamount
     */
    public function setCurrentamount($currentamount)
    {
        $this->currentamount = $currentamount;
    }

    /**
     * @return float
     */
    public function getAmountPerBar()
    {
        return $this->amountPerBar;
    }

    /**
     * @param float $amountPerBar
     */
    public function setAmountPerBar($amountPerBar)
    {
        $this->amountPerBar = $amountPerBar;
    }

    /**
     * @return float
     */
    public function getCumulativeAmount()
    {
        return $this->cumulativeAmount;
    }

    /**
     * @param float $cumulativeAmount
     */
    public function setCumulativeAmount($cumulativeAmount)
    {
        $this->cumulativeAmount = $cumulativeAmount;
    }




}