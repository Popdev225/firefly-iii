@extends('layout.v2')
@section('content')
    <div class="app-content">
        <div class="container-fluid" x-data="index">
            <x-messages></x-messages>
            <div class="row mb-3">
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Net worth</h3>
                        </div>
                        <div class="card-body">
                            some chart
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">In + out this period</h3>
                        </div>
                        <div class="card-body">
                            Same
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Something else</h3>
                        </div>
                        <div class="card-body">
                            Same
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    Nav
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">Accounts (ungrouped)</h3>
                                </div>
                                <div class="col text-end">
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td x-show="tableColumns.drag_and_drop.visible && tableColumns.drag_and_drop.enabled">
                                        &nbsp;
                                    </td>
                                    <td x-show="tableColumns.active.visible && tableColumns.active.enabled">&nbsp;</td>
                                    <td x-show="tableColumns.name.visible && tableColumns.name.enabled">
                                        <em>"Filtered"</em>
                                    </td>
                                    <td x-show="tableColumns.type.visible && tableColumns.type.enabled">&nbsp;</td>
                                    <td x-show="tableColumns.liability_type.visible && tableColumns.liability_type.enabled">
                                        &nbsp;
                                    </td>
                                    <td x-show="tableColumns.liability_direction.visible && tableColumns.liability_direction.enabled">
                                        &nbsp;
                                    </td>
                                    <td x-show="tableColumns.liability_interest.visible && tableColumns.liability_interest.enabled">
                                        &nbsp;
                                    </td>
                                    <td x-show="tableColumns.number.visible && tableColumns.number.enabled">
                                        &nbsp;
                                    </td>
                                    <td x-show="tableColumns.current_balance.visible && tableColumns.current_balance.enabled">
                                        &nbsp;
                                    </td>
                                    <td x-show="tableColumns.amount_due.visible && tableColumns.amount_due.enabled">
                                        &nbsp;
                                    </td>
                                    <td x-show="tableColumns.last_activity.visible && tableColumns.last_activity.enabled">
                                        &nbsp;
                                    </td>
                                    <td x-show="tableColumns.balance_difference.visible && tableColumns.balance_difference.enabled">
                                        &nbsp;
                                    </td>
                                    <td x-show="tableColumns.menu.visible && tableColumns.menu.enabled">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th x-show="tableColumns.drag_and_drop.visible && tableColumns.drag_and_drop.enabled">
                                        &nbsp;
                                    </th>
                                    <th x-show="tableColumns.active.visible && tableColumns.active.enabled">
                                        <a href="#" x-on:click.prevent="sort('active')">Active?</a>
                                        <em x-show="pageOptions.sortingColumn === 'active' && pageOptions.sortDirection === 'asc'"
                                            class="fa-solid fa-arrow-down-wide-short"></em>
                                        <em x-show="pageOptions.sortingColumn === 'active' && pageOptions.sortDirection === 'desc'"
                                            class="fa-solid fa-arrow-up-wide-short"></em>
                                    </th>
                                    <th x-show="tableColumns.name.visible && tableColumns.name.enabled">
                                        <a href="#" x-on:click.prevent="sort('name')">Name</a>
                                        <em x-show="pageOptions.sortingColumn === 'name' && pageOptions.sortDirection === 'asc'"
                                            class="fa-solid fa-arrow-down-a-z"></em>
                                        <em x-show="pageOptions.sortingColumn === 'name' && pageOptions.sortDirection === 'desc'"
                                            class="fa-solid fa-arrow-down-z-a"></em>
                                    </th>
                                    <th x-show="tableColumns.type.visible && tableColumns.type.enabled">Type</th>
                                    <th x-show="tableColumns.liability_type.visible && tableColumns.liability_type.enabled">
                                        Liability type
                                    </th>
                                    <th x-show="tableColumns.liability_direction.visible && tableColumns.liability_direction.enabled">
                                        Liability direction
                                    </th>
                                    <th x-show="tableColumns.liability_interest.visible && tableColumns.liability_interest.enabled">
                                        Liability interest
                                    </th>
                                    <th x-show="tableColumns.number.visible && tableColumns.number.enabled">
                                        <a href="#" x-on:click.prevent="sort('iban')">Account number</a>
                                        <em x-show="pageOptions.sortingColumn === 'iban' && pageOptions.sortDirection === 'asc'"
                                            class="fa-solid fa-arrow-down-z-a"></em>
                                        <em x-show="pageOptions.sortingColumn === 'iban' && pageOptions.sortDirection === 'desc'"
                                            class="fa-solid fa-arrow-up-z-a"></em>
                                    </th>
                                    <th x-show="tableColumns.current_balance.visible && tableColumns.current_balance.enabled">
                                        <a href="#" x-on:click.prevent="sort('balance')">Current balance</a>
                                        <em x-show="pageOptions.sortingColumn === 'balance' && pageOptions.sortDirection === 'asc'"
                                            class="fa-solid fa-arrow-down-wide-short"></em>
                                        <em x-show="pageOptions.sortingColumn === 'balance' && pageOptions.sortDirection === 'desc'"
                                            class="fa-solid fa-arrow-up-wide-short"></em>
                                    </th>
                                    <th x-show="tableColumns.amount_due.visible && tableColumns.amount_due.enabled">
                                        <a href="#" x-on:click.prevent="sort('amount_due')">Amount due</a>
                                        <em x-show="pageOptions.sortingColumn === 'amount_due' && pageOptions.sortDirection === 'asc'"
                                            class="fa-solid fa-arrow-down-wide-short"></em>
                                        <em x-show="pageOptions.sortingColumn === 'amount_due' && pageOptions.sortDirection === 'desc'"
                                            class="fa-solid fa-arrow-up-wide-short"></em>
                                    </th>
                                    <th x-show="tableColumns.last_activity.visible && tableColumns.last_activity.enabled">
                                        <a href="#" x-on:click.prevent="sort('last_activity')">Last activity</a>
                                        <em x-show="pageOptions.sortingColumn === 'last_activity' && pageOptions.sortDirection === 'asc'"
                                            class="fa-solid fa-arrow-down-wide-short"></em>
                                        <em x-show="pageOptions.sortingColumn === 'last_activity' && pageOptions.sortDirection === 'desc'"
                                            class="fa-solid fa-arrow-up-wide-short"></em>
                                    </th>
                                    <th x-show="tableColumns.balance_difference.visible && tableColumns.balance_difference.enabled">
                                        <a href="#" x-on:click.prevent="sort('balance_difference')">Balance
                                            difference</a>
                                        <em x-show="pageOptions.sortingColumn === 'balance_difference' && pageOptions.sortDirection === 'asc'"
                                            class="fa-solid fa-arrow-down-wide-short"></em>
                                        <em x-show="pageOptions.sortingColumn === 'balance_difference' && pageOptions.sortDirection === 'desc'"
                                            class="fa-solid fa-arrow-up-wide-short"></em>
                                    </th>
                                    <th x-show="tableColumns.menu.visible && tableColumns.menu.enabled">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <template x-for="(account, index) in accounts" :key="index">
                                    <tr>
                                        <td x-show="tableColumns.drag_and_drop.visible && tableColumns.drag_and_drop.enabled">
                                            <em class="fa-solid fa-bars"></em>
                                        </td>
                                        <td x-show="tableColumns.active.visible && tableColumns.active.enabled">
                                            <template x-if="account.active">
                                                <em class="text-success fa-solid fa-check"></em>
                                                &nbsp;
                                            </template>
                                            <template x-if="!account.active">
                                                <em class="text-danger fa-solid fa-xmark"></em>
                                                &nbsp;
                                            </template>
                                        </td>
                                        <td x-show="tableColumns.name.visible && tableColumns.name.enabled">
                                            <!-- render content using a function -->
                                            <span x-html="renderObjectValue('name', account)"
                                                  x-show="!account.nameEditorVisible"></span>

                                            <!-- edit buttons -->
                                            <em x-show="!account.nameEditorVisible" :data-id="account.id"
                                                :data-index="index" @click="triggerEdit" data-type="text"
                                                class="hidden-edit-button inline-edit-button fa-solid fa-pencil"
                                                :data-id="account.id"></em>

                                            <!-- edit things -->
                                            <div class="row" x-show="account.nameEditorVisible">
                                                <div class="col-8">
                                                    <input :data-index="index" data-field="name" autocomplete="off"
                                                           type="text" class="form-control form-control-sm" id="input"
                                                           name="name" :value="account.name"
                                                           :placeholder="account.value" autofocus>
                                                </div>
                                                <div class="col-4">
                                                    <div class="btn-group btn-group-sm" role="group"
                                                         aria-label="Options">
                                                        <button :data-index="index" :data-id="account.id"
                                                                data-field="name" type="button"
                                                                @click="cancelInlineEdit" class="btn btn-danger"><em
                                                                class="fa-solid fa-xmark text-white"></em></button>
                                                        <button :data-index="index" :data-id="account.id"
                                                                data-field="name" type="submit"
                                                                @click="submitInlineEdit" class="btn btn-success"><em
                                                                class="fa-solid fa-check"></em></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td x-show="tableColumns.type.visible && tableColumns.type.enabled">
                                            <template x-if="null === account.role || '' === account.role">
                                                <span><em>{{ __('firefly.no_account_role') }}</em></span>
                                            </template>
                                            <template x-if="null !== account.role && '' !== account.role">
                                                <span x-text="accountRole(account.role)"></span>"
                                            </template>
                                        </td>
                                        <td x-show="tableColumns.liability_type.visible && tableColumns.liability_type.enabled"></td>
                                        <td x-show="tableColumns.liability_direction.visible && tableColumns.liability_direction.enabled"></td>
                                        <td x-show="tableColumns.liability_interest.visible && tableColumns.liability_interest.enabled"></td>
                                        <td x-show="tableColumns.number.visible && tableColumns.number.enabled">
                                            <!-- IBAN and no account nr -->
                                            <template x-if="'' === account.account_number && '' !== account.iban">
                                                <span x-text="account.iban"></span>
                                            </template>
                                            <!-- no IBAN and account nr -->
                                            <template x-if="'' !== account.account_number && '' === account.iban">
                                                <span x-text="account.account_number"></span>
                                            </template>
                                            <!-- both -->
                                            <template x-if="'' !== account.account_number && '' !== account.iban">
                                            <span>
                                                <span x-text="account.iban"></span>
                                                (<span x-text="account.account_number"></span>)
                                            </span>
                                            </template>
                                        </td>
                                        <td x-show="tableColumns.current_balance.visible && tableColumns.current_balance.enabled">
                                            <span
                                                x-text="formatMoney(account.current_balance, account.currency_code)"></span>
                                        </td>
                                        <td x-show="tableColumns.amount_due.visible && tableColumns.amount_due.enabled">
                                            TODO
                                        </td>
                                        <td x-show="tableColumns.last_activity.visible && tableColumns.last_activity.enabled">
                                            <span x-text="account.last_activity"></span>
                                        </td>
                                        <td x-show="tableColumns.balance_difference.visible && tableColumns.balance_difference.enabled">
                                            <template x-if="null !== account.balance_difference">
                                                <span
                                                    x-text="formatMoney(account.balance_difference, account.currency_code)"></span>
                                            </template>
                                        </td>
                                        <td x-show="tableColumns.menu.visible && tableColumns.menu.enabled">
                                            <div class="btn-group btn-group-sm">
                                                <a :href="'./accounts/edit/' + account.id" class="btn btn-sm btn-light"><em
                                                        class="fa-solid fa-pencil"></em></a>
                                                <button type="button"
                                                        class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span
                                                        class="visually-hidden">{{ __('firefly.toggle_dropdown') }}</span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                           :href="'./accounts/show/' + account.id"><em
                                                                class="fa-solid fa-eye"></em> {{ __('firefly.show') }}
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                           :href="'./accounts/reconcile/' + account.id"><em
                                                                class="fa-solid fa-calculator"></em> {{ __('firefly.reconcile_selected')  }}
                                                        </a></li>
                                                    <li><a class="dropdown-item"
                                                           :href="'./accounts/delete/' + account.id"><em
                                                                class="fa-solid fa-trash"></em> {{ __('firefly.delete') }}
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    Nav
                </div>
            </div>

            <!-- Internal settings modal -->
            <div class="modal fade" id="internalsModal" tabindex="-1" aria-labelledby="internalsModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="internalsModalLabel">TODO Page settings</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Visible columns</label>
                                <div class="col-sm-8">
                                    <template x-for="(column, key) in tableColumns" :key="key">
                                        <div class="form-check form-switch form-check-inline" x-show="column.visible">
                                            <label>
                                                <input class="form-check-input" type="checkbox" x-model="column.enabled"
                                                       @change="saveColumnSettings"> <span
                                                    x-text="$t('list.'+key)"></span>
                                            </label>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Active accounts?</label>
                                <div class="col-sm-8">
                                    <select x-model="filters.active" class="form-control">
                                        <option value="active" label="Active accounts">Active accounts only</option>
                                        <option value="inactive" label="Inactive accounts">Inactive accounts only
                                        </option>
                                        <option value="both" label="Both">All accounts</option>
                                    </select>
                                    <div id="emailHelp" class="form-text">TODO Bla bla bla.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Group accounts</label>
                                <div class="col-sm-8">
                                    <div class="form-check form-switch">
                                        <label>
                                            <input class="form-check-input" type="checkbox"
                                                   x-model="pageOptions.groupedAccounts"><span>Group accounts</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Show info boxes</label>
                                <div class="col-sm-8">
                                    <div class="form-check form-switch form-check-inline">
                                        <label>
                                            <input class="form-check-input" type="checkbox"> <span>Box A</span>
                                        </label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline">
                                        <label>
                                            <input class="form-check-input" type="checkbox"> <span>Box B</span>
                                        </label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline">
                                        <label>
                                            <input class="form-check-input" type="checkbox"> <span>Box C</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="wizardModal" tabindex="-1" aria-labelledby="wizardModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="wizardModalLabel">TODO Would you like to know more?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Need to learn what's on this page?<br>
                    Take me to the help pages (opens in a new window or tab)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><em
                            class="fa-solid fa-hat-wizard"></em> Show me around
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><em
                            class="fa-solid fa-right-from-bracket"></em> Take me to the documentation
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    @vite(['src/pages/accounts/index.js'])
@endsection
