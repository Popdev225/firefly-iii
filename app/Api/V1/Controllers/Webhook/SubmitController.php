<?php
/*
 * SubmitController.php
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

namespace FireflyIII\Api\V1\Controllers\Webhook;

use FireflyIII\Api\V1\Controllers\Controller;
use FireflyIII\Jobs\SendWebhookMessage;
use FireflyIII\Models\Webhook;
use FireflyIII\Repositories\Webhook\WebhookRepositoryInterface;
use Illuminate\Http\JsonResponse;

/**
 * Class SubmitController
 */
class SubmitController extends Controller
{
    private WebhookRepositoryInterface $repository;

    /**

     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware(
            function ($request, $next) {
                $this->repository = app(WebhookRepositoryInterface::class);
                $this->repository->setUser(auth()->user());

                return $next($request);
            }
        );
    }

    /**
     * This endpoint is documented at:
     * https://api-docs.firefly-iii.org/?urls.primaryName=2.0.0%20(v1)#/webhooks/submitWebook
     *
     * @param  Webhook  $webhook
     *
     * @return JsonResponse

     */
    public function submit(Webhook $webhook): JsonResponse
    {
        // count messages that can be sent.
        $messages = $this->repository->getReadyMessages($webhook);
        if (0 === $messages->count()) {
            // nothing to send, return empty
            return response()->json([], 204);
        }
        // send!
        foreach ($messages as $message) {
            SendWebhookMessage::dispatch($message)->afterResponse();
        }

        return response()->json([]);
    }
}
