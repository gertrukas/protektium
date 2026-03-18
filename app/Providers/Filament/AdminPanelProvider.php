<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Width;
use Filament\View\PanelsRenderHook;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->profile()
            ->colors([
                'primary' => Color::Emerald,
                'secondary' => '#50623A',
            ])
            ->darkMode(true)
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn () => '<style>
                    .fi-input-wrp.fi-fo-rich-editor { display: block !important; width: 100% !important; }
                    .fi-fo-rich-editor-main { display: flex !important; flex-direction: column !important; min-height: 300px !important; max-height: 55vh !important; border: 1px solid #e2e8f0 !important; border-radius: .375rem !important; overflow: hidden !important; }
                    .fi-fo-rich-editor-toolbar { position: sticky !important; top: 0 !important; z-index: 99 !important; background: #111827 !important; color: #f9fafb !important; border-bottom: 1px solid #374151 !important; }
                    .fi-fo-rich-editor-toolbar button, .fi-fo-rich-editor-toolbar [role="button"] { color: #f9fafb !important; }
                    .fi-fo-rich-editor-content { flex: 1 1 auto !important; min-height: 0 !important; overflow-y: auto !important; overflow-x: hidden !important; }
                    .fi-fo-rich-editor-content [contenteditable] { min-height: 15rem !important; }
                </style>',
            )
            ->renderHook(PanelsRenderHook::BODY_START,fn() => '
                <style>
                    .fi-ta-cell{
                        vertical-align: top;
                    }
                    .fi-ta-actions {
                        display: flex;
                        justify-content: center;
                    }
                    .fi-ta-header-cell{
                        text-align: center;
                    }
                </style>
            ')
            ->maxContentWidth(Width::Full)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->homeUrl(fn (): string => Dashboard::getUrl());
    }
}
