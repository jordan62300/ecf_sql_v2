<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXraEw8h\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXraEw8h/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXraEw8h.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXraEw8h\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXraEw8h\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XraEw8h',
    'container.build_id' => 'f2fde664',
    'container.build_time' => 1549802327,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXraEw8h');
