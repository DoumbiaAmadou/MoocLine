<?php

namespace moocline\CompteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class mooclineCompteBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
