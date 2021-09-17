<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\BackendGlueApi\Plugin\Rest;

use Spryker\Glue\GlueApplication\Plugin\Rest\GlueRouterPlugin as GlueApplicationGlueRouterPlugin;

/**
 * @method \Spryker\Glue\BackendGlueApi\BackendGlueApiFactory getFactory()
 */
class GlueRouterPlugin extends GlueApplicationGlueRouterPlugin
{
/**
 * We have a problem here, each plugin resolve the factory in current namespace.
 * So we need to have each plugin in BackendGlueApi module for resolving own factory.
 * Also The problem with routes RouterDependencyProvider::getRouterPlugins() support list of modules but realization support only first.
 */
}
