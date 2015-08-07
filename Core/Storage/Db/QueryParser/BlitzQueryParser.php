<?php
namespace stalk\Core\Storage\Db\QueryParser;

use stalk\Core\Storage\Db\QueryTemplate\BlitzQueryTemplate;

/**
 * Парсер запросов к базам данных через blitz.
 * @author Andrey Mostovoy <stalk.4.me@gmail.com>
 */
class BlitzQueryParser extends AbstractQueryParser {
    /**
     * Возвращает шаблонизатор.
     * @return BlitzQueryTemplate
     */
    protected function getTemplate() {
        return new BlitzQueryTemplate();
    }
}
