<?php

require_once "LearningResource.php";
require_once "enums/ResourceType.php";
require_once "enums/Theme.php";

$resource = new LearningResource(
    "Learn enums in 8 minutes! 📅",
    Theme::PHP,
    "https://www.youtube.com/watch?v=sU0XQ3jSsu8",
    ResourceType::Video,
);

echo $resource->toString();