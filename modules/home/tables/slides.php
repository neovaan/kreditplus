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
        ['master' => 'title', 'name' => 'image_phone', 'notnull' => true],
        ['master' => 'title', 'name' => 'image_desktop', 'notnull' => true],
        ['master' => 'title', 'name' => 'title', 'notnull' => false, 'multilingual' => true],
        ['master' => 'title', 'name' => 'link', 'notnull' => false],
        ['master' => 'title', 'name' => 'txtbtn', 'notnull' => false, 'multilingual' => true],
        ['master' => 'description', 'name' => 'intro', 'notnull' => false, 'multilingual' => true]
       ];