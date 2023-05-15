<?php

namespace App\Controller;

use App\Model\BookModel;

class BookController
{
    public function bookController($title,$content, $id) {
        $title = htmlspecialchars(trim($title));
        $content = htmlspecialchars(trim($content));

        if(!empty($title) && !empty($content))
        {
            $BookModel = new BookModel();

            $BookModel->addBookDb($title, $content, $id);
        }

    }
}