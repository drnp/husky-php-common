<?php
/*
 * app/routes/App.route.php
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
 * @file app/routes/App.route.php
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

require __DIR__ . '/../models/App.model.php';

class App
{
    private $container = null;

/* {{{ [__construct] */
    function __construct($container)
    {
        $this->container = $container;
    }

/* }}} */

/* {{{ [App::info] */
    public function info(Request $request, Response $response)
    {
        return $response;
    }

/* }}} */

/* {{{ [App::update] */
    public function update(Request $request, Response $response)
    {
        return $response;
    }

/* }}} */

/* {{{ [App::modify] */
    public function modify(Request $request, Response $response)
    {
        return $response;
    }

/* }}} */

/* {{{ [App::create] */
    public function create(Request $request, Response $response)
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
