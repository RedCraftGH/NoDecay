<?php

namespace RedCraftPE\NoDecay;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\LeavesDecayEvent;

class NoDecay extends PluginBase implements Listener {

  public function onEnable(): void {

    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onUpdate(LeavesDecayEvent $event) {

    $event->setCancelled(true);
  }
}
