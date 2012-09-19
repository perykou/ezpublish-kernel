<?php
/**
 * File containing the RestUser class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\API\Repository\Values\Content\Content;
use eZ\Publish\API\Repository\Values\Content\ContentInfo;
use eZ\Publish\API\Repository\Values\Content\Location;

/**
 * REST User, as received by /user/users/<ID>
 */
class RestUser
{
    /**
     * @var \eZ\Publish\API\Repository\Values\Content\Content
     */
    public $content;

    /**
     * @var \eZ\Publish\API\Repository\Values\Content\ContentInfo
     */
    public $contentInfo;

    /**
     * @var \eZ\Publish\API\Repository\Values\Content\Location
     */
    public $mainLocation;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Content $content
     * @param \eZ\Publish\API\Repository\Values\Content\ContentInfo $contentInfo
     * @param \eZ\Publish\API\Repository\Values\Content\Location $mainLocation
     */
    public function __construct( Content $content, ContentInfo $contentInfo, Location $mainLocation )
    {
        $this->content = $content;
        $this->contentInfo = $contentInfo;
        $this->mainLocation = $mainLocation;
    }
}