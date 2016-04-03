<?php
/**
 * CategoryControllerTest.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */


/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-19 at 15:39:27.
 */
class CategoryControllerTest extends TestCase
{

    /**
     * @covers FireflyIII\Http\Controllers\CategoryController::create
     * @covers FireflyIII\Http\Controllers\CategoryController::__construct
     */
    public function testCreate()
    {
        $this->be($this->user());
        $this->call('GET', '/categories/create');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\CategoryController::delete
     */
    public function testDelete()
    {
        $this->be($this->user());
        $this->call('GET', '/categories/delete/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\CategoryController::destroy
     */
    public function testDestroy()
    {
        $this->be($this->user());

        $this->session(['categories.delete.url' => 'http://localhost']);

        $this->call('POST', '/categories/destroy/2');
        $this->assertSessionHas('success');
        $this->assertResponseStatus(302);
    }

    /**
     * @covers FireflyIII\Http\Controllers\CategoryController::edit
     */
    public function testEdit()
    {
        $this->be($this->user());
        $this->call('GET', '/categories/edit/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\CategoryController::index
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testIndex($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/categories');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\CategoryController::noCategory
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testNoCategory($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/categories/list/noCategory');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers       FireflyIII\Http\Controllers\CategoryController::show
     * @covers       FireflyIII\Http\Controllers\Controller::getSumOfRange
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testShow($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/categories/show/1');
        $this->assertResponseStatus(200);

    }

    /**
     * @covers       FireflyIII\Http\Controllers\CategoryController::showWithDate
     * @dataProvider dateRangeProvider
     *
     * @param $range
     */
    public function testShowWithDate($range)
    {
        $this->be($this->user());
        $this->changeDateRange($this->user(), $range);
        $this->call('GET', '/categories/show/1/20150101');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\CategoryController::store
     * @covers FireflyIII\Http\Requests\CategoryFormRequest::authorize
     * @covers FireflyIII\Http\Requests\CategoryFormRequest::rules
     */
    public function testStore()
    {
        $this->be($this->user());
        $this->session(['categories.create.url' => 'http://localhost']);
        $args = [
            'name' => 'Some kind of test cat.',
        ];

        $this->call('POST', '/categories/store', $args);
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }

    /**
     * @covers FireflyIII\Http\Controllers\CategoryController::update
     * @covers FireflyIII\Http\Requests\CategoryFormRequest::authorize
     * @covers FireflyIII\Http\Requests\CategoryFormRequest::rules
     */
    public function testUpdate()
    {
        $this->be($this->user());
        $this->session(['categories.edit.url' => 'http://localhost']);
        $args = [
            'name' => 'Some kind of test category.',
            'id'   => 1,
        ];

        $this->call('POST', '/categories/update/1', $args);
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }
}
