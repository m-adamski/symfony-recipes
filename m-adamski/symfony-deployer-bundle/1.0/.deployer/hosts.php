<?php

namespace Deployer;

host("")
    ->stage("develop")
    ->user("deployer")
    ->identityFile(__DIR__ . "/.ssh/deployer_rsa")
    ->addSshOption("UserKnownHostsFile", "/dev/null")
    ->addSshOption("StrictHostKeyChecking", "no")
    ->set("deploy_path", "")
    ->set("branch", "master");
