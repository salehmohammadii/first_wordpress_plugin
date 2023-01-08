<?php


namespace Inc;


final class Init
{
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, "register")) {
                $service->register();
            }
        }
    }

    static function get_services()
    {
        return [
            Base\Activate::class,
            Base\Deactivate::class,
            Base\Enqueue::class,
            Pages\Admin::class
        ];
    }

    static function instantiate($class)
    {
        return new $class;
    }
}