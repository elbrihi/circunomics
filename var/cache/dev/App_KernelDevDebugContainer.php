<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ54efoh\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ54efoh/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZ54efoh.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZ54efoh\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZ54efoh\App_KernelDevDebugContainer([
    'container.build_hash' => 'Z54efoh',
    'container.build_id' => '514f845c',
    'container.build_time' => 1644422495,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ54efoh');