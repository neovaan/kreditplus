<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 10:02 AM
 */

return [
        ['master' => 'id'],
        ['master' => 'title', 'name' => 'section_id', 'notnull' => true],
        ['master' => 'title', 'name' => 'image', 'notnull' => true],
        ['master' => 'title', 'name' => 'thumbnail', 'notnull' => true],
        ['master' => 'title', 'name' => 'title', 'notnull' => true, 'multilingual' => true],
        ['master' => 'shortIntro', 'name' => 'intro', 'notnull' => true, 'multilingual' => true]
       ];