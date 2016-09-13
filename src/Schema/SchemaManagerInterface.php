<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2016 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Scim\Schema;

use Scim\Resource\ResourceInterface;

interface SchemaManagerInterface
{
    /**
     * @param \Scim\Schema\SchemaInterface $schema
     */
    public function addSchema(SchemaInterface $schema);

    /**
     * @return \Scim\Schema\SchemaInterface[]
     */
    public function getSchemas();

    /**
     * This method will verifies the resource is valid.
     * Internally the method will check all parameters against all schemas declared by the resource.
     *
     * @param \Scim\Resource\ResourceInterface $resource
     *
     * @return bool
     */
    public function isResourceValid(ResourceInterface $resource);
}
