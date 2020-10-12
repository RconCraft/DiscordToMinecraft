<?php
declare(strict_types=1);

namespace RconCraft;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class MainClass extends PluginBase{

	public function onLoad() : void{
		$this->getLogger()->info(TextFormat::WHITE . "RconCraft is ready!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "rcsay":
				$sender->sendMessage("[Discord] " . $args[0] . " > " . $args[1]);

				return true;
			default:
				return false;
		}
	}
}
