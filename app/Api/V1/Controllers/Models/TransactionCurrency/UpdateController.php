<?php

/*
 * UpdateController.php
 * Copyright (c) 2021 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace FireflyIII\Api\V1\Controllers\Models\TransactionCurrency;

use FireflyIII\Api\V1\Controllers\Controller;
use FireflyIII\Api\V1\Requests\Models\TransactionCurrency\UpdateRequest;
use FireflyIII\Exceptions\FireflyException;
use FireflyIII\Models\TransactionCurrency;
use FireflyIII\Repositories\Currency\CurrencyRepositoryInterface;
use FireflyIII\Support\Http\Api\AccountFilter;
use FireflyIII\Support\Http\Api\TransactionFilter;
use FireflyIII\Transformers\CurrencyTransformer;
use FireflyIII\User;
use Illuminate\Http\JsonResponse;
use JsonException;
use League\Fractal\Resource\Item;

/**
 * Class UpdateController
 */
class UpdateController extends Controller
{
    use AccountFilter;
    use TransactionFilter;

    private CurrencyRepositoryInterface $repository;

    /**
     * CurrencyRepository constructor.
     *

     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware(
            function ($request, $next) {
                $this->repository = app(CurrencyRepositoryInterface::class);
                $this->repository->setUser(auth()->user());

                return $next($request);
            }
        );
    }

    /**
     * This endpoint is documented at:
     * https://api-docs.firefly-iii.org/?urls.primaryName=2.0.0%20(v1)#/currencies/disableCurrency
     *
     * Disable a currency.
     *
     * @param TransactionCurrency $currency
     *
     * @return JsonResponse
     * @throws FireflyException
     * @throws JsonException
     */
    public function disable(TransactionCurrency $currency): JsonResponse
    {
        // must be unused.
        if ($this->repository->currencyInUse($currency)) {
            return response()->json([], 409);
        }
        /** @var User $user */
        $user = auth()->user();
        $this->repository->disable($currency);
        $manager = $this->getManager();

        $currency->refreshForUser($user);

        /** @var CurrencyTransformer $transformer */
        $transformer = app(CurrencyTransformer::class);
        $transformer->setParameters($this->parameters);

        $resource = new Item($currency, $transformer, 'currencies');

        return response()->json($manager->createData($resource)->toArray())->header('Content-Type', self::CONTENT_TYPE);
    }

    /**
     * This endpoint is documented at:
     * https://api-docs.firefly-iii.org/?urls.primaryName=2.0.0%20(v1)#/currencies/defaultCurrency
     *
     * Make the currency a default currency.
     *
     * @param TransactionCurrency $currency
     *
     * @return JsonResponse
     * @throws FireflyException
     */
    public function makeDefault(TransactionCurrency $currency): JsonResponse
    {
        /** @var User $user */
        $user = auth()->user();
        $this->repository->enable($currency);
        $this->repository->makeDefault($currency);

        app('preferences')->mark();

        $manager = $this->getManager();
        $currency->refreshForUser($user);

        /** @var CurrencyTransformer $transformer */
        $transformer = app(CurrencyTransformer::class);
        $transformer->setParameters($this->parameters);

        $resource = new Item($currency, $transformer, 'currencies');

        return response()->json($manager->createData($resource)->toArray())->header('Content-Type', self::CONTENT_TYPE);
    }

    /**
     * This endpoint is documented at:
     * https://api-docs.firefly-iii.org/?urls.primaryName=2.0.0%20(v1)#/currencies/enableCurrency
     *
     * Enable a currency.
     *
     * @param TransactionCurrency $currency
     *
     * @return JsonResponse
     * @throws FireflyException
     * @throws JsonException
     */
    public function enable(TransactionCurrency $currency): JsonResponse
    {
        $this->repository->enable($currency);
        $manager = $this->getManager();
        /** @var User $user */
        $user = auth()->user();

        $currency->refreshForUser($user);

        /** @var CurrencyTransformer $transformer */
        $transformer = app(CurrencyTransformer::class);
        $transformer->setParameters($this->parameters);

        $resource = new Item($currency, $transformer, 'currencies');

        return response()->json($manager->createData($resource)->toArray())->header('Content-Type', self::CONTENT_TYPE);
    }

    /**
     * This endpoint is documented at:
     * https://api-docs.firefly-iii.org/?urls.primaryName=2.0.0%20(v1)#/currencies/updateCurrency
     *
     * Update a currency.
     *
     * @param UpdateRequest       $request
     * @param TransactionCurrency $currency
     *
     * @return JsonResponse
     * @throws FireflyException
     * @throws JsonException
     */
    public function update(UpdateRequest $request, TransactionCurrency $currency): JsonResponse
    {
        $data = $request->getAll();

        /** @var User $user */
        $user     = auth()->user();
        $currency = $this->repository->update($currency, $data);

        app('preferences')->mark();

        $manager = $this->getManager();
        $currency->refreshForUser($user);

        /** @var CurrencyTransformer $transformer */
        $transformer = app(CurrencyTransformer::class);
        $transformer->setParameters($this->parameters);

        $resource = new Item($currency, $transformer, 'currencies');

        return response()->json($manager->createData($resource)->toArray())->header('Content-Type', self::CONTENT_TYPE);
    }
}
