<?php


namespace Core\router;

/**
 * Interface RouterInterface
 * @package App\router
 */
interface RouterInterface
{
    /**
     * Найти маршру в карте маршрутов
     *
     * @param string $path
     * @return array
     */
    public function getRoute($path);

    /**
     * Вызвать маршрут из карты маршрутов
     *
     * @param string $path - путь к методу
     * @return array
     */
    public function callRoute($path);
}