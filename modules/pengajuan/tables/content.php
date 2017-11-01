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
        ['master' => 'title', 'name' => 'image1', 'notnull' => false],
        ['master' => 'title', 'name' => 'image2', 'notnull' => false],
        ['master' => 'title', 'name' => 'title', 'notnull' => true, 'multilingual' => true],
        ['master' => 'shortIntro', 'name' => 'intro', 'notnull' => true, 'multilingual' => true],
        ['master' => 'description', 'name' => 'description', 'notnull' => false, 'multilingual' => true]
       ];