<?php
/**
 * PiggyBankControllerTest.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */


/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-19 at 15:39:28.
 */
class PiggyBankControllerTest extends TestCase
{
    /**
     * @covers       FireflyIII\Http\Controllers\PiggyBankController::add
     * @covers       FireflyIII\Http\Controllers\PiggyBankController::__construct
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testAdd($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/piggy-banks/add/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::create
     */
    public function testCreate()
    {
        $this->be($this->user());
        $this->call('GET', '/piggy-banks/create');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::delete
     */
    public function testDelete()
    {
        $this->be($this->user());
        $this->call('GET', '/piggy-banks/delete/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::destroy
     */
    public function testDestroy()
    {
        $this->be($this->user());
        $this->session(['piggy-banks.delete.url' => 'http://localhost']);
        $this->call('POST', '/piggy-banks/destroy/2');
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::edit
     */
    public function testEdit()
    {
        $this->be($this->user());
        $this->call('GET', '/piggy-banks/edit/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\PiggyBankController::index
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testIndex($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/piggy-banks');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::order
     */
    public function testOrder()
    {
        $args = [
            1 => 1,
            2 => 2,
        ];

        $this->be($this->user());
        $this->call('POST', '/piggy-banks/sort', $args);
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::postAdd
     */
    public function testPostAdd()
    {
        $args = [
            'amount' => 100,
        ];

        $this->be($this->user());
        $this->call('POST', '/piggy-banks/add/1', $args);
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::postRemove
     */
    public function testPostRemove()
    {
        $args = [
            'amount' => 100,
        ];

        $this->be($this->user());
        $this->call('POST', '/piggy-banks/remove/1', $args);
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::remove
     */
    public function testRemove()
    {
        $this->be($this->user());
        $this->call('GET', '/piggy-banks/remove/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\PiggyBankController::show
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testShow($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/piggy-banks/show/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::store
     * @covers FireflyIII\Http\Requests\PiggyBankFormRequest::authorize
     * @covers FireflyIII\Http\Requests\PiggyBankFormRequest::rules
     */
    public function testStore()
    {
        $this->be($this->user());
        $this->session(['piggy-banks.create.url' => 'http://localhost/']);

        $args = [
            'name'         => 'New',
            'targetamount' => 100,
            'account_id'   => 2,
        ];

        $this->call('POST', '/piggy-banks/store', $args);
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }

    /**
     * @covers FireflyIII\Http\Controllers\PiggyBankController::update
     * @covers FireflyIII\Http\Requests\PiggyBankFormRequest::authorize
     * @covers FireflyIII\Http\Requests\PiggyBankFormRequest::rules
     */
    public function testUpdate()
    {
        $this->be($this->user());
        $this->session(['piggy-banks.edit.url' => 'http://localhost/']);

        $args = [
            'name'         => 'Updated',
            'targetamount' => 100,
            'account_id'   => 2,
            'id'           => 1,
        ];

        $this->call('POST', '/piggy-banks/update/1', $args);
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }
}
