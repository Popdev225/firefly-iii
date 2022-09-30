<?php

/**
 * email.php
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
    // common items
    'greeting'                                => 'Olá,',
    'closing'                                 => 'Bip Bop,',
    'signature'                               => 'Firefly III Robô de Email',
    'footer_ps'                               => 'PS: Esta mensagem foi enviada porque uma solicitação do IP :ipAddress a ativou.',

    // admin test
    'admin_test_subject'                      => 'Uma mensagem de teste de sua instalação do Firefly III',
    'admin_test_body'                         => 'Essa é uma mensagem de teste de sua instância do Firefly III. Foi enviada para :email.',

    // new IP
    'login_from_new_ip'                       => 'Novo login no Firefly III',
    'slack_login_from_new_ip'                 => 'Novo login no Firefly III do IP :ip (:host)',
    'new_ip_body'                             => 'O Firefly III detectou um novo login em sua conta de um endereço IP desconhecido. Caso você nunca tenha logado do endereço IP abaixo, ou o fez há mais de seis meses, o Firefly III irá avisá-lo.',
    'new_ip_warning'                          => 'Caso você reconheça este endereço IP ou o login, você pode ignorar esta mensagem. Ou se você não fez login, se não tem ideia do que se trata, verifique a segurança da sua senha, altere-a e desconecte-se de todas as outras sessões. Para fazer isso, vá para sua página de perfil. Claro que você já habilitou 2FA, né? Mantenha-se seguro!',
    'ip_address'                              => 'Endereço IP',
    'host_name'                               => 'Servidor',
    'date_time'                               => 'Data + hora',

    // access token created
    'access_token_created_subject'            => 'Um novo token de acesso foi criado',
    'access_token_created_body'               => 'Alguém (esperamos que você) acabou de criar um novo token de acesso a API do Firefly III, para sua conta.',
    'access_token_created_explanation'        => 'Com este token, eles podem acessar **TODOS** os seus registros financeiros através da API do Firefly III.',
    'access_token_created_revoke'             => 'Se não foi você, por favor revogue este token assim que possível em :url',

    // registered
    'registered_subject'                      => 'Bem-vindo(a) ao Firefly III!',
    'registered_subject_admin'                => 'Um novo usuário se registrou',
    'admin_new_user_registered'               => 'Um novo usuário registrou. Usuário **:email** recebeu ID de usuário #:id.',
    'registered_welcome'                      => 'Boas-vindas ao [Firefly III](:address). Seu registro foi concluído e este e-mail está aqui para confirmar. Uhull!',
    'registered_pw'                           => 'Se você já esqueceu sua senha, por favor reinicie-a, usando a [ferramenta de redefinição de senha](:address/password/reset).',
    'registered_help'                         => 'Há um ícone de ajuda no canto superior direito de cada página. Se você precisar de ajuda, clique nele!',
    'registered_doc_html'                     => 'Se você ainda não o fez, recomendamos que leia a [grande parte teórica](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'Se você ainda não o fez, leia, também, o guia de primeiro uso e a descrição completa.',
    'registered_closing'                      => 'Aproveite!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Redefinição de senha:',
    'registered_doc_link'                     => 'Documentação:',

    // new version
    'new_version_email_subject'               => 'Uma nova versão do Firefly III está disponível',

    // email change
    'email_change_subject'                    => 'O seu endereço de email no Firefly III mudou',
    'email_change_body_to_new'                => 'Você ou alguém com acesso à sua conta Firefly III alterou seu endereço de e-mail. Se não esperava esta mensagem, por favor, ignore e apague-a.',
    'email_change_body_to_old'                => 'Você ou alguém com acesso à sua conta Firefly III alterou seu endereço de e-mail. Se você não esperava que isso acontecesse, você **DEVE** entrar no link "desfazer" abaixo, para proteger sua conta!',
    'email_change_ignore'                     => 'Se você iniciou esta alteração, você pode ignorar esta mensagem.',
    'email_change_old'                        => 'O endereço de e-mail antigo era: :email',
    'email_change_old_strong'                 => 'Endereço de e-mail anterior era: **:email**',
    'email_change_new'                        => 'O novo endereço de e-mail é: :email',
    'email_change_new_strong'                 => 'Endereço de e-mail atualizado é: **:email**',
    'email_change_instructions'               => 'Você não pode usar o Firefly III até confirmar esta alteração. Siga o link abaixo para fazer isso.',
    'email_change_undo_link'                  => 'Para desfazer a alteração, abra este link:',

    // OAuth token created
    'oauth_created_subject'                   => 'Um novo cliente OAuth foi criado',
    'oauth_created_body'                      => 'Alguém (esperamos que você) acabou de criar um Cliente OAuth na API do Firefly III para sua conta de usuário. Está nomeado como ":name" e a URL de retorno é `:url`.',
    'oauth_created_explanation'               => 'Com esta chave, o cliente pode acessar **TODOS** os seus registros financeiros através da API do Firefly III.',
    'oauth_created_undo'                      => 'Se não foi você, revogue o acesso desta chave o mais rápido possível, em `:url`',

    // reset password
    'reset_pw_subject'                        => 'Seu pedido de redefinição de senha',
    'reset_pw_instructions'                   => 'Alguém tentou redefinir sua senha. Se foi você, por favor, abra o link abaixo para fazê-lo.',
    'reset_pw_warning'                        => '**POR FAVOR**, confirme que o link realmente direciona para o Firefly III que você espera que vá!',

    // error
    'error_subject'                           => 'Ocorreu um erro no Firefly III',
    'error_intro'                             => 'Firefly III v:version encontrou um erro: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'O erro foi do tipo ":class".',
    'error_timestamp'                         => 'O erro aconteceu em/às: :time.',
    'error_location'                          => 'Esse erro ocorreu no arquivo "<span style="font-family: monospace;">:file</span>", na linha :line com o código :code.',
    'error_user'                              => 'O erro foi encontrado pelo usuário #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Não houve nenhum usuário conectado para esse erro ou nenhum usuário foi detectado.',
    'error_ip'                                => 'O endereço de IP relacionado a este erro é: :ip',
    'error_url'                               => 'URL é: :url',
    'error_user_agent'                        => 'Agente de usuário: :userAgent',
    'error_stacktrace'                        => 'O caminho completo do erro está abaixo. Se você acha que isso é um bug no Firefly III, você pode encaminhar essa mensagem para <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii. rg</a>. Isso pode ajudar a corrigir o erro que você acabou de encontrar.',
    'error_github_html'                       => 'Se você preferir, também pode abrir uma nova issue no <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Se preferir, você também pode abrir uma nova issue em https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'O rastreamento completo está abaixo:',
    'error_headers'                           => 'Os seguintes cabeçalhos também podem ser relevantes:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III criou uma nova transação.|Firefly III criou :count novas transações',
    'new_journals_header'                     => 'Firefly III criou uma transação para você. Você pode encontrá-la em sua instalação do Firefly III:|Firefly III criou :count transações para você. Você pode encontrá-los em sua instalação do Firefly II:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Sua fatura ":name" está atrasada em :diff dias',
    'bill_warning_subject_now_end_date'       => 'Sua fatura ":name" vence HOJE',
    'bill_warning_subject_extension_date'     => 'Sua fatura ":name" deve ser estendida ou cancelada em :diff dias',
    'bill_warning_subject_now_extension_date' => 'Sua fatura ":name" deverá ser prorrogada ou cancelada HOJE',
    'bill_warning_end_date'                   => 'Sua fatura **":name"** terminará em :date. Este momento acontecerá em cerca de **:diff dias **.',
    'bill_warning_extension_date'             => 'Sua fatura **":name"** deverá ser prorrogada ou cancelada em :date. Este momento acontecerá em cerca de **:diff dias**.',
    'bill_warning_end_date_zero'              => 'Sua fatura **":name"** termina em :date. Este momento acontecerá **HOJE!**',
    'bill_warning_extension_date_zero'        => 'Sua fatura **":name"** deverá ser prorrogada ou cancelada em :date. Este momento acontecerá **HOJE!**',
    'bill_warning_please_action'              => 'Por favor, tome a medida apropriada.',

];
