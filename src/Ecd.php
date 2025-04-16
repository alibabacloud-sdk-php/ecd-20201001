<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20201001\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Ecd\V20201001\Models\RebootDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\RebootDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201001\Models\StartDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\StartDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201001\Models\StopDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201001\Models\StopDesktopsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ecd extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - DescribeDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopsResponse
     *
     * @param DescribeDesktopsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->desktopStatus) {
            @$query['DesktopStatus'] = $request->desktopStatus;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktops',
            'version' => '2020-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDesktopsRequest
     *
     * @returns DescribeDesktopsResponse
     *
     * @param DescribeDesktopsRequest $request
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDirectoriesResponse
     *
     * @param DescribeDirectoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->directoryType) {
            @$query['DirectoryType'] = $request->directoryType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDirectories',
            'version' => '2020-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDirectoriesRequest
     *
     * @returns DescribeDirectoriesResponse
     *
     * @param DescribeDirectoriesRequest $request
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param request - GetConnectionTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConnectionTicket',
            'version' => '2020-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetConnectionTicketRequest
     *
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - RebootDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootDesktopsResponse
     *
     * @param RebootDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootDesktops',
            'version' => '2020-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RebootDesktopsRequest
     *
     * @returns RebootDesktopsResponse
     *
     * @param RebootDesktopsRequest $request
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param request - StartDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDesktopsResponse
     *
     * @param StartDesktopsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartDesktopsResponse
     */
    public function startDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDesktops',
            'version' => '2020-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartDesktopsRequest
     *
     * @returns StartDesktopsResponse
     *
     * @param StartDesktopsRequest $request
     *
     * @return StartDesktopsResponse
     */
    public function startDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param request - StopDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDesktopsResponse
     *
     * @param StopDesktopsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopDesktopsResponse
     */
    public function stopDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDesktops',
            'version' => '2020-10-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopDesktopsRequest
     *
     * @returns StopDesktopsResponse
     *
     * @param StopDesktopsRequest $request
     *
     * @return StopDesktopsResponse
     */
    public function stopDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDesktopsWithOptions($request, $runtime);
    }
}
