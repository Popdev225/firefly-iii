/*
 * list.js
 * Copyright (c) 2022 james@firefly-iii.org
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

import {api} from "boot/axios";

export default class Get {
  get(identifier) {
    let url = '/api/v1/categories/' + identifier;
      return api.get(url);
  }
  transactions(identifier, page, cacheKey) {
    let url = '/api/v1/categories/' + identifier + '/transactions';
    return api.get(url, {params: {page: page, cache: cacheKey}});
  }
  transactionsWithoutCategory(page, cacheKey) {
    let url = '/api/v1/categories/transactions-without-category';
    return api.get(url, {params: {page: page, cache: cacheKey}});
  }
}