<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Controller\Annotations;

/**
 * POST Route annotation class.
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target("METHOD")
 */
class Post extends Route
{
    public function getMethod()
    {
        return 'POST';
    }
}
