<?php

namespace Deployer;

require_once "recipe/symfony4.php";
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/hosts.php";
require_once __DIR__ . "/tasks.php";

/**
 * Additional workflow events
 */
before("deploy:writable", "deploy:writable:prepare");
after("deploy:cache:warmup", "deploy:restart:php");
after("deploy:failed", "deploy:unlock");
