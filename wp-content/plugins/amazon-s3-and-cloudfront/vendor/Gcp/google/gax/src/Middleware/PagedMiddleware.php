<?php

/*
 * Copyright 2018 Google LLC
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *     * Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above
 * copyright notice, this list of conditions and the following disclaimer
 * in the documentation and/or other materials provided with the
 * distribution.
 *     * Neither the name of Google Inc. nor the names of its
 * contributors may be used to endorse or promote products derived from
 * this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\Middleware;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\Call;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\Page;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\PagedListResponse;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\PageStreamingDescriptor;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message;
use DeliciousBrains\WP_Offload_Media\Gcp\GuzzleHttp\Promise\PromiseInterface;
/**
* Middleware which wraps the response in an PagedListResponses object.
*/
class PagedMiddleware implements MiddlewareInterface
{
    /** @var callable */
    private $nextHandler;
    private PageStreamingDescriptor $descriptor;
    /**
     * @param callable $nextHandler
     * @param PageStreamingDescriptor $descriptor
     */
    public function __construct(callable $nextHandler, PageStreamingDescriptor $descriptor)
    {
        $this->nextHandler = $nextHandler;
        $this->descriptor = $descriptor;
    }
    public function __invoke(Call $call, array $options)
    {
        $next = $this->nextHandler;
        $descriptor = $this->descriptor;
        return $next($call, $options)->then(function (Message $response) use($call, $next, $options, $descriptor) {
            $page = new Page($call, $options, $next, $descriptor, $response);
            return new PagedListResponse($page);
        });
    }
}
