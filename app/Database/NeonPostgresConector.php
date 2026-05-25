<?php

namespace App\Database;

use Illuminate\Database\Connectors\PostgresConnector;

/**
 * Custom PostgreSQL connector that adds Neon endpoint ID to the DSN.
 *
 * Neon's connection proxy requires the endpoint ID for routing when
 * the client's libpq doesn't support SNI. This connector automatically
 * extracts the endpoint ID from the host and appends it to the DSN
 * as the 'options' parameter.
 *
 * @see https://neon.tech/docs/connect/connection-errors#endpoint-id-is-not-specified
 */
class NeonPostgresConnector extends PostgresConnector
{
    /**
     * Create a DSN string from a configuration.
     *
     * @param  array  $config
     * @return string
     */
    protected function getDsn(array $config)
    {
        $dsn = parent::getDsn($config);

        $host = $config['host'] ?? '';
        $endpointId = explode('.', $host)[0] ?? '';

        // Append Neon endpoint ID to DSN for SNI-less routing
        if ($endpointId && str_starts_with($endpointId, 'ep-')) {
            $dsn .= ";options='endpoint={$endpointId}'";
        }

        return $dsn;
    }
}