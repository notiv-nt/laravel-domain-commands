<?php

namespace Notiv\Console\Commands\Helpers;

class NamespaceResolver
{
    public const LISTENER = 'Listeners';
    public const MODEL = 'Models';

    public static function resolveDomainNamespace(string $name, string $type)
    {
        $domainNamespace = config('domain-commands.domain_namespace');

        [$domain, $class] = \explode(':', $name);

        return "{$domainNamespace}{$domain}\\{$type}\\{$class}";
    }
}
