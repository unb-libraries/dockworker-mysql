<?php

namespace Dockworker\Robo\Plugin\Commands;

use Dockworker\Robo\Plugin\Commands\DockworkerLocalCommands;

/**
 * Defines the commands used to interact with a local MySQL application.
 */
class MysqlLocalCommands extends DockworkerLocalCommands {

  /**
   * Provides log checker with ignored log exception items for local MySQL.
   *
   * @hook on-event dockworker-local-log-error-exceptions
   */
  public function getErrorLogExceptions() {
    return [
        '[Note] Got an error reading communication packet' => 'Not a critical error',
    ];
  }

}
