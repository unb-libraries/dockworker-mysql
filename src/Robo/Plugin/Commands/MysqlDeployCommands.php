<?php

namespace Dockworker\Robo\Plugin\Commands;

use Dockworker\DockworkerDaemonCommands;

/**
 * Defines the commands used to interact with a local MySQL application.
 */
class MysqlDeployCommands extends DockworkerDaemonCommands
{
    /**
     * Provides error log trigers and exceptions for the mysql application.
     *
     * @hook on-event dockworker-logs-errors-exceptions
     *
     * @return mixed[]
     *   The error log exceptions.
     */
    public function provideErrorLogConfiguration(): array
    {
        return [
            [],
            array_values(
                [
                    'Warning, not an error.' => 'as time zone. Skipping it.',
                    'Not a critial error.' => 'Got an error reading communication packets',
                ]
            ),
        ];
    }
}
