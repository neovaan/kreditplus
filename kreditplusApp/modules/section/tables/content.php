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
        ['master' => 'title', 'name' => 'title', 'notnull' => true,'multilingual' => true],
        ['master' => 'shortIntro', 'name' => 'intro', 'notnull' => false,'multilingual' => true],
        ['master' => 'title', 'name' => 'flag', 'notnull' => false],
        ['master' => 'description', 'name' => 'description','multilingual' => true],
        ['master' => 'title', 'name' => 'txtbtn_pelajari','multilingual' => true,'notnull' => false],
        ['master' => 'title', 'name' => 'link','notnull' => false],
       ];