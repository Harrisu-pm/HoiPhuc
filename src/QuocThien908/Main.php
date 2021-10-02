<?php

namespace QuocThien908;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\{Command, CommandSender};

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
  
    public $tag = "§l§8[§eHồi Phục§8]";
    
    public function onEnable(){
        $this->getServer()->getLogger()->info("$this->tag §aPlugin Hồi Phục Đã Bật\n§aCode by §bQuocThien908!");
    }
    
    public function onDisnable(){
        $this->getServer()->getLogger()->info("$this->tag §cPlugin Disnable!");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
        if($cmd->getName() === "hoiphuc"){
            if(isset($args[0])){
                if($args[0] === "mau"){
                    $name = $sender->getName();
                    $sender->sendMessage("$this->tag §aHồi Máu Thành Công");
                    $sender->setHealth(20);
                }  else if($args[0] === "thucan"){
                    $sender->sendMessage("$this->tag §aHồi Thức Ăn Thành Công");
                    $sender->setFood(20);
                }
            } else {
                $sender->sendMessage("$this->tag §l§aSử dụng:\n§f/hoiphuc mau§a Để Hồi Phục Đầy Thanh Máu\n§f/hoiphuc thucan§a Để Hồi Phục Đầy Thanh Thức Ăn");
            }
        }
    return true;
    }

}