<?php
/*
 * app/routes/User.route.php
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
 * @file app/routes/User.route.php
 * @package Husky/php/common
 * @author Dr.NP <np@bsgroup.org>
 * @since 06/13/2018
 * @version 0.0.1
 */

namespace Husky\Common\Routes;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

if (!\defined('IN_HUSKY') || !$app)
{
    die('Inject denied');
}

require __DIR__ . '/../models/User.model.php';

class User
{
    private $container = null;

/* {{{ [__construct] */
    function __construct($container)
    {
        $this->container = $container;
    }

/* }}} */

/* {{{ [User::auth] */
    public function auth(Request $request, Response $response)
    {
        $appid = \filter_input(\INPUT_GET, 'appid');
        $code = \filter_input(\INPUT_GET, 'code');

        $this->container['result'] = [
            'type' => $this->container->get('http_auth_type'),
            'user' => $this->container->get('http_auth_user'),
            'pass' => $this->container->get('http_auth_pass'),
            'token' => $this->container->get('http_auth_token'),
        ];

        return $response;
    }

/* }}} */

/* {{{ [User::reg] */
    public function reg(Request $request, Response $response)
    {
        return $response;
    }
/* }}} */

/* {{{ [User::code] */
    public function code(Request $request, Response $response)
    {
        return $response;
    }

/* }}} */

/* {{{ [User::token] */
    public function token(Request $request, Response $response)
    {
        return $response;
    }

/* }}} */

/* {{{ [User::info] */
    public function info(Request $request, Response $response)
    {
        return $response;
    }

/* }}} */

}

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: sw=4 ts=4 fdm=marker
 * vim<600: sw=4 ts=4
 */
