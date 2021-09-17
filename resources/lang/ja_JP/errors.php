<?php

/**
 * firefly.php
 * Copyright (c) 2019 james@firefly-iii.org
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

return [
    '404_header'              => 'Firefly IIIはお探しのページを見つけることができませんでした。',
    '404_page_does_not_exist' => 'あなたがリクエストしたページは存在しません。間違ったURLを入力していないか確認してください。ミスタイプをしているかもしれません。',
    '404_send_error'          => 'このページにリダイレクトしてしまった件については、大変申し訳ありません。このエラーについてはログファイルに記載がありますので、それをお送りいただければ幸いです。',
    '404_github_link'         => 'このページがあるはずだと強い確信を持っているのであれば、<strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>でIssueを立てて(チケットを開いて)ください。',
    'whoops'                  => 'エラー',
    'fatal_error'             => '致命的なエラーが発生しました。"storage/logs"にあるログファイルを確認するか、"docker logs -f [container]"を使用して問題点を確認してください。',
    'maintenance_mode'        => 'Firefly III はメンテナンスモードです。',
    'be_right_back'           => 'メンテナンスはすぐに終わります。',
    'check_back'              => '必要なメンテナンスを行っているため、Firefly IIIは一時停止しています。しばらくしてからもう一度確認してください。',
    'error_occurred'          => '申し訳ありません。エラーが発生しました。',
    'error_not_recoverable'   => '残念ながら、このエラーは回復不可能です。Firefly IIIは故障しました。エラーログは以下の通りです:',
    'error'                   => 'エラー',
    'error_location'          => 'このエラーは、ファイル「<span style="font-family: monospace;">:file</span>」 :line 行目のコード :code で発生しました。',
    'stacktrace'              => 'スタックトレース',
    'more_info'               => '詳細情報',
    'collect_info'            => 'ログファイルがある <code>storage/logs</code> ディレクトリにて、より詳細な情報を集めてください。Docker を使っている場合は <code>docker logs -f [container]</code> を使用してください。',
    'collect_info_more'       => 'エラー情報の収集については、 <a href="https://docs.firefly-iii.org/faq/other#how-do-i-enable-debug-mode">FAQ</a> をご覧ください。',
    'github_help'             => 'GitHubでヘルプを見る',
    'github_instructions'     => '<strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong> にて新しい issue を作ることは大歓迎です。',
    'use_search'              => '検索してください！',
    'include_info'            => '<a href=":link">このデバッグページ</a>からの情報を含めます。',
    'tell_more'               => '「おっと！」以上のことを教えてください。',
    'include_logs'            => 'エラーログを含めます (上記参照)。',
    'what_did_you_do'         => '何をしていたか教えてください。',
    'offline_header'          => 'You are probably offline',
    'offline_unreachable'     => 'Firefly III is unreachable. Your device is currently offline or the server is not working.',
    'offline_github'          => 'If you are sure both your device and the server are online, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',

];
