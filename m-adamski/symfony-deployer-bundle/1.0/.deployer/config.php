<?php

namespace Deployer;

set("application", "");
set("repository", "");
set("ssh_multiplexing", false);
set("git_tty", false);

set("shared_dirs", ["var/log"]);
set("shared_files", [".env.local"]);
set("writable_dirs", ["var"]);

set("sudo_password", function () {
    return askHiddenResponse("[sudo] password: ");
});

set("php_version", "php7.1-fpm");

set("allow_anonymous_stats", false);
