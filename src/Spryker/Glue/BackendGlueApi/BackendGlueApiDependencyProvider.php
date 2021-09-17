<?php

/**
* Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
* Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
*/

namespace Spryker\Glue\BackendGlueApi;

use Spryker\Glue\GlueApplication\GlueApplicationDependencyProvider;

/**
 * @method \Spryker\Glue\BackendGlueApi\BackendGlueApiConfig getConfig()
 */
class BackendGlueApiDependencyProvider extends GlueApplicationDependencyProvider
{
    /**
     * @return \Spryker\Shared\ApplicationExtension\Dependency\Plugin\ApplicationPluginInterface[]
     */
    protected function getApplicationPlugins(): array
    {
        return [];
    }

    /**
     * Rest resource route plugin stack
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRoutePluginInterface[]
     */
    protected function getResourceRoutePlugins(): array
    {
        return [];
    }

    /**
     * Validate http request plugins
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ValidateHttpRequestPluginInterface[]
     */
    protected function getValidateHttpRequestPlugins(): array
    {
        return [];
    }

    /**
     * Plugins that called before processing {@link \Spryker\Glue\Kernel\Controller\FormattedAbstractController}.
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormattedControllerBeforeActionPluginInterface[]
     */
    protected function getFormattedControllerBeforeActionTerminatePlugins(): array
    {
        return [];
    }

    /**
     * Format/Parse http request to internal rest resource request
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormatRequestPluginInterface[]
     */
    protected function getFormatRequestPlugins(): array
    {
        return [];
    }

    /**
     * Format response data the data which will send with http response
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormatResponseDataPluginInterface[]
     */
    protected function getFormatResponseDataPlugins(): array
    {
        return [];
    }

    /**
     * Format/add additional response headers
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormatResponseHeadersPluginInterface[]
     */
    protected function getFormatResponseHeadersPlugins(): array
    {
        return [];
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ValidateRestRequestPluginInterface[]
     */
    protected function getValidateRestRequestPlugins(): array
    {
        return [];
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RestRequestValidatorPluginInterface[]
     */
    protected function getRestRequestValidatorPlugins(): array
    {
        return [];
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RestUserValidatorPluginInterface[]
     */
    protected function getRestUserValidatorPlugins(): array
    {
        return [];
    }

    /**
     * Called before invoking controller action
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ControllerBeforeActionPluginInterface[]
     */
    protected function getControllerBeforeActionPlugins(): array
    {
        return [];
    }

    /**
     * Called after done processing controller action
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ControllerAfterActionPluginInterface[]
     */
    protected function getControllerAfterActionPlugins(): array
    {
        return [];
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RestUserFinderPluginInterface[]
     */
    protected function getRestUserFinderPlugins(): array
    {
        return [];
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RouterParameterExpanderPluginInterface[]
     */
    protected function getRouterParameterExpanderPlugins(): array
    {
        return [];
    }
}
