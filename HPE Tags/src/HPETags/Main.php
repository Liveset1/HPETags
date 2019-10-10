<?php

namespace HPETags;

use pocketmine\command\Commands;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\utils\TextFormat as c;
use pocketmine\Server;
use pocketmine\player\PlayerNameTag;

class Main extends PluginBase{

    public function onEnable(){
        $this->getLogger()->notice("(!) HPETags/Plugin Has Been Enabled");
    }

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if (strtolower($cmd->getName())  == "Tags")){
            if ($sender->hasPermission("HPETags"))
                $sender->sendMessage(c::BOLD . c::GRAY . "[!]" . c::RED . "{name} has opened the TagsUI");
            $sender->allowFlight(true);
        }else
               $sender->snedMessage(c::.BOLD.c::GRAY."[!]".c::RESET.c::RED."Invaild Permission");
            }
}
)
public function onDisable(){
    $this->getLogger()->warning(“(!) HPETags/Plugin Has Been Disabled");
    }
}


    



 

          
            
      

    
    
      