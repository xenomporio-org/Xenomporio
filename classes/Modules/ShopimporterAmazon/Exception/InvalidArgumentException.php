<?php

declare(strict_types=1);

namespace Xentral\Modules\ShopimporterAmazon\Exception;

use InvalidArgumentException as SplInvalidArgumentException;


class InvalidArgumentException extends SplInvalidArgumentException implements ShopimporterAmazonExceptionInterface
{

}
