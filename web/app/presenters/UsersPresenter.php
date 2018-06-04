<?php

namespace App\Presenters;

use App\Model\InventoryManager;
use Nette\Application\UI\Form;

class InventoryPresenter extends BasePresenter {

    private $userManager;

    function __construct(InventoryManager $userManager)
    {
        $this->inventoryManager = $inventoryManager;
    }

    public function renderDefault($order = 'serial_number')
    {
        $this->template->data = $this->inventoryManager->readAll($order);
    }

    public function renderView($id)
    {
        $this->userManager->updateQuantity($id);
        $this->template->row = $this->userManager->readOne($id);
    }

    public function actionDelete($id)
    {
        $this->userManager->delete($id);
        $this->redirect("Inventory:default");
    }
    
    public function renderInsert()
    {

    }

    public function renderUpdate($id)
    {
        $article = $this->userManager->readOne($id);
        if (!$article)
        {
            $this->error('Row was not found');
        }
        $this['userForm']->setDefaults($article->toArray());
    }
    
    
}

