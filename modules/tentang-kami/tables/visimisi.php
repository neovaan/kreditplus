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
        ['master' => 'shortIntro', 'name' => 'visi', 'notnull' => true, 'multilingual' => true],
        ['master' => 'description', 'name' => 'misi', 'notnull' => true, 'multilingual' => true],
        ['master' => 'description', 'name' => 'title', 'notnull' => true, 'multilingual' => true],
        ['master' => 'description', 'name' => 'nilai', 'notnull' => true, 'multilingual' => true]
       ];