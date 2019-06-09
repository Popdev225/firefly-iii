<?php
/**
 * CategoryControllerTest.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Tests\Api\V1\Controllers;


use FireflyIII\Helpers\Collector\TransactionCollectorInterface;
use FireflyIII\Models\Category;
use FireflyIII\Repositories\Account\AccountRepositoryInterface;
use FireflyIII\Repositories\Bill\BillRepositoryInterface;
use FireflyIII\Repositories\Category\CategoryRepositoryInterface;
use FireflyIII\Repositories\Currency\CurrencyRepositoryInterface;
use FireflyIII\Repositories\Journal\JournalRepositoryInterface;
use FireflyIII\Transformers\CategoryTransformer;
use FireflyIII\Transformers\TransactionTransformer;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Laravel\Passport\Passport;
use Log;
use Tests\TestCase;

/**
 *
 * Class CategoryControllerTest
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class CategoryControllerTest extends TestCase
{
    /**
     *
     */
    public function setUp(): void
    {
        parent::setUp();
        Passport::actingAs($this->user());
        Log::info(sprintf('Now in %s.', get_class($this)));
    }

    /**
     * Store a new category.
     *
     * @covers \FireflyIII\Api\V1\Controllers\CategoryController
     */
    public function testStore(): void
    {
        /** @var Category $category */
        $category = $this->user()->categories()->first();

        // mock stuff:
        $repository  = $this->mock(CategoryRepositoryInterface::class);
        $transformer = $this->mock(CategoryTransformer::class);

        // mock transformer
        $transformer->shouldReceive('setParameters')->withAnyArgs()->atLeast()->once();
        $transformer->shouldReceive('setCurrentScope')->withAnyArgs()->atLeast()->once()->andReturnSelf();
        $transformer->shouldReceive('getDefaultIncludes')->withAnyArgs()->atLeast()->once()->andReturn([]);
        $transformer->shouldReceive('getAvailableIncludes')->withAnyArgs()->atLeast()->once()->andReturn([]);
        $transformer->shouldReceive('transform')->atLeast()->once()->andReturn(['id' => 5]);

        // mock calls:
        $repository->shouldReceive('setUser')->once();
        $repository->shouldReceive('store')->once()->andReturn($category);

        // data to submit
        $data = [
            'name'   => 'Some category',
            'active' => '1',
        ];

        // test API
        $response = $this->post(route('api.v1.categories.store'), $data);
        $response->assertStatus(200);
        $response->assertJson(['data' => ['type' => 'categories', 'links' => true],]);
        $response->assertHeader('Content-Type', 'application/vnd.api+json');
    }

    /**
     * Update a category.
     *
     * @covers \FireflyIII\Api\V1\Controllers\CategoryController
     */
    public function testUpdate(): void
    {
        // mock repositories
        $repository  = $this->mock(CategoryRepositoryInterface::class);
        $transformer = $this->mock(CategoryTransformer::class);
        /** @var Category $category */
        $category = $this->user()->categories()->first();

        // mock transformer
        $transformer->shouldReceive('setParameters')->withAnyArgs()->atLeast()->once();
        $transformer->shouldReceive('setCurrentScope')->withAnyArgs()->atLeast()->once()->andReturnSelf();
        $transformer->shouldReceive('getDefaultIncludes')->withAnyArgs()->atLeast()->once()->andReturn([]);
        $transformer->shouldReceive('getAvailableIncludes')->withAnyArgs()->atLeast()->once()->andReturn([]);
        $transformer->shouldReceive('transform')->atLeast()->once()->andReturn(['id' => 5]);

        // mock calls:
        $repository->shouldReceive('setUser');
        $repository->shouldReceive('update')->once()->andReturn($category);

        // data to submit
        $data = [
            'name'   => 'Some new category',
            'active' => '1',
        ];

        // test API
        $response = $this->put(route('api.v1.categories.update', $category->id), $data, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $response->assertJson(['data' => ['type' => 'categories', 'links' => true],]);
        $response->assertHeader('Content-Type', 'application/vnd.api+json');
    }

}
