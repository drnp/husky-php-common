<?php
/*
 * public/index.php
 *
 * Copyright (C) 2018 Dr.NP <np@bsgroup.org>
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 * 3. Neither the name ``Dr.NP'' nor the name of any other
 *    contributor may be used to endorse or promote products derived
 *    from this software without specific prior written permission.
 *
 * libgmr IS PROVIDED BY Dr.NP ``AS IS'' AND ANY EXPRESS
 * OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED.  IN NO EVENT SHALL Dr.NP OR ANY OTHER CONTRIBUTORS
 * BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR
 * BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 * WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR
 * OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
 * ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

/**
 * @file public/index.php
 * @package Husky/php/common
 * @author Dr.NP <np@bsgroup.org>
 * @since 05/30/2018
 * @version 0.0.1
 */

if (PHP_SAPI == 'cli-server')
{
    $url = \parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (\is_file($file))
    {
        return false;
    }
}

\define('BASE_PATH', '/home/np/Projects/husky/php/base');

$app_settings = require __DIR__ . '/../conf/settings.php';
$app = require \BASE_PATH . '/runtime/bootstrap.php';

// Load routes
require __DIR__ . '/../app/routes/Index.route.php';
require __DIR__ . '/../app/routes/User.route.php';
require __DIR__ . '/../app/routes/App.route.php';

// Logics;
//$app->get('/', \Husky\Common\Routes\Index::class . ':index')->setName('Index');
//$app->get('/settings', \Husky\Common\Routes\Index::class . ':settings')->setName('Settings');
$app->get('/_auth', \Husky\Common\Routes\User::class . ':auth')->setName('UserAuth');
$app->get('/_reg', \Husky\Common\Routes\User::class . ':reg')->setName('UserReg');
$app->get('/_code', \Husky\Common\Routes\User::class . ':code')->setName('UserQrCode');
$app->get('/_token', \Husky\Common\Routes\User::class . ':token')->setName('UserToken');

$app->get('/users/{id}', \Husky\Common\Routes\User::class . ':info')->setName('GetUserInfo');
$app->get('/apps/{id}', \Husky\Common\Routes\App::class . ':info')->setName('GetAppInfo');
$app->put('/apps/{id}', \Husky\Common\Routes\App::class . ':update')->setName('UpdateAppInfo');
$app->patch('/apps/{id}', \Husky\Common\Routes\App::class . ':modify')->setName('ModifyAppInfo');
$app->post('/apps', \Husky\Common\Routes\App::class . ':create')->setName('CreateAppInfo');

$app->run();

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: sw=4 ts=4 fdm=marker
 * vim<600: sw=4 ts=4
 */
