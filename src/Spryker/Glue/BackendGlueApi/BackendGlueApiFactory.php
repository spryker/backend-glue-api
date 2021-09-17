<?php

/**
* Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
* Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
*/

namespace Spryker\Glue\BackendGlueApi;

use Spryker\Glue\GlueApplication\GlueApplicationFactory;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRelationshipCollectionInterface;

/**
 * @method \Spryker\Glue\BackendGlueApi\BackendGlueApiConfig getConfig()
 */
class BackendGlueApiFactory extends GlueApplicationFactory
{
    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ValidateRestRequestPluginInterface[]
     */
    public function getValidateRestRequestPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_VALIDATE_REST_REQUEST);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RestUserValidatorPluginInterface[]
     */
    public function getRestUserValidatorPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGINS_VALIDATE_REST_USER);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RestRequestValidatorPluginInterface[]
     */
    public function getRestRequestValidatorPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_REST_REQUEST_VALIDATOR);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRoutePluginInterface[]
     */
    public function getResourceRoutePlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_RESOURCE_ROUTES);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRelationshipCollectionInterface
     */
    public function getResourceProviderPlugins(): ResourceRelationshipCollectionInterface
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_RESOURCE_RELATIONSHIP);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ValidateHttpRequestPluginInterface[]
     */
    public function getValidateRequestPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_VALIDATE_HTTP_REQUEST);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormattedControllerBeforeActionPluginInterface[]
     */
    public function getFormattedControllerBeforeActionPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_FORMATTED_CONTROLLER_BEFORE_ACTION);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormatRequestPluginInterface[]
     */
    public function getFormatRequestPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_FORMAT_REQUEST);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormatResponseDataPluginInterface[]
     */
    public function getFormatResponseDataPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_FORMAT_RESPONSE_DATA);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormatResponseHeadersPluginInterface[]
     */
    public function getFormatResponseHeadersPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_FORMAT_RESPONSE_HEADERS);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ControllerBeforeActionPluginInterface[]
     */
    public function getControllerBeforeActionPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_CONTROLLER_BEFORE_ACTION);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ControllerAfterActionPluginInterface[]
     */
    public function getControllerAfterActionPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGIN_CONTROLLER_AFTER_ACTION);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RestUserFinderPluginInterface[]
     */
    public function getRestUserFinderPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGINS_REST_USER_FINDER);
    }

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RouterParameterExpanderPluginInterface[]
     */
    public function getRouterParameterExpanderPlugins(): array
    {
        return $this->getProvidedDependency(BackendGlueApiDependencyProvider::PLUGINS_ROUTER_PARAMETER_EXPANDER);
    }
}
