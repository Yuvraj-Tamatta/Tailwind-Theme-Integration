<?php

namespace App\Services;

use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Link;

class practice{

    public static function practiceMenu(){
        $logi=true;
        return Menu::new()
        ->setAttribute('id', '1')
        ->add(Link::to('/home', "Home")->append(' hello '))
        ->submenu('profile', Menu::new()
                        ->add(Link::to('/edi', "Edit"))
                        ->add(Link::to('/delete', "Delete"))
                        ->add(Link::to('/update', "Update"))
        )
        ->add(Link::to('/about', "About") ->setAttribute('class', 'text-green-600'))
        ->addIf($logi, Link::to('/login', "Login"));
    }
}
?>