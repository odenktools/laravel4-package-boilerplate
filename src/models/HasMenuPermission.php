<?php namespace Odenktools\Coolcms\Models;

trait HasMenuPermission
{

    /**
     * Many-to-Many relations with Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function menus()
    {
        return $this->hasManyThrough('\Menu', 'odk_role_menus', 'role_id', 'menu_id');
    }

    /**
     * Alias to eloquent many-to-many relation's attach() method.
     *
     * @param mixed $menu
     *
     * <code>
     *
     * $userw = User::where('username','=','moeloet')->first();
     * $rolew = Role::where('role_name','=','admin')->first();
     *
     * $userw->attachPermission( $rolew );
     *
     * //or
     *
     * $userw->attachPermission( 1 );
     *
     * </code>
     * @return void
     */
    public function attachPermission($menu)
    {
        if (is_object($menu))
            $menu = $menu->getKey();

        if (is_array($menu))
            $menu = $menu['id_menu'];

        $this->menus()->attach($menu);
    }

}