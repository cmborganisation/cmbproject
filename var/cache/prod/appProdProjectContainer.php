<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLktnahx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLktnahx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerLktnahx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerLktnahx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerLktnahx\appProdProjectContainer(array(
    'container.build_hash' => 'Lktnahx',
    'container.build_id' => 'c1b0d80e',
    'container.build_time' => 1529415862,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLktnahx');
