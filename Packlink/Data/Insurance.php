<?php
/**
 * Copyright 2016 OMI Europa S.L (Packlink)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Packlink\Data;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Part.php';

/**
 * Empty for now
 *
 * @package Packlink\Data
 */
class Insurance extends Part
{
    /**
     * @inheritDoc
     */
    protected function getFieldMap()
    {
        return array();
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return new \stdClass();
    }

}
