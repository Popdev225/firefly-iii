<?php
/**
 * BudgetLimitCurrency.php
 * Copyright (c) 2020 james@firefly-iii.org
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

namespace FireflyIII\Console\Commands\Upgrade;

use FireflyIII\Console\Commands\ShowsFriendlyMessages;
use FireflyIII\Exceptions\FireflyException;
use FireflyIII\Models\BudgetLimit;
use Illuminate\Console\Command;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class BudgetLimitCurrency
 */
class BudgetLimitCurrency extends Command
{
    use ShowsFriendlyMessages;

    public const CONFIG_NAME = '480_bl_currency';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give budget limits a currency';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'firefly-iii:bl-currency {--F|force : Force the execution of this command.}';

    /**
     * Execute the console command.
     *
     * @return int
     * @throws ContainerExceptionInterface
     * @throws FireflyException
     * @throws NotFoundExceptionInterface
     */
    public function handle(): int
    {
        if ($this->isExecuted() && true !== $this->option('force')) {
            $this->friendlyInfo('This command has already been executed.');

            return 0;
        }


        $count        = 0;
        $budgetLimits = BudgetLimit::get();
        /** @var BudgetLimit $budgetLimit */
        foreach ($budgetLimits as $budgetLimit) {
            if (null === $budgetLimit->transaction_currency_id) {
                $budget = $budgetLimit->budget;
                if (null !== $budget) {
                    $user = $budget->user;
                    if (null !== $user) {
                        $currency                             = app('amount')->getDefaultCurrencyByUser($user);
                        $budgetLimit->transaction_currency_id = $currency->id;
                        $budgetLimit->save();
                        $this->friendlyInfo(
                            sprintf('Budget limit #%d (part of budget "%s") now has a currency setting (%s).', $budgetLimit->id, $budget->name, $currency->name)
                        );
                        $count++;
                    }
                }
            }
        }
        if (0 === $count) {
            $this->friendlyPositive('All budget limits are OK.');
        }
        $this->markAsExecuted();

        return 0;
    }

    /**
     * @return bool
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    private function isExecuted(): bool
    {
        $configVar = app('fireflyconfig')->get(self::CONFIG_NAME, false);
        if (null !== $configVar) {
            return (bool)$configVar->data;
        }

        return false;
    }

    /**
     *
     */
    private function markAsExecuted(): void
    {
        app('fireflyconfig')->set(self::CONFIG_NAME, true);
    }
}
