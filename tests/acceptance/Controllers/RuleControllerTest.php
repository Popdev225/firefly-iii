<?php
/**
 * RuleControllerTest.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */


/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-19 at 15:39:28.
 */
class RuleControllerTest extends TestCase
{

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::__construct
     * @covers FireflyIII\Http\Controllers\RuleController::create
     */
    public function testCreate()
    {
        $this->be($this->user());
        $this->call('GET', '/rules/create/1');
        $this->assertResponseStatus(200);

    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::delete
     */
    public function testDelete()
    {
        $this->be($this->user());
        $this->call('GET', '/rules/delete/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::destroy
     */
    public function testDestroy()
    {
        $this->session(['rules.rule.delete.url' => 'http://localhost']);

        $this->be($this->user());
        $this->call('POST', '/rules/destroy/1');
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::down
     */
    public function testDown()
    {
        $this->be($this->user());
        $this->call('GET', '/rules/down/1');
        $this->assertResponseStatus(302);
    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::edit
     * @covers FireflyIII\Http\Controllers\RuleController::getCurrentTriggers
     * @covers FireflyIII\Http\Controllers\RuleController::getCurrentActions
     */
    public function testEdit()
    {
        $this->be($this->user());
        $this->call('GET', '/rules/edit/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::index
     * @covers FireflyIII\Http\Controllers\RuleController::createDefaultRuleGroup
     * @covers FireflyIII\Http\Controllers\RuleController::createDefaultRule
     */
    public function testIndex()
    {
        $this->be($this->user());
        $this->call('GET', '/rules');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::reorderRuleActions
     */
    public function testReorderRuleActions()
    {
        $this->be($this->user());
        $args = ['actions' => [1, 2, 3]];
        $this->call('POST', '/rules/action/order/1', $args);
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::reorderRuleTriggers
     */
    public function testReorderRuleTriggers()
    {
        $this->be($this->user());
        $args = ['actions' => [1, 2]];
        $this->call('POST', '/rules/trigger/order/1', $args);
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::store
     * @covers FireflyIII\Http\Requests\RuleFormRequest::authorize
     * @covers FireflyIII\Http\Requests\RuleFormRequest::rules
     */
    public function testStore()
    {
        $this->session(['rules.rule.create.url' => 'http://localhost']);
        $this->be($this->user());
        $args = [
            'rule_group_id'      => 1,
            'title'              => 'Some new rule',
            'user_id'            => 1,
            'trigger'            => 'store-journal',
            'description'        => 'Some new rule',
            'rule-trigger'       => ['description_is'],
            'rule-trigger-value' => ['something'],
            'rule-trigger-stop'  => [],
            'rule-action'        => ['set_category'],
            'rule-action-value'  => ['something'],
            'rule-action-stop'   => [],
            'stop_processing'    => 0,
        ];
        $this->call('POST', '/rules/store/1', $args);

        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::up
     */
    public function testUp()
    {

        $this->be($this->user());
        $this->call('GET', '/rules/up/1');
        $this->assertResponseStatus(302);
    }

    /**
     * @covers FireflyIII\Http\Controllers\RuleController::update
     * @covers FireflyIII\Http\Requests\RuleFormRequest::authorize
     * @covers FireflyIII\Http\Requests\RuleFormRequest::rules
     */
    public function testUpdate()
    {
        $this->session(['rules.rule.edit.url' => 'http://localhost']);

        $this->be($this->user());
        $args = [
            'title'              => 'Some new rule update',
            'rule_group_id'      => 1,
            'id'                 => 1,
            'active'             => 1,
            'trigger'            => 'store-journal',
            'description'        => 'Some new rule',
            'rule-trigger'       => ['description_is'],
            'rule-trigger-value' => ['something'],
            'rule-trigger-stop'  => [],
            'rule-action'        => ['set_category'],
            'rule-action-value'  => ['something'],
            'rule-action-stop'   => [],
            'stop_processing'    => 0,
        ];
        $this->call('POST', '/rules/update/1', $args);
        $this->assertSessionHas('success');
        $this->assertResponseStatus(302);
    }
}
