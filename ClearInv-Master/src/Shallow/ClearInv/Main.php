<?php

declare(strict_types=1);

namespace Shallow\ClearInv;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;

use pocketmine\Command\Command;

use pocketmine\Command\CommandSender;


class Main extends PluginBase{


    public function onEnable(){

        $this->getServer()->getLogger()->info("InvClear enabled!");

    }



    public function onDisable(){

        $this->getServer()->getLogger()->info("InvClear disabled!");

    }



    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {



        switch($cmd->getName()){



            case "ci":

                if($sender instanceof Player){

                    $sender->getInventory()->clearAll();

                }




    }
return true;
}

}
