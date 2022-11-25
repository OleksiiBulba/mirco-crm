<?php

declare(strict_types=1);

use MicroCRM\Config\DotEnvConfigurationFactory;

return (new DotEnvConfigurationFactory(BD, '/etc/'))->create();
