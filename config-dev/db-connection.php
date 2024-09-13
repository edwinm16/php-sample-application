<?php

return new PDO("mysql:host=localhostdb;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
