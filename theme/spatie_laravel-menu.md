### Intro :

The `spatie/menu` package provides a fluent interface to build menus of any size in your php application. If you're building your app with Laravel, the `spatie/laravel-menu` provides some extra treats.

### Requirements :

The menu package requires **PHP 7.0 or higher**. The Laravel package also requires **Laravel 5.1 or higher**.

### Install: 

```bas
composer require spatie/menu
```

### Spatie/Menu start in Project :

If you want to continue in controller then skip the step 1.

Step 1 :  Create new Folder named it Service and create file menuService.php  **app/Services/MenuService.php.**

Step 2 : Give namespace for avoid naming conflict file ( namespace App\Service ) then  include Spatie menu class. 

​		**use Spatie\Menu\Laravel\Facades\Menu;**

​		**use Spatie\Menu\Laravel\Link;** 

step 3:  **Menu::new()**  is used for create menu.

### Spatie/Menu Fundamentals :

1. Start with create basic menu. When we create menu it's a link that redirect to other page. For redirect to other page anchor tag is used. 

   Without anchor tag it's impossible to create a menu which is redirect to other page. 

2. Spatie/laravel-menu create this anchor tag by default in his  function. 

3. Let's Create simple menu with 2 link home and about with spatie menu.

   **app/Service/MenuService.php**

   ```php
   use Spatie\Menu\Laravel\Facades\Menu;
   use Spatie\Menu\Laravel\Link;
   
   public static function menushow(){
       return Menu::new()
               ->add(Link::to("/home", "Home"))
               ->add(Link::to("/about", "About"))
   }
   ```

   

   This spatie/menu generate this type of html:

   ```html
   <ul>
       <li> <a href="/home"> Home </a> </li>
       <li> <a href="/about">About</a> </li>
   </ul>
   ```

4. Now let's show this menu in our blade files. For that go to Your Controller where your view page in called.

   for example your controller file name is userController.php.

   First include the menuService.php file in your controller.

   ```php
   use App\Services\MenuService;
   
   //store menu in variable by calling function 
   $menu = MenuService::menushow();
   
   // pass that variable in view using compact.
   
   return view('viewpage', compact('menu'));
   ```

5. Now go to your blade file.

   **view/viewpage.blade.php**

   ```php
   <div>
   {{ $menu }}
   </div>
   ```


Congrats We created a simple Menu From spatie/laravel-menu !! 😀.

### Manipulation of Menu :

- Spatie menu,  generate menu in html **if we want to add class, style or id in menu we cannot add these from blade files.** We have to give that properties from where it generate. 

  ```html
  // This is demo structure for manipulating 
  <ul>
      <li> <a href="/"> Home </a> </li>
      <li> <a href="/about"> About </a> </li>
      <li> <a href="/contact"> Contact </a> </li>
  </ul>
  ```

  There are Several Method of laravel/menu that they give for manipulation.

  1. **prepend() :**

     This is used to add title of content before the <ul> tag.

     eg.     ->prepend('<h3>User Management</h3>')

  2. **append() :**

     This is used to add content after <ul> tag.

     eg.    ->append('<hr/>')

  3. **addClass() :**

     This used for give class to anchor tag <a>.

     eg. ->addClass('text-red-400')

  4. **addParentClass() :**

     This used for give class to parent class of anchor tag which is <li> tag.

  5. **add() :**

     This is used for add link item in menu.

     eg.  ->add(Link::to('/service', "Service"))

  6. **addIf() :**

     This add item if condition only true otherwise it will not shown in menu.

     eg. 

     ```php
     $login = false;
     return Menu::new()->addIf($login, Link::to('/login', "Login"))
     ```

     This will not shown any menu in blade file because $login is false if you change in true then you can show in blade file.

  7. **build() :**

     Menus can also be created from an array-like data source with the `build` method. The methods accept a data source as their first parameter, and a callable as their second. The method calls the callable over every item in the data source. The callable has three parameters: the menu, the item and the item's key.

     ```php
     $items = [
         '/' => 'Home',
         '/about' => 'About',
         '/contact' => 'Contact',
     ];
     
     Menu::build($items, function ($menu, $link, $label) {
         $menu->link($link, $label);
     });
     ```

  8. **setActive() :**

     ByDefault all items are inactive you can active the menu item by using this function.

     eg.  add(Link::to('/about', "About")->setActive());

  9. **each() :**

     This function is used to iterate over all menu items. You can add style, classes etc. through each function. Each function take a callback function in which you want to iterate.

     eg.  ->each(function(Link $lin){

     ​	$link->addClass('nav-link')

     }) 

     this loop through all link (anchor tag) and put class nav-link to all anchor tag.

  10. **setAttribute() :**

      This is function is used to set attribute on element. you can set any attribute in your element like id, class, data-id, role etc. It take key value pair.

      eg. ->setAttribute('id', 1)   ,   ->setAttribute('class', "text-4xl")

  11. **submenu() :**

      This function is used to create submenu in our main menu. This is called nested menu. 

      Let's see a simple submenu.

      ```php
      Menu::new()
          ->add(Link::to('/', "Home"))
          ->submenu('Profile',
                    Menu::new()
                    	->add(Link::to('/profile/edit', "Edit"))
                      ->add(Link::to('/profile/delete', "Delete"))
                      ->add(Link::to('/profile/restore', "Restore"))
                   )
          ->add(Link::to('/about', "About"));
      ```

      Submenu take two parameter first for title for your menu, second one is for creating menu item which is spatie menu method for creating menu items.

      This upper code will generate this type of Html.

      ```html
      <ul>
          <li><a href="/">Home</a></li>
          <li>
              <ul>Profile
                  <li> <a href="/profile/edit"> Edit </a> </li>
                   <li> <a href="/profile/delete"> Delete </a> </li>
                   <li> <a href="/profile/restore"> Restore </a> </li>
              </ul>
          </li>
          <li><a href="/about">About</a></li>
      </ul>
      ```



### Let create a full Dynmaic menu:

**app/Service/Menu.php**

```php
 public static function menu(){

        $menuitem = forDynamicMenu::all();
        $menuitem= $menuitem->toArray();
        return Menu::build($menuitem, function($menu, $item){
            $menu->setAttribute('id', 'user_manage');
            $menu->addClass('shadow p-4 border');
            $menu->add(Link::to($item['route'], "<i class=\"".$item['icon']. "\".></i>" .$item['title']));
            $menu->each(function(Link $link){ 
                $link->addClass('p-4 ms-2');
                $link->addParentClass('text-xl my-1 shadow border bg-gray-300 rounded-full');
            });          
           
        });       
    }

```

This is how you can fetch menu from DB and give custom styling using classes attribute etc using.

### For More Details :

**Documentaion :** https://spatie.be/docs/menu/v3/introduction

**Github :** https://github.com/spatie/menu

### 