<?php
/**
 * @var $helper \Admin\Helper\MenuHelper
 * @var $router \Windwalker\Core\Router\PackageRouter
 */
?>

<h3 class="visible-xs-block">
    @translate('phoenix.title.submenu')
</h3>

<div id="user-info" class="text-center" style="padding-top: 50px; padding-bottom: 50px; border-bottom: 1px solid #efefef">
    <div class="user-info-avatar-wrap text-center">
        <img class="img-circle" src="{{ $user->avatar }}" width="75" height="75" alt="Avatar">
    </div>
    <div class="user-info-detail">
        <h5 class="user-info-name"><strong>{{ $user->name }}</strong></h5>
        <a class="btn btn-default btn-xs user-info-profile-button" href="@route('user', ['id' => $user->id])">
            Profile
        </a>
    </div>
</div>

<div id="submenu" class="list-group">

    <a href="{{ $router->route('tags') }}"
        class="list-group-item {{ $helper->menu->active('tags') }}">
        @translate($luna->langPrefix . 'tags.title')
    </a>

    <a href="{{ $router->route('users') }}"
        class="list-group-item {{ $helper->menu->active('users') }}">
        @translate($warder->langPrefix . 'users.title')
    </a>

	<a href="{{ $router->route('images') }}"
        class="list-group-item {{ $helper->menu->active('images') }}">
        @translate('admin.images.title')
    </a>

    {{-- @muse-placeholder  submenu  Do not remove this line --}}
</div>
