<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCG7bm7E\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCG7bm7E/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCG7bm7E.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCG7bm7E\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCG7bm7E\App_KernelDevDebugContainer([
    'container.build_hash' => 'CG7bm7E',
    'container.build_id' => 'b9ccea19',
    'container.build_time' => 1705856191,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCG7bm7E');