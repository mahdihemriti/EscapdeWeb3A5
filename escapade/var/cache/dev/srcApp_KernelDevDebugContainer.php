<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX08zSd9\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX08zSd9/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX08zSd9.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX08zSd9\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerX08zSd9\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'X08zSd9',
    'container.build_id' => '41dd2bdf',
    'container.build_time' => 1650326647,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX08zSd9');
