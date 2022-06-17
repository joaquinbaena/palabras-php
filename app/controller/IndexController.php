<?php
namespace App\Controller;

use App\Models\Palabra;


class IndexController extends BaseController {

    public function IndexAction() 
    {
        $words = Palabra::getInstancia()->getLastWords();
        $this->renderHTML('../view/index_view.php', $words);
    }
}