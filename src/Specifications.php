<?php

/**
 * The Specification class helps to get access to the specifications.
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2021-2023 mosparo
 * @license MIT
 */

namespace Mosparo\Specifications;

/**
 * The Specification class helps to get access to the specifications.
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class Specifications
{
    const SPECIFICATIONS_VERSION = '4.0';

    const JSON_SCHEMA_PROJECT = 'project.json';
    const JSON_SCHEMA_RULE = 'rule.json';
    const JSON_SCHEMA_RULESET = 'ruleset.json';
    const JSON_SCHEMA_SETTING = 'setting.json';
    const JSON_SCHEMA_UPDATE = 'update.json';
    const JSON_SCHEMA_VERSION = 'version.json';
    const JSON_SCHEMA_VERSION_CHANNEL = 'version-channel.json';
    const JSON_SCHEMA_VERSION_CHANNEL_VERSIONS = 'version-channel-versions.json';

    /**
     * Returns the path to the specification resources
     *
     * @return string
     */
    public static function getSpecificationResourcesPath(): string
    {
        return realpath(__DIR__ . '/../resources/');
    }

    /**
     * Returns the path to the JSON schema
     *
     * @param $schema
     * @return string
     *
     * @throws Exception
     */
    public static function getJsonSchemaPath($schema): string
    {
        $path = self::getSpecificationResourcesPath() . '/json-schema/' . $schema;
        if (!file_exists($path)) {
            throw new Exception(sprintf('Json schema "%s" not found.', $schema));
        }

        return $path;
    }
}
