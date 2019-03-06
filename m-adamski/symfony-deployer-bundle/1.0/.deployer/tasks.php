<?php

namespace Deployer;

task("deploy:restart:php", function () {
    run("echo '{{ sudo_password }}' | sudo -S service {{ php_version }} restart");
})->desc("Restart PHP");

task("deploy:writable:prepare", function () {
    $dirs = join(" ", get("writable_dirs"));

    cd("{{ release_path }}");
    run("echo '{{ sudo_password }}' | sudo -S setfacl -RL -m mask:rwx $dirs");
})->desc("Prepare writable");
