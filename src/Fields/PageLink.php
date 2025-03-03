<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/wordplate/extended-acf
 */

declare(strict_types=1);

namespace WordPlate\Acf\Fields;

use WordPlate\Acf\Fields\Settings\ConditionalLogic;
use WordPlate\Acf\Fields\Settings\FilterBy;
use WordPlate\Acf\Fields\Settings\Instructions;
use WordPlate\Acf\Fields\Settings\Multiple;
use WordPlate\Acf\Fields\Settings\Nullable;
use WordPlate\Acf\Fields\Settings\Required;
use WordPlate\Acf\Fields\Settings\Wrapper;

class PageLink extends Field
{
    use ConditionalLogic;
    use FilterBy;
    use Instructions;
    use Multiple;
    use Nullable;
    use Required;
    use Wrapper;

    protected string|null $type = 'page_link';

    public function allowArchives(bool $value = true): static
    {
        $this->settings['allow_archives'] = $value;

        return $this;
    }
}
