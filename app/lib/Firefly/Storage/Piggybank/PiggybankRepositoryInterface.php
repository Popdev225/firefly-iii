<?php

namespace Firefly\Storage\Piggybank;


/**
 * Interface LimitRepositoryInterface
 *
 * @package Firefly\Storage\Limit
 */
interface PiggybankRepositoryInterface
{

    /**
     * @return mixed
     */
    public function count();

    /**
     * @return mixed
     */
    public function countNonrepeating();

    /**
     * @return mixed
     */
    public function countRepeating();

    /**
     * @param \Piggybank $piggyBank
     *
     * @return mixed
     */
    public function destroy(\Piggybank $piggyBank);

    /**
     * @param $piggyBankId
     *
     * @return mixed
     */
    public function find($piggyBankId);

    /**
     * @return mixed
     */
    public function get();

    /**
     * @param $data
     *
     * @return mixed
     */
    public function store($data);

    /**
     * @param \Piggybank $piggy
     * @param            $data
     *
     * @return mixed
     */
    public function update(\Piggybank $piggy, $data);

    /**
     * @param \Piggybank $piggyBank
     * @param            $amount
     *
     * @return mixed
     */
    public function updateAmount(\Piggybank $piggyBank, $amount);

} 