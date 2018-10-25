<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 08/10/2018
 * Time: 2:55 PM
 */

namespace App\Service;


interface PageService
{
    public function getPages();

    public function getActivePages();

    public function getPage($id);

    public function savePage($request);

    public function updatePage($request, $id);
}