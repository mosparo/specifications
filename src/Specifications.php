<?php

/**
 * The Specification class helps to get access to the specifications.
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2021-2022 mosparo
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
    const JSON_SCHEMA_RULE = 'rule.json';
    const JSON_SCHEMA_RULESET = 'ruleset.json';

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
     * REturns the path to the JSON schema
     *
     * @param $schema
     * @return string
     *
     * @throws Exception
     */
    public static function getJsonSchemaPath($schema): string
    {
        $path = self::getSpecificationResourcesPath() . 'json-schema/' . $schema;
        if (!file_exists($path)) {
            throw new Exception(sprintf('Json schema "%s" not found.', $schema));
        }

        return $path;
    }
}
