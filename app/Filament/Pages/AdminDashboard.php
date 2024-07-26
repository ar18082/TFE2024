<?php

namespace App\Filament\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Page;

class AdminDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.admin-dashboard';
    protected static ?string $title = 'Tableau de bord';


    public static function getNavigationLabel(): string
    {
        return __('Tableau de bord');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Admin');
    }

    public static function getResources(): array
    {
        return [
            UserResource::class,


        ];
    }


}

