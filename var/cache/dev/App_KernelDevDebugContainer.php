<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJhesa6X\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJhesa6X/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJhesa6X.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJhesa6X\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJhesa6X\App_KernelDevDebugContainer([
    'container.build_hash' => 'Jhesa6X',
    'container.build_id' => '527c16a0',
    'container.build_time' => 1583787057,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJhesa6X');