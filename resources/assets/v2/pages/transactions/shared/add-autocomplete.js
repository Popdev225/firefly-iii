/*
 * add-autocomplete.js
 * Copyright (c) 2024 james@firefly-iii.org
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

import Autocomplete from "bootstrap5-autocomplete";


export function addAutocomplete(options) {
    const params = {
        server: options.serverUrl,
        serverParams: {},
        fetchOptions: {
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
            }
        },
        hiddenInput: true,
        preventBrowserAutocomplete: true,
        highlightTyped: true,
        liveServer: true,
        // onChange: this.changeSourceAccount,
        // onSelectItem: this.selectSourceAccount
        //     onSelectItem: this.changeCategory,
        //     onChange: this.changeCategory,
    };
    if (typeof options.filters !== 'undefined' && options.filters.length > 0) {
        params.serverParams.types = options.filters;
    }
    if (typeof options.onRenderItem !== 'undefined' && null !== options.onRenderItem) {
        console.log('add on render item');
        params.onRenderItem = options.onRenderItem;
    }
    if (options.valueField) {
        params.valueField = options.valueField;
    }
    if (options.labelField) {
        params.labelField = options.labelField;
    }
    if (options.onSelectItem) {
        params.onSelectItem = options.onSelectItem;
    }
    if (options.onChange) {
        params.onChange = options.onChange;
    }

    Autocomplete.init(options.selector, params);
}
