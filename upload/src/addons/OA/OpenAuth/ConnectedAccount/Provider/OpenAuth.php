<?php
/*
 * Copyright by The OpenAuth.dev Team.
 * This file is part of XF/OA/OpenAuth.
 *
 * License: GNU Lesser General Public License v2.1
 *
 * THIS LIBRARY IS FREE SOFTWARE; YOU CAN REDISTRIBUTE IT AND/OR
 * MODIFY IT UNDER THE TERMS OF THE GNU LESSER GENERAL PUBLIC
 * LICENSE AS PUBLISHED BY THE FREE SOFTWARE FOUNDATION; EITHER
 * VERSION 2.1 OF THE LICENSE, OR (AT YOUR OPTION) ANY LATER VERSION.
 * 
 * THIS LIBRARY IS DISTRIBUTED IN THE HOPE THAT IT WILL BE USEFUL,
 * BUT WITHOUT ANY WARRANTY; WITHOUT EVEN THE IMPLIED WARRANTY OF
 * MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.  SEE THE GNU
 * LESSER GENERAL PUBLIC LICENSE FOR MORE DETAILS.
 * 
 * YOU SHOULD HAVE RECEIVED A COPY OF THE GNU LESSER GENERAL PUBLIC
 * LICENSE ALONG WITH THIS LIBRARY; IF NOT, WRITE TO THE FREE SOFTWARE
 * FOUNDATION, INC., 51 FRANKLIN STREET, FIFTH FLOOR, BOSTON, MA  02110-1301  USA
 *
 * The above copyright notice and this disclaimer notice shall be included in all
 * copies or substantial portions of the Software.
 */

namespace OA\OpenAuth\ConnectedAccount\Provider;

use XF\ConnectedAccount\Provider\AbstractProvider;
use XF\Entity\ConnectedAccountProvider;

class OpenAuth extends AbstractProvider
{
    /**
     * {@inheritdoc}
     */
    public function getOAuthServiceName()
    {
        return 'OA\OpenAuth:Service\OpenAuth';
    }

    /**
     * @return string
     */
    public function getProviderDataClass()
    {
        return 'OA\OpenAuth:ProviderData\OpenAuth';
    }

    /**
     * @return string[]
     */
    public function getDefaultOptions()
    {
        return [
            'client_id' => '',
            'client_secret' => ''
        ];
    }

    /**
     * @param ConnectedAccountProvider $provider
     * @param null $redirectUri
     * @return array
     */
    public function getOAuthConfig(ConnectedAccountProvider $provider, $redirectUri = null)
    {
        return [
            'key' => $provider->options['client_id'],
            'secret' => $provider->options['client_secret'],
            'scopes' => [
                \OA\OpenAuth\ConnectedAccount\Service\OpenAuth::SCOPE_OPENID,
                \OA\OpenAuth\ConnectedAccount\Service\OpenAuth::SCOPE_NICKNAME,
                \OA\OpenAuth\ConnectedAccount\Service\OpenAuth::SCOPE_PROFILE,
                \OA\OpenAuth\ConnectedAccount\Service\OpenAuth::SCOPE_EMAIL,
                \OA\OpenAuth\ConnectedAccount\Service\OpenAuth::SCOPE_EMAIL_VERIFIED,
                \OA\OpenAuth\ConnectedAccount\Service\OpenAuth::SCOPE_PICTURE
            ],
            'redirect_uri' => $redirectUri ?: $this->getRedirectUri($provider)
        ];
    }
}
